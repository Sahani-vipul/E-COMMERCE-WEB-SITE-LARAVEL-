@extends('layout.app')

@section('title')
 Product
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
                                        Product
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
                                <div align="right">
                                    <a href="{{ route('bulkuplaod')}}" class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded"> Bulk Upload</a>
                                    {{-- <button href="{{ route('categories.add') }}" class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
                                        Add Category
                                    </button> --}}
                                </div>
                                <div align="right">
                                    <a href="{{ route('product.add') }}" class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded" >  Add product</a>
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
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                            Image
                                        </th>
                                        {{-- <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                            Price
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                            Quntity
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                            Gender
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                            Size
                                        </th> --}}
                                        {{-- <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                            Description
                                        </th> --}}
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                            Details
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-slate-100 uppercase">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- 1 -->
                                 <?php $i=1; ?>
                                 @foreach ($categories as $product)
                                    <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-500/40">
                            
                                       <td class="p-2 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{ $i++ }}
                                        </td>
                                        <td class="p-2 text-sm text-left text-gray-500 whitespace-nowrap dark:text-gray-40">
                                            {{ $product->name }}
                                        </td>
                                        <td class="p-2 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <img src="{{asset('productImage/'.$product->imgPath)}}" width="50px" height="=150px"/>
                                        </td>
                                        {{-- <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            {{ $product->price }}
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            {{ $product->qty }}
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            {{ $product->gender }}
                                        </td> --}}
                                        {{-- <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            {{ $product->size }}
                                        </td>
         --}}
                                        {{-- <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            {{ $product->Description }}
                                        </td> --}}
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <a href="{{route('prodcutdetails',[$product->id] )}}" class="inline-block focus:outline-none text-white hover:bg-brand-500 hover:text-white bg-brand-500 border border-gray-200 text-sm font-medium py-1 px-3 rounded">View</a>
                                        </td>
                                        
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <a href="{{ route('product.edit',[$product->id]) }}"><i class="icofont-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                            &nbsp; &nbsp; &nbsp;
                                            <a href="{{ route('product.delete',[$product->id]) }}"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                        </td>
                                    </tr>
                                @endforeach  
                                
                                </tbody>
                            </table>
                            {{-- <div class="flex justify-between mt-4">
                                <div class="self-center">
                                    <p class="dark:text-slate-400">Showing 1 - 20 of 1,524</p>
                                </div>
                                <div class="self-center">
                                    <ul class="inline-flex items-center -space-x-px">
                                        <li>
                                            <a href="#" class=" py-2 px-3 ms-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                <i class="icofont-simple-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                        </li>
                                        <li>
                                        <a href="#" aria-current="page" class="z-10 py-2 px-3 leading-tight text-brand-600 bg-brand-50 border border-brand-300 hover:bg-brand-100 hover:text-brand-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                                        </li>
                                        <li>
                                        <a href="#" class=" py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <i class="icofont-simple-right"></i>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>  --}}

        </div><!--end container-->
    </div><!--end page-wrapper-->
</div><!--end /div-->


@endsection



