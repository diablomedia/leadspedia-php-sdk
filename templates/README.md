# PHP generator templates

`openapi-generator-config.json` selects `templates/php` as the template directory,
so `build.sh` uses these overrides whenever it regenerates the SDK. Other files
use the defaults bundled with OpenAPI Generator 7.27.0. Generation requires
Java 11 or newer on `PATH`.

`build.sh` also accepts `JAVA_HOME` and checks the Java version before installing
dependencies. On macOS with Homebrew OpenJDK installed, run:

```sh
JAVA_HOME="$(brew --prefix openjdk)/libexec/openjdk.jdk/Contents/Home" ./build.sh
```

`php/composer.mustache` sets the PHP, PHPUnit, PHP_CodeSniffer, and Diablo Media
fixer configuration requirements. It retains the current upstream runtime
dependencies and test autoload namespace. `php/phpunit.xml.mustache` provides
the PHPUnit 10 configuration, and `php/README.mustache` documents the supported
PHP versions. The API and model test templates generate executable contract
checks using the shared helpers in `test/Support/`.

`php/api.mustache` routes async success responses through the same response handler
as synchronous calls. Malformed or empty JSON rejects the promise with an
`ApiException` containing the HTTP status, headers, and original response body.
It also documents date parameters as `DateTimeInterface|string` and serializes
date objects as `Y-m-d` before query encoding. Both changes survive regeneration.

The Composer template preserves the SDK's Guzzle 7 requirement.

The Composer template also includes Rector. After generation, `build.sh` runs
Rector's PHP 8.2 upgrade rules and PHPUnit code quality rules from `rector.php`
over `src/` and `test/`, then runs PHP CS Fixer. GitHub Actions checks both tools
in dry-run mode.

PHP CS Fixer detects the available CPU cores and processes one file per batch,
with a ten-minute timeout per batch. This avoids the default two-minute timeout
for batches of ten large generated API files on slower CI runners. The settings
in `.php-cs-fixer.php` apply to both CI and `build.sh`.

Constructor promotion preserves parameter names so named arguments keep working.
`PreferPHPUnitThisCallRector` is skipped because the fixer configuration requires
static PHPUnit calls.
Rector adds `void` return types before the fixer cleans redundant return tags so
the build produces output that passes both dry-run checks in one pass.

## GitHub Actions security

CI runs [zizmor](https://docs.zizmor.sh/) 1.32.0 on pull requests and pushes to
`master` with pedantic audits enabled. Findings fail the `zizmor` job and appear
as workflow annotations.
The check uses only `contents: read` permission and does not require GitHub
Advanced Security. Action references are pinned to commit SHAs, and checkouts
disable credential persistence.

With Python 3.11 or newer and [uv](https://docs.astral.sh/uv/) installed, run the
same version locally from the repository root:

```sh
uvx zizmor==1.32.0 --pedantic .
```

Set `GH_TOKEN` to enable online audits locally, or pass `--offline` for an offline
scan. CI enables online audits using its read-only GitHub token. When upgrading
zizmor, update the workflow version and this command together.

Dependabot checks Composer, npm, and GitHub Actions dependencies every Monday.
Version updates have a seven-day cooldown. Minor and patch updates are grouped
into one pull request per ecosystem; major updates remain separate.

## Contract tests

Every generated API test checks its operation against `schema/openapi.json` using
Guzzle's mock handler and request history. It verifies the HTTP method, configured
host, path, query serialization, authentication, response model data and HTTP
metadata, omission of optional null parameters, missing required parameters, and
preservation of 400/500 error response details. It also checks both async methods
for successful model deserialization and HTTP metadata, plus malformed and empty
JSON rejection through all synchronous and asynchronous variants. Fixtures include
dates, enum values, numbers, and strings containing characters that need URL encoding.

Generated model tests check constructor/JSON round trips, deserialization,
getters/setters, array access, falsy values, and unsetting properties. These tests
exercise SDK behavior locally; they do not validate LeadsPedia's live behavior or
business rules. Add scenario-specific tests in separate hand-written files.

OpenAPI Generator normally preserves existing test files. `build.sh` removes
only the generated test paths recorded in `.openapi-generator/FILES` before
regeneration, so template and operation changes reach the generated tests.
Keep custom tests outside that generated file list. Shared helpers and
`GeneratedClientCompatibilityTest.php` are preserved. Incomplete or assertion-free
tests fail the PHPUnit checks.

## Converter tests

`test/Scripts/ConvertorTest.php` runs a copy of `scripts/convertor.php` with small
fixtures in a temporary directory. It checks document/security mapping, query
types and defaults, response synthesis and preservation, duplicate paths, and the
legacy delivered-leads path correction. Official OpenAPI fixtures also check Core
path filtering, Basic authentication, parameter schemas, and fallback model names.
It also verifies that the checked-in API docs
reproduce `schema/openapi.json`. The project schema files are never overwritten
by these tests.

`build.sh` downloads the official `https://developer.leadspedia.com/openapi.json`.
The converter normalizes its Core API operations to Swagger 2.0, retaining the
SDK's path-based class/method naming and two generic response models. It follows
the official Basic authentication contract; configure `setUsername()` and
`setPassword()` instead of query-string API keys. See `schema/README.md` for the
source migration details and removed/new endpoints. The legacy API docs.io input
format remains supported for existing fixtures and archived specifications.

`schema/compatibility.json` preserves previous parameter ordering for shared
operations, known monetary decimal types, and standard date formats. The converter
applies this committed overlay to the official source before generation. Regression
tests exercise legacy positional calls and date/amount serialization through all
four synchronous/asynchronous method variants.

Run just these tests with `vendor/bin/phpunit --filter ConvertorTest`. They are
also included in the normal PHPUnit suite and the PHP 8.2–8.5 CI matrix. The
custom PHPUnit template preserves their discovery during SDK regeneration.

The inline schema name mappings in `openapi-generator-config.json` preserve the
SDK's `InlineResponse200` and `InlineResponse2001` model names.

Generator 7 uses `hostIndex` instead of `host_index` for the API constructor and
`setHostIndex()` parameter. Update those named arguments when upgrading; positional
arguments continue to work.

These templates were copied from the pinned generator's `php/` resources. Review
them against the upstream templates when upgrading the generator. See the
[template customization documentation](https://openapi-generator.tech/docs/templating/).
