<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //

    public function index(){

        return view('registration');
    }

    public function login(){

        return view('login');
    }

    public function getLogin(Request $request){

        // dd($request);

        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);

        $userCredential = $request->only('email','password');
        $userData = User::where('email',$request->email)->first();
        if($userData && $userData->is_verified == 0){
            $this->sendOtp($userData);
            return redirect("/verification/".$userData->id);
        }
        else if(Auth::attempt($userCredential)){
            return redirect('/dashboard');
        }
        else{
            return back()->with('error','Username & Password is incorrect');
        }
    }

    public function dashboard($name){

        return view('dashboard',['name'=>$name]);
    }
    public function store(Request $request){

        

        $request->validate([

            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $User = new User();
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = $request->password;

        $User->save();

        return view('dashboard',['name'=> $request->name]);
    }
}
