#!/bin/sh
set -e

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
