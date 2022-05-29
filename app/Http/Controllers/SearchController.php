<?php

namespace App\Http\Controllers;

use App\Models\Cars1;
use App\Models\UserCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use MongoDB\Operation\ReplaceOne;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function search(Request $request){
        // Get the search value from the request
        $marka = $request->input('marka');
        $model = $request->input('model');
       
     
    
        // Search in the title and body columns from the posts table
        $cars = Cars1::query()
            ->where('Marka_pojazdu', 'LIKE', "%{$marka}%")
            ->where('Model_pojazdu', '=', "$model")->get();
            
      
        // Return the search view with the resluts compacted
        return view('viewcars/viewcars', compact('cars'));
    }



    public function searchToDelete(Request $request){
        // Get the search value from the request
    
        $link = $request->input('link');
      
        
     
    
        // Search in the title and body columns from the posts table
        $cars = Cars1::query()
     

    
            ->where('Link',  'LIKE' ,"{$link}")->get();
    
            
        // Return the search view with the resluts compacted
        return view('deletecar/choosedelete', compact('cars'));
    }
}
