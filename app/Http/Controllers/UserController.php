<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\order;
use App\Models\address;
use Illuminate\Http\Request;
use App\Models\EmailVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;




class UserController extends Controller
{
    //

    public function store(Request $request){
        //return $request; 
        $request->validate([
         'name'=>'required',
         'email'=>'required|email|unique:users',
         'password'=>'required|min:6|confirmed'
         
        ]);
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();

        Alert::success('Registration','Registration successfully');
        // return redirect()->route('loginPage');
        return redirect("/verification/".$user->id);

     }

     public function authentication(Request $request){

        
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);

        $userCredential = $request->only('email','password');
        $userData = User::where('email',$request->email)->first();
// return $userData;
        if($userData->Type == 1){

            if(Auth::attempt($userCredential)){
                Alert::success('login',"Login Success");
                return redirect()->route('dashboard');
            }else{

                return back()->with('error','Username & Password is incorrect');

            }
        }

        $check = address::where('User_id',$userData->id)->exists();
        if($check == null){
                $add =  new address();        
                $add->User_id = $userData->id;
                $add->First_Name = 'Demo';
                $add->Last_Name ='Demo';
                $add->Delivery_address = 'Demo';
                $add->Address = 'Demo';
                $add->City = 'Demo';
                $add->State ='Demo';
                $add->Country ='Demo';
                $add->Zip_Code = 123456;
                $add->Phone_Number = 1234567890;
                $add->save();
        }
        if($userData && $userData->is_verified == 0){
            $this->sendOtp($userData);
            return redirect("/verification/".$userData->id);
        }
        else if(Auth::attempt($userCredential)){
            Alert::success('login',"Login Success");
            return redirect()->route('customer.index');
        }
        else{
            return back()->with('error','Username & Password is incorrect');
        }
    }

    public function sendOtp($user)
    {
        $otp = rand(100000,999999);
        $time = time();

        EmailVerification::updateOrCreate(
            ['email' => $user->email],
            [
            'email' => $user->email,
            'otp' => $otp,
            'created_at' => $time
            ]
        );

        $data['email'] = $user->email;
        $data['title'] = 'Mail Verification';

        $data['body'] = 'Your OTP is:- '.$otp;

        Mail::send('mailVerification',['data'=>$data],function($message) use ($data){
            $message->to($data['email'])->subject($data['title']);
        });
    }

    public function verification($id)
    {
        $user = User::where('id',$id)->first();
        if(!$user || $user->is_verified == 1){
            return redirect('/');
        }
        $email = $user->email;

        $this->sendOtp($user);//OTP SEND

        return view('verification',compact('email'));
    }

    public function verifiedOtp(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        $otpData = EmailVerification::where('otp',$request->otp)->first();
        if(!$otpData){
            return response()->json(['success' => false,'msg'=> 'You entered wrong OTP']);
        }
        else{

            $currentTime = time();
            $time = $otpData->created_at;

            if($currentTime >= $time && $time >= $currentTime - (90+5)){//90 seconds
                User::where('id',$user->id)->update([
                    'is_verified' => 1
                ]);
                Alert::success('Mail',"Mail has been verified");
                return response()->json(['success' => true,'msg'=> 'Mail has been verified']);
            }
            else{
                return response()->json(['success' => false,'msg'=> 'Your OTP has been Expired']);
            }

        }
    }

    public function resendOtp(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        $otpData = EmailVerification::where('email',$request->email)->first();

        $currentTime = time();
        $time = $otpData->created_at;

        if($currentTime >= $time && $time >= $currentTime - (90+5)){//90 seconds
            return response()->json(['success' => false,'msg'=> 'Please try after some time']);
        }
        else{

            $this->sendOtp($user);//OTP SEND
            return response()->json(['success' => true,'msg'=> 'OTP has been sent']);
        }

    }

    public function dashboard(){

        $order = order::all();
        $user = User::all();
        return view('dashboard',['order'=>$order,'user'=>$user]);
    }

    public function Cust_list(){

        $list = User::where('Type',0)->get();
        return view('/customerlist',['lists'=>$list]);
    }

    public function address(Request $request){

        // dd($request);
        $userid = Auth::user()->id;
        $add =  address::where('User_id',$userid)->first();

        $add->User_id = $userid;
        $add->First_Name = $request->Fisrt_name;
        $add->Last_Name = $request->Last_Name;
        $add->Delivery_address = $request->Delivery_Address;
        $add->Address = $request->Address;
        $add->City = $request->City;
        $add->State = $request->state;
        $add->Country = $request->Country;
        $add->Zip_Code = $request->Zip_Code;
        $add->Phone_Number = $request->Phone_Number;
        $add->update();
        Alert::success('Address','Update successfully');
        return redirect()->route('checkout');
    }

    public function addressview(){

        $address = address::where('User_id',Auth::id())->get();
        return view('Customer.address',['address'=>$address]);
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }

}
