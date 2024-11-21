<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\User;
use App\Models\product;
use App\Models\address;
use App\Models\order;
// use App\Models\cartitem;
use App\Models\orderitem;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;



class CartController extends Controller
{
    //

    public function add(Request $request){

        $userid = Auth::user()->id;

        $request->validate([

            'product_id'=>'required',
            'qty'=>'required'
        ]);

        if(cart::where('Product_id',$request->product_id)->where('User_id',$userid)->exists()){
        
            Alert::warning('Cart', 'Item is already in cart');
        }else{

            $cart = new cart();

            $cart->User_id = $userid;
            $cart->Product_id = $request->product_id;
            $cart->qty = $request->qty;
            $cart->save();

            Alert::success('Added', 'added successfully');
        }    
        return redirect()->route('customer.product');
    }

    public function view(){

        // $userid = Auth::id()->get();
        $cart = cart::where('User_id',Auth::id())->get();
        // $product = product::find($cart->Product_id);
        return view('Customer.cart',['carts'=>$cart,]);
    }

    public function delete($id){

        // return "hii";
        // dd($request);
        // $product_id = $request->Product_id;
        if(cart::where('Product_id',$id)->where('User_id',Auth::id())->exists()){

            $cartitem = cart::where('Product_id',$id)->where('User_id',Auth::id());
            $cartitem->delete();
            Alert::success('Delete', ' Cart Item Delete successfully');
            return redirect()->back();
        }

    }

}
