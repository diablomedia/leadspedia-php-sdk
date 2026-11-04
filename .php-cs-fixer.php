<?php

use Ergebnis\PhpCsFixer\Config;
use DiabloMedia\PhpCsFixer\Config\RuleSet\Php82;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

$config = Config\Factory::fromRuleSet(Php82::create());

// Large generated API files need smaller batches and more time on CI runners.
$config->setParallelConfig(ParallelConfigFactory::detect(1, 600));
$config->setCacheFile(__DIR__ . '/.php_cs.cache');
$config->getFinder()
    ->exclude('vendor')
    ->in(__DIR__)
;

return $config;
