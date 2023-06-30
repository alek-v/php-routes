<?php

namespace App\Contracts;

interface Controller {
    public static function view(string $template, array $values);
}