<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BodyTemperature;

class BodyTemperatureController extends Controller
{
    public function create(){


        return view('BodyTemperature.create');
    }

    public function post(){

      

        return redirect('/index');
    }

    public function index(){
        return view('BodyTemperature.index');
    }
}
