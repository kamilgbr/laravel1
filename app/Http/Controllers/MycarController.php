<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars1;
use App\Models\UserCar;
use Illuminate\Http\Response;
use Illuminate\Http\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\SessionManager;
use Illuminate\Cookie\CookieJar;
use App\Http\Controllers\View;
use App\Http\Controllers\Cache;
use Symfony\Component\HttpFoundation\Cookie as HttpFoundationCookie;

class MycarController extends Controller
{
 

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
            $test2 = UserCar::all();

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
    
        // if($request->has('save')){
    
        //     error_log(request('id'));
        //     error_log(Auth::id());
    
        //     $save=new UserCar();
        //     $save->id_samochodu=request('id');
        //     $save->id_uzytkownika=Auth::id();
        //     $save->save();
    
        //     error_log('id');
    
    
    
        // } 
            
            error_log('FIND');
            //return back()->with(['test' => $call]);
            error_log(count($call));
            //return view("mycar.mycarphp", compact("posts"));
          
          
        
            if($request->has('save')){
    
                error_log(request('id'));
                error_log(Auth::id());
        
                $save=new UserCar();
                $save->id_samochodu=request('id');
                $save->id_uzytkownika=Auth::id();
                $save->save();
        
                error_log('id');
                error_log($request);

                
            

                return redirect()->route('mycar.mycarphp', ['test' => $call]);
        
            } 
            

            return view('mycar.mycarphp' , ['test' => $call], compact('test'));
            //return redirect()->route('mycar.mycarphp')->with( ['test' => $call] );
            // error_log($request->cookie('SSS'));
            // return back()->withCookie($request);

            
          
        }
   
        public function setCookie(Request $request){
           
            $minutes = 60*60*24;
            $response = new Response(view('mycar.mycarphp' , ['test' => $request], compact('test')));
            $response->withCookie(cookie('cookie', $request, $minutes));
            return $response;
        }
    
        public function getCookie(Request $request){
            $value = $request->cookie('cookie');
            return $value;
            
        }


}