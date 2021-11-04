<?php

namespace BlameButton\Laravel\Changelog\Tests;

use BlameButton\Laravel\Changelog\ChangelogFacade;
use BlameButton\Laravel\Changelog\ChangelogServiceProvider;
use Illuminate\Support\Facades\Storage;
use Orchestra\Testbench\TestCase;

class ChangelogTest extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            ChangelogServiceProvider::class,
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();

        Storage::fake();
    }

    public function testRaw(): void
    {
        $expected = "Changelog\n\nv1.0.0";

        Storage::put(base_path('CHANGELOG.md'), $expected);

        $content = ChangelogFacade::raw();

        self::assertNotNull($content);
        self::assertEquals($expected, $content);
    }
}
