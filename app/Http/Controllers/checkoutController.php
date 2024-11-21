<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order;
use App\Models\address;
use App\Models\product;
use App\Models\orderitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class checkoutController extends Controller
{
    public function checkout(){

        $cart = cart::where('User_id',Auth::id())->get();
        $add = address::where('User_id',Auth::id())->get();
        return view('Customer.checkout',['carts'=>$cart,'address'=>$add]);
    }

    public function placeorder(Request $request){

        // dd($request);
        $cartitem = cart::where('User_id',Auth::id())->get();
        $address = address::where('User_id',Auth::id())->first();

        $total_price = 0;
        foreach($cartitem as $item){

            $total_price += ($item->qty*$item->product->price);
        }

        if($total_price == 0){

            Alert::warning('Order', 'Your Cart Is Emty');
            return redirect()->route('checkout');
        }
        $order = new order();

        $order->User_id = Auth::user()->id;
        $order->status = "pending";
        $order->Total_price = $total_price+250;
        $order->Tracking_id = 'vip'.rand(1111,9999);
        $order->Address_id = $address->id;
        // $order->date = useCurrent();

        $order->save();


        // return $cartitem;
        foreach($cartitem as $item){

            $product_order = new orderitem();

            $product_order->Order_id = $order->id;
            $product_order->Product_id = $item->Product_id;
            $product_order->qty = $item->qty;
            $product_order->price = $item->product->price;

            $product_order->save();

            $prod = product::where('id',$item->Product_id)->first();
            $prod->qty = $prod->qty - $item->qty;;
            $prod->update();
            
        }

        

            $orderItems = orderitem::all(); 
            $userId = Auth::user()->id;
            $cartItems = cart::where('User_id', $userId)->get(); 

            foreach ($orderItems as $item) {
                    $product_id = $item->Product_id;
    
    
                    $cartItem = $cartItems->firstWhere('Product_id', $product_id);
                    if($cartItem) {
                        $cartItem->delete();
                   }
            }
        
        Alert::success('Order', 'place successfully');
        return redirect()->route('viewOrder');
    }
}
