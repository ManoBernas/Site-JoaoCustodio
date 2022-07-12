<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
        // return view('carros');
    }
    public function carros()
    {
        return view('carros');
    }
    public function motas()
    {
        return view('motas');
    }
    public function pessoas()
    {
        return view('pessoas');
    }
    public function projetos()
    {
        return view('projetos');
    }


}
