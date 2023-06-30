<?php

namespace App\Controllers;

use App\Models\Quote;

class QuoteController {
    public static function index()
    {
        return Quote::index();
    }
}