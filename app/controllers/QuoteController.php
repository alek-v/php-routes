<?php

namespace App\Controllers;

use App\Classes\Controller;
use App\Models\Quote;

class QuoteController extends Controller {
    public function index()
    {
        return $this->view('quotes', ['content' => Quote::index()]);
    }
}