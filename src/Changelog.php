<?php

namespace BlameButton\Laravel\Changelog;

use BlameButton\Laravel\Changelog\Exceptions\ChangelogNotFoundException;
use Illuminate\Mail\Markdown;
use Illuminate\Support\HtmlString;

class Changelog
{
    /**
     * Get the location of the changelog file.
     */
    public function path(): string
    {
        return config()->string('changelog.file', base_path('CHANGELOG.md'));
    }

    /**
     * Get the raw content of the changelog.
     *
     * @throws ChangelogNotFoundException when the changelog file can not be found.
     */
    public function raw(): string
    {
        $file = $this->path();

        if (! file_exists($file)) {
            throw new ChangelogNotFoundException;
        }

        $contents = file_get_contents($file);
        if ($contents === false) {
            throw new ChangelogNotFoundException;
        }

        return $contents;
    }

    /**
     * Generate a HTML version of your changelog.
     */
    public function html(): HtmlString
    {
        return Markdown::parse($this->raw());
    }
}
