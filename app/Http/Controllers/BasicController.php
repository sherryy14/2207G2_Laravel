<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class BasicController extends Controller
{
    public function index(){
        return view('index');
    }
    public function product(){
        return view('product');
    }
    public function contact(){
        return view('contact');
    }
    // registration form 

// vendor\laravel\framework\src\Illuminate\Tranlation\lang\validation file location in laravel 10
    public function register(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'city' => 'required',
        ]);

        $user = new Register();

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->username = $request['username'];
        $user->password = $request['password'];
        $user->city = $request['city'];

        $user->save();

        // return view('/register');
        


        // echo "<pre>";
        // print_r($request->toArray());
        // echo "</pre>";

    }
}
