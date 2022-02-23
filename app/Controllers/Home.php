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
    public function index3()
    {
        return view('vindex3');
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

    public function partner()
    {
        return view('vpartner');
    }
}
