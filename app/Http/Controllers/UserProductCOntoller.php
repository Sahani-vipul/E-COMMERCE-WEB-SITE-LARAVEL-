<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProductCOntoller extends Controller
{
    //

    public function index(){

    
        $product = product::where('isActive',1)->get();;

        return view('Customer.index',['products'=>$product]);
    }
    public function product(){

  
            $product = product::where('isActive',1)->get();;
            return view('customer.product',['products'=>$product]);
    }

    public function productdetails($id){

        $product = product::find($id);
        return view('Customer.productDetails',['product'=>$product]);
    }
}
