<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class EditUserController extends Controller
{
    public function form($_id = true){
        
        if($_id){
            
        $data = User::findOrFail($_id);
        return view('edituser.edit', compact('data'));
            
                }
                return view('edituser.edit');
    }

  

    public function update(Request $reqeust, $_id){

        $data = User::findOrFail($_id);
        $data->name = $reqeust->name;
        $data->lastname = $reqeust->lastname;
        $data->role = $reqeust->role;
        $data->save();
        
        if($data){

                    return redirect()->route('usersview');
                }
                  else {
                return back();
        
                  }
        }
}
