#!/bin/sh
set -e

# The npm wrapper invokes java from PATH rather than JAVA_HOME.
if [ -n "${JAVA_HOME:-}" ]; then
    PATH="$JAVA_HOME/bin:$PATH"
    export PATH
fi

java_version=$(java -version 2>&1) || {
    echo "Java 11 or newer is required. Set JAVA_HOME to a compatible JDK." >&2
    exit 1
}
java_major=$(printf '%s\n' "$java_version" | awk -F '"' '/version/ {split($2, parts, "."); print (parts[1] == 1 ? parts[2] : parts[1]); exit}')
case "$java_major" in
    ''|*[!0-9]*)
        echo "Unable to determine the Java version. Set JAVA_HOME to a Java 11+ JDK." >&2
        exit 1
        ;;
esac
if [ "$java_major" -lt 11 ]; then
    echo "OpenAPI Generator 7 requires Java 11 or newer; found Java $java_major." >&2
    echo "Set JAVA_HOME to a compatible JDK and rerun ./build.sh." >&2
    exit 1
fi

npm install

# OpenAPI Generator 7 requires Java 11 or newer on PATH.
./node_modules/.bin/openapi-generator-cli version

curl https://s3.amazonaws.com/api-docs.io/developer.leadspedia.com/v2.0.json -o ./schema/api-docs.json

php scripts/convertor.php

# Refresh generated tests while preserving hand-written tests and shared helpers.
if [ -f .openapi-generator/FILES ]; then
    awk '/^test\/(Api|Model)\/[A-Za-z][A-Za-z0-9_]*Test\.php$/' .openapi-generator/FILES |
        while IFS= read -r generated_test; do
            rm -f "$generated_test"
        done
fi

rm -rf ./src/*
rm -rf ./docs/*

./node_modules/.bin/openapi-generator-cli generate -i ./schema/openapi.json -g php -o ./ -c openapi-generator-config.json --git-user-id=diablomedia --git-repo-id=leadspedia-php-sdk

composer update

php -d memory_limit=768M ./vendor/bin/rector process

php -d memory_limit=768M ./vendor/bin/php-cs-fixer fix
