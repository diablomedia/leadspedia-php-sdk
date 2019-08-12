<?php

use Localheinz\PhpCsFixer\Config;
use DiabloMedia\PhpCsFixer\Config\RuleSet\Php71;
$config = Config\Factory::fromRuleSet(new Php71());
$config->setUsingCache(true)
    ->getFinder()
    ->exclude('vendor')
    ->in(__DIR__)
;
return $config;
