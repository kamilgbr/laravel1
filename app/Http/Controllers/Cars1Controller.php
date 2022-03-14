<?php

namespace App\Http\Controllers;

use App\Models\Cars1;
use Illuminate\Http\Request;


class Cars1Controller extends Controller
{
    public function form(){

        return view('cars1.form');
    }



    public function save(Request $request){

        //dd($request->Kategoria);

        $data = new Cars1($request->all());
        $data->save();
        
        if($data){
            
            return back();
        }

        else{
            return back();

        }
    }
}
