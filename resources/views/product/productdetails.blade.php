@extends('layout.app')

@section('title')
Product
@endsection

@section('MainTitle')
 {{-- Student Managment --}}
@endsection

@section('content')
<div class="sm:col-span-12   gap-4 md:col-span-12 lg:col-span-8 xl:col-span-8 ">
    <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative mb-4">
        {{-- <form action="{{ url('addressupload')}}" method="POST" id="addpost"> --}}
            <span id="message"></span>
        <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
            <h4 class="font-medium">Product Details</h4>
            <div align="right">
                <a href="{{ route('product.index') }}" class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded" >Back</a>
                {{-- <button href="{{ route('categories.add') }}" class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
                    Add Category
                </button> --}}
            </div>
        </div><!--end header-title-->
        
        @foreach ($product as $prod )
            
        
<div class="flex-auto p-4">
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
            <div class="mb-2">
                <label for="First_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Product Name</label>
                <input readonly value="{{$prod->name}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"  type="text">
            </div>
        </div>
        <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
            <div class="mb-2">
                <label for="Last_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Category Name</label>
                <input readonly value="{{$prod->cate->name}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"  type="text">
            </div>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
            <div class="mb-2">
                <label for="Delivery_Address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Description</label>
                <textarea readonly value="" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"  type="text">{{$prod->Description}}
                </textarea>
            </div>
        </div>
        <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
            <div class="mb-2">
                <label for="Address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Price</label>
                <input readonly value="{{$prod->price}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"  type="text">
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
            <div class="mb-2">
                <label for="Address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Quntity</label>
                <input readonly value="{{$prod->qty}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"  type="text">
            </div>
        </div>
        <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
            <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                <div class="mb-2">
                    <label for="Address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Gender</label>
                    <input readonly value="{{$prod->gender}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"  type="text">
                </div>
            </div>
        </div>
        {{-- <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
            <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                <div class="mb-2">
                    <label for="Address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Size</label>
                    <input readonly value="" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"  type="text">
                </div>
            </div>
        </div> --}}
    </div>
    <div class="grid grid-cols-4 gap-4">
       
        <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
            <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                <div class="mb-2">
                    <label for="Address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Size</label>
                    <input readonly value="{{$prod->size}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"  type="text">
                </div>
            </div>
        </div>
        <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
            <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                <div class="mb-2">
                    {{-- <label for="Address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Size</label> --}}
                    {{-- <input readonly value="{{$prod->size}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"  type="text"> --}}
                    <img src="{{asset('productImage/'.$prod->imgPath)}}" alt="..." class="img-thumbnail">
                </div>
            </div>
        </div>
    </div>
    @endforeach
{{-- </div><!--end card-body--> --}}

@endsection