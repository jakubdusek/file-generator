<?php
namespace Hexako\Generator\Filesystem;

interface FilesystemInterface
{
    public function make(string $file, string $content): int;

    public function exists(string $file): bool;

    public function get(string $file): string;
}