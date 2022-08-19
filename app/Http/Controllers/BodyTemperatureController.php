<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BodyTemperature;

class BodyTemperatureController extends Controller
{
    public function create(){


        return view('BodyTemperature.create');
    }

    public function post(Request $request){

      $data = new BodyTemperature;
      $form = $request->all();

      unset($form['_token']);

      unset($form['image']);

      $data->fill($form);
      $data->save();

        return redirect('/index');
    }

    public function index(){
        return view('BodyTemperature.index');
    }
}
