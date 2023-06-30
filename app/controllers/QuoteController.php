<?php

namespace App\Controllers;

use App\Classes\Controller;
use App\Models\Quote;

class QuoteController extends Controller {
    public static function index()
    {
        return self::view('quotes', ['content' => Quote::index()]);
    }
}