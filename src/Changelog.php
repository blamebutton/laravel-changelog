<?php

namespace BlameButton\Laravel\Changelog;

use BlameButton\Laravel\Changelog\Exceptions\ChangelogNotFoundException;
use Illuminate\Support\Facades\Storage;

class Changelog
{
    private function getFile(): string
    {
        return config('config.file', base_path('CHANGELOG.md'));
    }

    public function raw(): string
    {
        $file = $this->getFile();

        if (!Storage::exists($file)) {
            throw new ChangelogNotFoundException();
        }

        return Storage::get($file);
    }
}
