<?php
namespace Hexako\Generator;

use Hexako\Generator\Compilers\CompilerInterface;

interface GeneratorInterface
{
    public function make(string $templatePath, array $templateData, string $filePathToGenerate): void;

    public function compile(string $templatePath, array $data, CompilerInterface $compiler): string;
}