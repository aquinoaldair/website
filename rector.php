<?php declare(strict_types=1);

use Rector\Config\RectorConfig;
use RectorLaravel\Set\LaravelLevelSetList;
use RectorLaravel\Set\LaravelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\Set\ValueObject\LevelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ])
    ->withSets([
       SetList::DEAD_CODE,
        SetList::EARLY_RETURN,
        //SetList::TYPE_DECLARATION,
        //SetList::CODE_QUALITY,
        //SetList::CODING_STYLE,
        //LevelSetList::UP_TO_PHP_82,
        LaravelSetList::LARAVEL_CODE_QUALITY,
        LaravelLevelSetList::UP_TO_LARAVEL_110
    ]);
