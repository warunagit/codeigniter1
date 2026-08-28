<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
