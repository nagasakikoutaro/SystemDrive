<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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

    public function edit(Request $request){
     $data = Bodytemperature::find($request->id);
        return view('BodyTemperature.edit',compact('data'));
    }

    public function update(Request $request){
      
      $data = Bodytemperature::find($request->id);
      $data_form = $request->all();

      unset($data_form['_token']);

      $data->fill($data_form)->save();
      return redirect('/index');
    }

    public function delete(Request $request){
        $data = BodyTemperature::find($request->id);

        $data->delete();
        return redirect('/index');
    }


    public function index(Request $request){
        
         $name=Auth::user()->name;
        $data = DB::table('bodytemperatures')
        ->where('name', '=', $name)
        ->get();
        
        return view('BodyTemperature.index',compact('data'));
    }
}
