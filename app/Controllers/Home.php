<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/front/home');
    }

    function contact()
    {
        return view('pages/front/contact');
    }
}
