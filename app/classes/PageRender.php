<?php

namespace App\Classes;

class PageRender {
    public static function parse(string $template, array $values)
    {
        $template = file_get_contents(__DIR__ . '/../views/' . $template . '.php');

        foreach ($values as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }

        return $template;
    }
}