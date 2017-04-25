<?php
namespace Hexako\Generator\Compilers;

class TemplateCompiler implements CompilerInterface {

    public function compile(string $template, array $data): string
    {
        foreach($data as $key => $value)
        {
            $lowerCaseKey = $key.'_LOWER_CASE';
            $template = preg_replace("/\\$$key\\$/i", $value, $template);
            $template = preg_replace("/\\$$lowerCaseKey\\$/i", strtolower($value), $template);
        }

        return $template;
    }

}
