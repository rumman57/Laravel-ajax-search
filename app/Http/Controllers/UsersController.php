<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    
    public function getIndex(){
       
       $users = User::orderBy('name','asc')->get();
       return view('users.index')->withUsers($users);
    }

    public function postSearch(Request $request){
        
        $name = $request->get('name');
        $users = User::where('name','LIKE',$name.'%')->get();
        
        if(request()->ajax()){
            sleep(1);
            return view('users.users')->withUsers($users);
        } 
    	return view('users.index')->withUsers($users);
    }
}
