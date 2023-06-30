<?php

namespace App\Contracts;

interface Controller {
    /**
     * Parse the page, and return contents of the page
     */
    public static function view(string $template, array $values);
}