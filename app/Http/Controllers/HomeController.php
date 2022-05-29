<?php

namespace App\Http\Controllers;
use App\Models\Cars1;
use App\Models\UserCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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

    public function start(){
     
    
        return view('home');

    }
    public function index(Request $request)
    {      
        $marka= request('q_marka');
        $model = request('q_model');
        $od = request('q_rok_produkcji_od');
        $do = request('q_rok_produkcji_do');
        $skrzynia = request('q_skrzynia');
        $paliwo = request('q_paliwo');
        $moc = request('q_moc');
        $pojemnosc = request('q_pojemność');
        $nadwozie = request('q_typ_nadwozia');
        
        error_log("Marka: ".$marka);
        error_log("Model: ".$model);
        error_log("ROK OD: ".$od);
        error_log("ROK DO: ".$do);
        error_log("Skrzynia: ".$skrzynia);
        error_log("Paliwo: ".$paliwo);
        error_log("Moc: ".$moc);
        error_log("Pojemność: ".$pojemnosc);
        error_log("Nadwozie: ".$nadwozie);

      
      $test = Cars1::all();
        

      
        
        
        
        $call = $test->filter(function($choose){

      
            
            if(request('q_marka') == "Mercedes")
            {
                
                $choose-> Marka_pojazdu = 'Mercedes-Benz';
                error_log("Marka: ".$choose-> Marka_pojazdu);

            if($choose->Marka_pojazdu && 
            $choose->Model_pojazdu == request('q_model') && 
            ($choose->Rok_produkcji >= request('q_rok_produkcji_od') && $choose->Rok_produkcji <= request('q_rok_produkcji_do')) &&
            $choose->Skrzynia_biegów == request('q_skrzynia') && 
            $choose->Rodzaj_paliwa == request('q_paliwo') &&
            $choose->Moc >= request('q_moc') &&
            $choose->Pojemność_skokowa >= request('q_pojemność')&&
            $choose->Typ_nadwozia == request('q_typ_nadwozia'))
       
           {
               return true;
           }
        
       
           return false;
           
        }
          
            else if($choose->Marka_pojazdu == request('q_marka') && 
            $choose->Model_pojazdu == request('q_model') && 
            ($choose->Rok_produkcji >= request('q_rok_produkcji_od') && $choose->Rok_produkcji <= request('q_rok_produkcji_do')) &&
            $choose->Skrzynia_biegów == request('q_skrzynia') && 
            $choose->Rodzaj_paliwa == request('q_paliwo') &&
            $choose->Moc >= request('q_moc') &&
            $choose->Pojemność_skokowa >= request('q_pojemność')&&
            $choose->Typ_nadwozia == request('q_typ_nadwozia'))
       
           {
               return true;
           }
        
           return false;
           
        }
  
    );

  
    if($request->has('save')){
        error_log(request('id'));
        error_log(Auth::id());

        $save=new UserCar();
        $save->id_samochodu=request('id');
        $save->id_uzytkownika=Auth::id();
        $save->save();

        error_log('id');

        return redirect()->route('savedcar.saved');

    } 
        
        error_log('FIND');
        //return back()->with(['test' => $call]);
       
  
        //return view("mycar.mycarphp", compact("posts"));
        return redirect()->route('home', ['request' => $call]);
 
      

    }

   





   

}
