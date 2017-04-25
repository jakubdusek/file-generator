<?php
namespace Hexako\Generator;

use Hexako\Generator\Compilers\CompilerInterface;
use Hexako\Generator\Compilers\TemplateCompiler;
use Hexako\Generator\Filesystem\Filesystem;

class Generator implements GeneratorInterface
{

    protected $filesystem;

    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    public function make(string $templatePath, array $templateData, string $filePathToGenerate): void
    {
        $template = $this->compile($templatePath, $templateData, new TemplateCompiler);
        $this->filesystem->make($filePathToGenerate, $template);
    }

    public function compile(string $templatePath, array $data, CompilerInterface $compiler): string
    {
        return $compiler->compile($this->filesystem->get($templatePath), $data);
    }
}
