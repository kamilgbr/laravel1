<?php

namespace App\Http\Controllers;

use App\Models\Cars1;
use Illuminate\Http\Request;


class ViewcarsController extends Controller
{
    public function index(){

        $cars = Cars1::all();
    

        return view('viewcars.viewcars', compact('cars'));


    }


}