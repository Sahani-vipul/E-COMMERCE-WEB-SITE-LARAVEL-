@extends('layout.app')

@section('title')
Product
@endsection

@section('MainTitle')
 {{-- Student Managment --}}
@endsection

@section('content')

{{-- <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6"> --}}
    <div class="w-full relative mb-4">  
        <form action="{{ route('product.update') }}" method="post"> 
            @csrf  
        <div class="flex-auto p-0 md:p-4">                                   
            <div class="mb-2">
                <input type="hidden" name="id" value="{{ $product->id }}" />

                <label for="title" class="font-medium text-sm text-slate-600 dark:text-slate-400">Title</label>
                <input type="text" id="title" value="{{ $product->name }}" name="name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Title" required>
                @if ($errors->has('name'))
                <span style="color:red"> {{ $errors->first('name') }} </span>
                @endif
            </div>
            </div>
            <div class="mb-2">
                <label for="category" class="font-medium text-sm text-slate-600 dark:text-slate-400">Category</label>
                <select id="category" name='category'  class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                    @if ($errors->has('category'))
                <span style="color:red"> {{ $errors->first('category') }} </span>
                @endif
                    <option  class="dark:text-slate-700">All Category</option>
                    @foreach ($categories as $category)
                        @if($category->id == $product->cate_id)
                        <option value="{{ $category->id }}"  name='category' class="dark:text-slate-700" selected   >{{ $category->name }}</option>
                    
                        @else
                        <option value="{{ $category->id }}"  name='category' class="dark:text-slate-700">{{ $category->name }}</option>
                    
                        @endif
                    @endforeach  
                </select>
            </div>
            <div class="mb-2">
                <label for="description" class="font-medium text-sm text-slate-600 dark:text-slate-400">Description</label>
                <textarea id="description"  name="description" rows="3" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Description ...">{{ $product->Description}}</textarea>
            </div>
            <div class="mb-2">
                <div class="grid grid-cols-2 gap-3">
                    <div class="col-span-1">
                        <label for="Product-qty" class="font-medium text-sm text-slate-600 dark:text-slate-400">Product Quntity</label>
                        <input type="text" id="Product-qty" value="{{ $product->qty }}" name="qty" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Enter Quntity">
                        @if ($errors->has('qty'))
                        <span style="color:red"> {{ $errors->first('qty') }} </span>
                        @endif
                    </div>
                    <div class="col-span-1">
                        <label for="price" class="font-medium text-sm text-slate-600 dark:text-slate-400">Price</label>
                        <input type="title" name="price" id="price" value="{{ $product->price}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Price" required>
                        @if ($errors->has('price'))
                        <span style="color:red"> {{ $errors->first('price') }} </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <label for="gender" class="font-medium text-sm text-slate-600 dark:text-slate-400">For this product</label>
                <select id="gender" name='gender' class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                    @if ($errors->has('gender'))
                        <span style="color:red"> {{ $errors->first('gender') }} </span>
                        @endif
                    <option  class="dark:text-slate-700">-- Gender --</option>
                    <option value="male" name='gender' class="dark:text-slate-700">M</option>
                    <option value="female" name='gender' class="dark:text-slate-700">F</option>
                    {{-- <option value="children" name='gender' class="dark:text-slate-700">Children</option>
                    <option value="other" name='gender' class="dark:text-slate-700">Other</option> --}}
                </select>                                       
            </div>
            <div class="mb-2">
                <label for="sizing" class="font-medium text-sm text-slate-600 dark:text-slate-400">Size</label>
                <select id="sizing" name='size' class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                    @if ($errors->has('size'))
                        <span style="color:red"> {{ $errors->first('size') }} </span>
                        @endif
                    <option>Size</option>
                    <option value="s" name='size' >SM</option>
                    <option value="m" name='size'>MD</option>
                    <option value="l" name='size'>LG</option>
                    <option value="xl" name='size'>XL</option>
                    <option value="xxl" name='size'>XXL</option>
                </select>
            </div>

            <div class="">
                <button type="submit" class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">Update Product</button>
                {{-- <button class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Save Product</button> --}}
            </div>
        </div><!--end card-body--> 
    </div><!--end card--> 
</form>
                                 
</div><!--end col--> 


@endsection