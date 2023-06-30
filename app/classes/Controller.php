<?php

namespace App\Classes;

use App\Classes\PageRender;
use App\Contracts\Controller as ControllerInterface;

class Controller implements ControllerInterface {
    public static function view(string $template, array $values)
    {
        return PageRender::parse($template, $values);
    }
}