<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\User;
use App\Models\address;
use App\Models\orderitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class OrderController extends Controller
{
    //

    public function index(){

        $orders = order::where('User_id',Auth::id())->get(); 
        // return $orders;
        return view('Customer.order',['orders'=>$orders]);
    }
    public function view($id){

        $address = address::where('User_id',Auth::id())->get();
        // return $address;
        $order = order::where('id',$id)->where('User_id',Auth::id())->first();
        // return $order;
        return view('Customer.OrderView',['address'=>$address,'order'=>$order]);
    }

    public function adminOrderList(){

        // $orders = order::where('status','pending')->get(); 
        $orders = order::where('status','pending')->orWhere('status','Confirmed')->orWhere('status','Shipping')->get(); 
        
        return view('order',['orders'=>$orders]);
    }

    public function adminOrderHistory(){

        $orders = order::where('status','Complited')->get(); 

        return view('orderHistory',['orders'=>$orders]);
    }

    public function adminOrderDetail($id){

        $order = order::where('id',$id)->first();
        $address = address::where('id',$order->Address_id)->get();

        return view('orderdetails',['order'=>$order,'address'=>$address]);
    }
      
    public function updatestatus(Request $request){
        // dd($request);

        $order = order::where('id',$request->product_id)->first();
        $order->status = $request->status;
        $order->update();
        Alert::success('Status', 'Status Updated');

        return redirect()->route('orderlist');
    }

    public function viewBill(){

        $orders = order::where('User_id',Auth::id())->get(); 
        // return $orders;
        return view('Customer.bills',['orders'=>$orders]);
    }

    public function invoice($id){

        $order = order::where('id',$id)->first();
        $address = address::where('id',$order->Address_id)->get();

        return view('Customer.invoice',['order'=>$order,'address'=>$address]);
    }
}
