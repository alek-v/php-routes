<?php

namespace App\Classes;

use App\Classes\PageRender;
use App\Contracts\Controller as ControllerInterface;

class Controller implements ControllerInterface {
    /**
     * Parse the page, and return contents of the page
     */
    public static function view(string $template, array $values)
    {
        return PageRender::parse($template, $values);
    }
}