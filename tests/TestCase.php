<?php

namespace BlameButton\Laravel\Changelog\Tests;


use BlameButton\Laravel\Changelog\ChangelogServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            ChangelogServiceProvider::class,
        ];
    }
}
