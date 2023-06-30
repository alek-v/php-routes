<?php

namespace App\Models;

class Quote {
    public static function index()
    {
        $quote = json_decode(file_get_contents('https://api.vavok.net/quotes/random'));

        return $quote->body;
    }
}