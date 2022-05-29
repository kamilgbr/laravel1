<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cars1;

class DeleteCarController extends Controller
{
    
    public function carsToDelete(){

        $cars = Cars1::all();
    

        return view('deletecar.choosedelete', compact('cars'));


    }

    public function remove($_id){

        error_log("Usuń");
        $data = Cars1::destroy($_id);
        if($data){

        
            return redirect()->route('deletecar.carsToDelete');
         
        }

else{
    return redirect()->route('deletecar.carsToDelete');

    }
}
}
