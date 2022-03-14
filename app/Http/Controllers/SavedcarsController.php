<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCar;
use App\Models\Cars1;
use App\Models\Cars2;
use Illuminate\Support\Facades\Auth;
use PDF;

class SavedcarsController extends Controller
{
    public function index(){

        $user_id = Auth::id();
        $cars = UserCar::all();
        $cars1 = Cars1::all();
   
       
        $call = $cars->filter(function($choose){

            if (Auth::id() == $choose->id_uzytkownika) {

           
                 return true;
          
                    }     else

                         return false;});

                       
           
          
         

        // return view('savedcars.saved', compact('cars', 'user_id', 'cars1'));
        return view('savedcars.saved' , ['cars' => $call] , compact('cars1'));

        
        }
       public function delete($_id){

        error_log("Usuń");
        $data = UserCar::destroy($_id);
        if($data){

            return redirect()->route('savedcars.saved');
        }

        else {
            dd('Nie można usunąć tego samochodu');

        }

       }
           
    //    public function createPDF() {
    //     // retreive all records from db
    //     $data = UserCar::all();
    //     // share data to view
    //     view()->share('savedcars',$data);
    //     $pdf = PDF::loadView('pdf_view', $data);
    //     // download PDF file with download method
    //     return $pdf->download('pdf_file.pdf');
    //   }


}