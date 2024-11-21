<?php

namespace App\Http\Controllers;
use App\Models\category;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    //
    public function index(){
        
        $categories = category::where('isActive',1)->get();
        return view('category.index', ['categories'=>$categories ]);
        //return view('category.index')->with('categories',$categories);
        // return view('category.index',compact('categories'));
    }

    public function index_deleted(){
        $categories = category::where('isActive',0)->get();
        return view('category.index', ['categories'=>$categories ]);
        //return view('category.index')->with('categories',$categories);
        // return view('category.index',compact('categories'));
    }

    public function add(){
        return view('category.add');
    }

    public function insert(Request $req ){
        // dd($req);
        $req->validate([
            'name' => 'required|',
        ]);

        $cat = category::where('name',$req->name)->first();

        if($cat){
            if($cat->isActive == 1){

                $req->validate([
                    'name' => 'required|unique:categories',
                ]);            
            }

            $cat->isActive = 1;
            $cat->save();
            Alert::success('Added', 'Category added successfully');
            return redirect()->route('categories.index');
        }else{


            $category   = new category();
            $category->name = $req->name;
            $category->save();
            Alert::success('Added', 'Category added successfully');
            return redirect()->route('categories.index');
        }    
    }

    public function update(Request $req){

        // dd($req);
        $req->validate([
            'id'=>'required',
            'name'=>'required',
        ]);
        $category = category::find($req->id);
        $category->name = $req->name;
        $category->save();
        Alert::success('Updated', 'Category successfully Updated');
        return redirect()->route('categories.index');
    }

    public function edit($id){
        $category = category::find($id);
        return view('category.edit')->with('category',$category);
    }

    public function delete(Request $req){
        
        $category = category::find($req->id);
        $category->isActive = 0;
        $category->save();
        Alert::success('Deleted', 'Category successfully deleted');
        return redirect()->back();

    }
}
