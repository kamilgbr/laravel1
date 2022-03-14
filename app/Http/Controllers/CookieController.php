<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setCookie(Request $request){
        $minutes = 60;
        $response = new Response((view('mycar.mycarphp' , ['test' => $request], compact('test'))));
        $response->withCookie(cookie('cookiename', $request, $minutes));
        return $response;
    }

    public function getCookie(Request $request){
        $value = $request->cookie('cookiename');
        return (view('mycar.mycarphp' , ['test' => $value]));
        
    }


}
