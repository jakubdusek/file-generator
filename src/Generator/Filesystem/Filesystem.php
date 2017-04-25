<?php
namespace Hexako\Generator\Filesystem;

class Filesystem implements FilesystemInterface
{

    public function make(string $file, string $content): int
    {
        if ( $this->exists($file))
        {
            throw new FileAlreadyExists;
        }

        return file_put_contents($file, $content);
    }

    public function exists(string $file): bool
    {
        return file_exists($file);
    }

    public function get(string $file): string
    {
        if ( ! $this->exists($file))
        {
            throw new FileNotFound($file);
        }

        return file_get_contents($file);
    }
}