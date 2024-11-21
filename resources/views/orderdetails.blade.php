@extends('layout.app')

@section('title')
 Order Details
@endsection


@section('content')


<div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div class="page-wrapper relative  duration-300 pt-0 w-full">
        <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0"> 
            <div class="container my-6">
                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4 ">
                        <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                            <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                                <div class="flex-none md:flex">
                                    <h4 class="font-medium flex-1 self-center mb-2 md:mb-0">Order Details</h4>                                        
                                </div>                                    
                            </div><!--end header-title-->
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-3 lg:-mx-4">
                                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full">
                                                <thead class="bg-slate-100 dark:bg-slate-700/20">
                                                    <tr>
                                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                            Products
                                                        </th>
                                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                            Quantity
                                                        </th>
                                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                            Price
                                                        </th>
                                                        {{-- <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                            Image
                                                        </th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Product 1 -->

                                                @foreach ($order->orderitem  as $item)
                                                @php
                                                    $totalprice = 0;
                                                    $totalprice = ($item->qty*$item->price);
                        
                                                    
                                                @endphp
                                                   <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                    <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-slate-300">
                                                        <img src="{{asset  ('productImage/'.$item->product->imgPath)}}" alt="" class="mr-2 h-8 inline-block">
                                                        <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400 inline-block" style="white-space: break-spaces">{{ $item->product->name }}</h5>
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{$item->qty}}
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        &#8377 {{ $totalprice }}
                                                    </td>
                                                </tr>
                                               
                                                @endforeach  
                                                   
                                                    {{-- <tr class="bg-white dark:bg-gray-900">
                                                        <td class="p-3 text-base font-semibold text-gray-900 whitespace-nowrap dark:text-slate-300">                                                                
                                                            Total
                                                        </td>
                                                        <td class="p-3 text-base font-semibold text-gray-900 whitespace-nowrap dark:text-slate-300">
                                                            
                                                        </td>
                                                        <td class="p-3 text-base font-semibold text-gray-900 whitespace-nowrap dark:text-slate-300">
                                                            {{$grandTotal}}
                                                        </td>
                                                    </tr> --}}
                                                </tbody>
                                            </table>
                                            <div class="bg-black dark:bg-slate-800/30 shadow  rounded-md relative w-full mt-4">
                                                <div class="flex-auto p-4">                                        
                                                    <div class="grid grid-cols-1  rounded-md">
                                                        <div class="sm:-mx-6 lg:-mx-8">
                                                            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                                                
                                            <table class="min-w-full">                                                    
                                                <tbody>
                                                    <!-- 1 -->
                                                    <tr class="border-b border-dashed border-slate-500/60 dark:border-slate-700/40">
                                                        <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                            Grand Total
                                                        </td>
                                                        <td class="p-3 text-sm font-medium text-gray-400 ">
                                                            &#8377 {{$order->Total_price}}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>                                    
                            </div>
                        </div> <!--end card-->
                        <form action="{{route('updatestatus')}}" method="post">
                            @csrf
                        <div class="mb-2 w-44">   
                            <input type="hidden" name="product_id" value="{{$order->id}}">                                        
                            <select id="" name="status" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                {{-- <option name="status" class="dark:text-slate-700"><a href="#" @selected(true)>{{$order->status}}</a></option> --}}
                                <option name="status" class="dark:text-slate-700">Confirmed</option>
                                <option name="status" class="dark:text-slate-700">Shipping</option>
                                <option name="status" class="dark:text-slate-700">Complited</option>
                            </select> 
                            
                        </div>
                        <div class="mb-4 w-50">                                           
                            <button type="submit" class="inline-block focus:outline-none text-white hover:bg-brand-500 hover:text-white bg-brand-500 border border-gray-200 text-lm font-medium py-2 px-6 rounded" >Update</button>
                        </div>
                    </form>

                    </div><!--end col-->
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8 ">
                        <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative mb-4">
                            <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                                <h4 class="font-medium">Delivery Address</h4>
                            </div><!--end header-title-->
                            
                            @foreach ($address as $add)
                            <div class="flex-auto p-2">
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="col-span-4 md:col-span-1 lg:col-span-1 xl:col-span-1">
                                        <div class="mb-2">
                                            <label for="First_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">First Name<small class="text-red-600 text-sm">*</small></label>
                                            <input readonly value="{{$add->First_Name}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="First name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                        <div class="mb-2">
                                            <label for="Last_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Last Name<small class="text-red-600 text-sm">*</small></label>
                                            <input readonly value="{{$add->Last_Name}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Last name" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                        <div class="mb-2">
                                            <label for="Delivery_Address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Delivery Address<small class="text-red-600 text-sm">*</small></label>
                                            <input readonly value="{{$add->Delivery_address}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Address" type="text">
                                        </div>
                                    </div>
                                    <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                        <div class="mb-2">
                                            <label for="Address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Address</label>
                                            <input readonly value="{{$add->Address}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Address" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                        <div class="mb-2">
                                            <label for="City" class="font-medium text-sm text-slate-600 dark:text-slate-400">City<small class="text-red-600 text-sm">*</small></label>
                                            <select id="City" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                                                <option name="City" class="dark:text-slate-700" selected>{{$add->City}}</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                        <div class="mb-2">
                                            <label for="State" class="font-medium text-sm text-slate-600 dark:text-slate-400">State<small class="text-red-600 text-sm">*</small></label>
                                            <select id="State" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                                                <option name="state" class="dark:text-slate-700" selected>{{$add->State}}</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                        <div class="mb-2">
                                            <label for="Country" class="font-medium text-sm text-slate-600 dark:text-slate-400">Country<small class="text-red-600 text-sm">*</small></label>
                                            <select id="Country" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                                                <option name="Country" class="dark:text-slate-700" selected>{{$add->Country}}</option>
                                            </select>                                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                        <div class="mb-2">
                                            <label for="Zip_code" class="font-medium text-sm text-slate-600 dark:text-slate-400">Zip code<small class="text-red-600 text-sm">*</small></label>
                                            <input readonly value="{{$add->Zip_Code}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="------" type="text">
                                        </div>
                                    </div>

                                    <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                        <div class="mb-2">
                                            <label for="Mobile_No" class="font-medium text-sm text-slate-600 dark:text-slate-400">Mobile No<small class="text-red-600 text-sm">*</small></label>
                                            <input readonly value="{{$add->Phone_Number}}" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Mobile no" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                            @endforeach
                        </div> <!--end card-->

                    </div>
                </div>
            </div>
        </div>

@endsection
