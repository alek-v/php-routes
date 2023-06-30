<?php

namespace App\Classes;

class Request {
    public function __construct()
    {
        foreach ($_SERVER as $key => $value) {
            $this->{$this->setKey($key)} = $value;
        }
    }

    /**
     * Handle key values
     */
    private function setKey($key)
    {
        return strtolower($key);
    }
}