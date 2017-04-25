<?php
namespace Hexako\Generator\Compilers;

interface CompilerInterface {
    public function compile(string $template, array $data): string;
} 