@extends('layout.app')

@section('title')
 Category Add
@endsection

{{-- @section('MainTitle')
 Student Managment
@endsection --}}

@section('content')


{{-- <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6"> --}}
    <div class="w-full relative mb-4">  
        <form action="{{ route('categories.update') }}" method="post"> 
            @csrf                                
        <div class="flex-auto p-0 md:p-4">  
            <div class="mb-2">
                <input type="hidden" name="id" value="{{ $category->id }}" />

                <label for="title" class="font-medium text-sm text-slate-600 dark:text-slate-400">Category</label>
                <input type="title" value="{{ $category->name }}" id="title" name="name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Enter Category Name" required>
            </div>
            {{-- <div class="mb-2">
                <label for="category" class="font-medium text-sm text-slate-600 dark:text-slate-400">Category</label>
                <select id="category" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                    <option  class="dark:text-slate-700">All Category</option>
                    <option  class="dark:text-slate-700">Electronics</option>
                    <option  class="dark:text-slate-700">Furniture</option>
                    <option  class="dark:text-slate-700">Footwear</option>
                    <option  class="dark:text-slate-700">Clothes</option>
                </select>
            </div> --}}
            {{-- <div class="mb-2">
                <label for="description" class="font-medium text-sm text-slate-600 dark:text-slate-400">Description</label>
                <textarea id="description" rows="3" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Description ..."></textarea>
            </div> --}}
            {{-- <div class="mb-2">
                <div class="grid grid-cols-2 gap-3">
                    <div class="col-span-1">
                        <label for="Product-date" class="font-medium text-sm text-slate-600 dark:text-slate-400">Product Date</label>
                        <input type="text" id="Product-date" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" name="foo">
                    </div>
                    <div class="col-span-1">
                        <label for="price" class="font-medium text-sm text-slate-600 dark:text-slate-400">Price</label>
                        <input type="title" id="price" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Price" required>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="mb-2">
                <label for="gender" class="font-medium text-sm text-slate-600 dark:text-slate-400">For this product</label>
                <select id="gender" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                    <option  class="dark:text-slate-700">-- Gender --</option>
                    <option  class="dark:text-slate-700">Male</option>
                    <option  class="dark:text-slate-700">Female</option>
                    <option  class="dark:text-slate-700">Children</option>
                    <option  class="dark:text-slate-700">Other</option>
                </select>                                       
            </div> --}}
            {{-- <div class="mb-2">
                <label for="sizing" class="font-medium text-sm text-slate-600 dark:text-slate-400">Size</label>
                <select id="sizing" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                    <option>Size</option>
                    <option>SM</option>
                    <option>MD</option>
                    <option>LG</option>
                    <option>XL</option>
                    <option>XXL</option>
                </select>
            </div> --}}

            <div class="">
                
                <button type="submit" class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">Update</button>
                {{-- <button class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Save Product</button> --}}
            </div>
        </div><!--end card-body--> 
    </div><!--end card-->                                  
</form>
</div><!--end col-->  


@endsection

