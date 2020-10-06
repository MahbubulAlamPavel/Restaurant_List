<?php

namespace App\Http\Controllers;

class mainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    function list() {
        return view('list');
    }
    public function add()
    {
        return view('add');
    }
    public function search()
    {
        return view('search');
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
}
