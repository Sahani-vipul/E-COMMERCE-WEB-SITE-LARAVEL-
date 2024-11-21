<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\category;
use Shuchkin\SimpleXLSX;
// use App\Http\Controllers\SimpleXLSX;
// use Shuchkin\SimpleXLSX;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//  use SimpleXLSX;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
// use Symfony\Component\HttpFoundation\File\File;

class ProductController extends Controller
{
    //

    public function index(){

        
        $categories = product::where('isActive',1)->get();
        return view('product.index',['categories'=>$categories ]);
    }

    public function add(){

        $categories = category::where('isActive',1)->get();
        return view('product.add',['categories'=>$categories ]);
    
    }

    public function insert(Request $request){

        // dd($request);

        $request->validate([
            'name' => 'required|unique:product,name',
            'category'=>'required',
            'qty'=>'required',
            'price'=>'required',
            'gender'=>'required',
            'size'=>'required',
            'avatar'=>'required|mimes:jpg,jpeg,JPEG,png'
            
        ]);

        $imageName = str_replace(' ', '_', $request->name).''.time().'.'.$request->avatar->extension();
        $request->avatar->move(public_path('productImage'), $imageName);

        $product = new product();
        $product->name = $request->name;
        $product->cate_id = $request->category;
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->gender = $request->gender;
        $product->size = $request->size;
        $product->Description = $request->description;
        $product->imgPath=$imageName;

        $product->save();
        Alert::success('Added', 'Product added successfully');
        return redirect()->route('product.index');
    }

    public function delete(Request $req){
        
        $product = product::find($req->id);
        $product->isActive = 0;
        $product->save();
        Alert::success('Deleted', 'Product successfully deleted');
        return redirect()->back();

    }
    public function edit($id){
        $categories = category::where('isActive',1)->get();
        $product = product::find($id);
        return view('product.edit',['categories'=>$categories])->with('product',$product);
    }

    public function update(Request $request){
        $request->validate([
            'id'=>'required'            
        ]);


        $product = product::where('id',$request->id)->first();
        $product->name = $request->name;
        $product->cate_id = $request->category;
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->gender = $request->gender;
        $product->size = $request->size;
        $product->Description = $request->description;
        $product->update();
        Alert::success('Update', 'Product Updated successfully');
        return redirect()->route('product.index');
    }

    

    public function bulkupload(Request $request){

        $request->validate([
            'file'=>'required' 
         ]);
 
         $filename=time().'.'.$request->file->extension();
         $request->file->move(public_path('file'),$filename);
         $file_path=public_path('file')."/".$filename;
         if($xlsx=SimpleXLSX::parse($file_path))
         {
             foreach($xlsx->rows() as $row)
             {
                 $product = new product();
                 $product->cate_id=$row[0];
                 $product->name=$row[1];
                 $product->imgPath=$row[2];
                 $product->Description=$row[3];
                 $product->price = $row[4];
                 $product->qty = $row[5];
                 $product->gender = $row[6];
                 $product->size = $row[7];

                 $product->save();
             }
         }
         else{
                 return SimpleXLSX::parseError();
         }
 
         if(File::exists($file_path))
         {
             unlink($file_path);
         }
         Alert::success('Upload', 'Product Upload successfully');
         return redirect()->route('product.index');
    }

    public function productdetails($id){

        $product = product::where('id',$id)->get();
        return view('product.productdetails',['product'=>$product]);
    }
}
