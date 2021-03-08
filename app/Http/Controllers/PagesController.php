<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PagesController extends Controller
{
    public function index(){

        return view('index');
    }
}
