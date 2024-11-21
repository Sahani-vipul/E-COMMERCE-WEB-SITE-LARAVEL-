@extends('layout.app')

@section('title')
 Category
@endsection

@section('MainTitle')
 {{-- Student Managment --}}
@endsection

@section('content')

    
        <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14"> 
            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                    <div class="w-full relative mb-4">  
                        <div class="flex-auto p-0 md:p-4">
                            <div class="mb-4 border-b border-gray-200 dark:border-slate-700" data-fc-type="tab">
                                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" aria-label="Tabs">
                                    {{-- <li class="me-2" role="presentation">
                                        <button class="inline-block p-4 rounded-t-lg border-b-2 active " id="all-tab" data-fc-target="#all" type="button" role="tab" aria-controls="all" aria-selected="false">All <span class="text-slate-400">(4251)</span></button>
                                    </li> --}}
                                    {{-- <li class="me-2" role="presentation">
                                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="published-tab" data-fc-target="#published" type="button" role="tab" aria-controls="published" aria-selected="false">Published <span class="text-slate-400">(3255)</span></button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="drafts-tab" data-fc-target="#drafts" type="button" role="tab" aria-controls="drafts" aria-selected="false">Drafts <span class="text-slate-400">(25)</span></button>
                                    </li>
                                    <li role="presentation">
                                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="discount-tab" data-fc-target="#discount" type="button" role="tab" aria-controls="discount" aria-selected="false">On Discount <span class="text-slate-400">(532)</span></button>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="flex flex-wrap gap-4 mb-3">
                                <div>
                                    <label class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
                                        Category
                                    </label>
                                </div>
                                
                                
                                {{-- <div class="mb-2 w-36">
                                    <select id="Vendor" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                        <option  class="dark:text-slate-700">Vendor</option>
                                        <option  class="dark:text-slate-700">Vendor-2</option>
                                        <option  class="dark:text-slate-700">Vendor-3</option>
                                    </select> 
                                </div> --}}
                                <div class="ms-auto">
                                    <form>
                                        <div class="relative">
                                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <i data-lucide="search" class="z-[1] w-5 h-5 stroke-slate-400"></i>
                                            </div>
                                            <input type="search" id="productSearch" class="form-input w-52 rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 pl-10 p-2.5" placeholder="search">
                                        </div>
                                    </form>
                                </div>
                                <div>
                                    <a href="{{ route('categories.add') }}" class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">  Add Category</a>
                                    {{-- <button href="{{ route('categories.add') }}" class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
                                        Add Category
                                    </button> --}}
                                </div>
                            </div>
                            
                            <table class="w-full">
                                <thead class="bg-primary-500 dark:bg-primary-500">
                                    <tr>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                            Sr.no
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                            Name
                                        </th>
                                        {{-- <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                            Email
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                            Phone No
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                            Status
                                        </th> --}}
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- 1 -->
                                 <?php $i=1; ?>
                                 @foreach ($categories as $category)
                                    <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                            
                                       <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{ $i++ }}
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            {{ $category->name }}
                                        </td>
                                        {{--  <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <span class="bg-indigo-600/5 text-indigo-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">New Lead</span>
                                        </td> --}}
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <a href="{{ route('categories.edit',[$category->id]) }}"><i class="icofont-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                            &nbsp; &nbsp; &nbsp;
                                            <a href="{{ route('categories.delete',[$category->id]) }}"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                        </td>
                                    </tr>
                                @endforeach  
                                </tbody>
                            </table>
                            

        </div><!--end container-->
    </div><!--end page-wrapper-->
</div><!--end /div-->

@endsection



{{-- 
<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
    <div class="w-full relative mb-4">  
        <div class="flex-auto p-0 md:p-4">                                   
            <div class="mb-2">
                <label for="title" class="font-medium text-sm text-slate-600 dark:text-slate-400">Title</label>
                <input type="title" id="title" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Title" required>
            </div>
            <div class="mb-2">
                <label for="category" class="font-medium text-sm text-slate-600 dark:text-slate-400">Category</label>
                <select id="category" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                    <option  class="dark:text-slate-700">All Category</option>
                    <option  class="dark:text-slate-700">Electronics</option>
                    <option  class="dark:text-slate-700">Furniture</option>
                    <option  class="dark:text-slate-700">Footwear</option>
                    <option  class="dark:text-slate-700">Clothes</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="description" class="font-medium text-sm text-slate-600 dark:text-slate-400">Description</label>
                <textarea id="description" rows="3" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Description ..."></textarea>
            </div>
            <div class="mb-2">
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
            </div>
            <div class="mb-2">
                <label for="gender" class="font-medium text-sm text-slate-600 dark:text-slate-400">For this product</label>
                <select id="gender" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                    <option  class="dark:text-slate-700">-- Gender --</option>
                    <option  class="dark:text-slate-700">Male</option>
                    <option  class="dark:text-slate-700">Female</option>
                    <option  class="dark:text-slate-700">Children</option>
                    <option  class="dark:text-slate-700">Other</option>
                </select>                                       
            </div>
            <div class="mb-2">
                <label for="sizing" class="font-medium text-sm text-slate-600 dark:text-slate-400">Size</label>
                <select id="sizing" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                    <option>Size</option>
                    <option>SM</option>
                    <option>MD</option>
                    <option>LG</option>
                    <option>XL</option>
                    <option>XXL</option>
                </select>
            </div>

            <div class="">
                <button class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">Add Product</button>
                <button class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Save Product</button>
            </div>
        </div><!--end card-body--> 
    </div><!--end card-->                                  
</div><!--end col-->   --}}

