<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function index2()
    {
        return view('vindex2');
    }
    public function privacy()
    {
        return view('vprivacy');
    }
    public function imprint()
    {
        return view('vimprint');
    }
    public function toc()
    {
        return view('vterm');
    }
}
