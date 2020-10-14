#!/bin/sh
set -e

rm -rf ./src/*
rm -rf ./docs/*

npm install

curl https://s3.amazonaws.com/api-docs.io/developer.leadspedia.com/v2.0.json -o ./schema/api-docs.json

php scripts/convertor.php

./node_modules/.bin/openapi-generator-cli generate -i ./schema/openapi.json -g php -o ./ -c openapi-generator-config.json --git-user-id=diablomedia --git-repo-id=leadspedia-php-sdk

composer update

composer require diablomedia/php-cs-fixer-config --dev

php -d memory_limit=768M ./vendor/bin/php-cs-fixer fix
