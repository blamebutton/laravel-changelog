<?php

declare(strict_types=1);

use BlameButton\Laravel\Changelog\Changelog;
use Illuminate\Support\Facades\Storage;
use Mockery\MockInterface;

beforeEach(function () {
    Storage::fake();
});

it('handles raw file', function () {
    $expected = "Changelog\n\nv1.0.0";

    Storage::put(base_path('CHANGELOG.md'), $expected);

    /** @var Changelog&MockInterface $changelog */
    $changelog = $this->mock(Changelog::class, function (Changelog&MockInterface $mock) {
        $mock->shouldReceive('path')->andReturn(Storage::path(base_path('CHANGELOG.md')));
        $mock->shouldReceive('raw')->passthru();
    });

    expect($changelog->raw())->toEqual($expected);
});
