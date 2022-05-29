<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){


         $users = User::all();
          return view('usersview.users', compact('users'));
    
    
        }

        public function delete($_id){

            error_log("Usuń");
            $data = User::destroy($_id);
            if($data){
    
            
                return redirect()->route('usersview');
    
                }

                else {

                    return redirect()->route('usersview');
                }



        
    }

    
    // public function update(Request $reqeust, $_id){

    //     $data = User::findOrFail($_id);
    //     $data->name = $reqeust->name;
    //     $data->lastname = $reqeust->lastname;
    //     $data->role = $reqeust->role;
    //     $data->save();
        
    //     if($data){

    //         return redirect()->route('usersview');
    //     }
    //       else {
    //     return back();

    //       }
       
    //     }

            
    
}



