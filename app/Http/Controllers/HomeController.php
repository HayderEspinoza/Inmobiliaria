<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.home');
    }
    public function apartamentos()
    {
        return view('web.apartamentos');
    }
    public function servicios()
    {
        return view('web.servicios');   
    }
    public function inmobiliaria()
    {
        return view('web.inmobiliaria');   
    }
    public function contacto()
    {
        return view('web.contacto');
    }
}
