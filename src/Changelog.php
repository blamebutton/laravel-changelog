<?php

namespace BlameButton\Laravel\Changelog;

use Illuminate\Support\Facades\Storage;

class Changelog
{
    // Build your next great package.

    private function getFile(): string
    {
        return config('config.file', base_path('CHANGELOG.md'));
    }

    public function raw(): ?string
    {
        $file = $this->getFile();
        if (!Storage::exists($file)) {
            return null;
        }

        return Storage::get($file);
    }
}
