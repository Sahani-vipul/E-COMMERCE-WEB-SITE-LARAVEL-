@extends('Customer.layout.app')

@section('title')
Order
@endsection

@section('contant')

<div id="myTabContent">
    <div class="active  p-4 bg-gray-50 rounded-lg dark:bg-gray-700/20" id="all" role="tabpanel" aria-labelledby="all-tab">
        <div class="grid grid-cols-1 p-0 md:p-4">
        @if ($orders->count() > 0)
            
            <div class="sm:-mx-6 lg:-mx-8">
                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                    <table class="w-full">
                        <thead class="bg-gray-50 dark:bg-gray-600/20">
                            <tr>
                                {{-- <th scope="col" class="p-3">
                                    <label class="custom-label">
                                        <div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                        <input type="checkbox" class="hidden" >
                                        <i class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                        </div>
                                    </label>
                                </th> --}}
                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                    Order Date
                                </th>                              
                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                    Tracking Number
                                </th>                              
                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                    Total Price
                                </th>
                                {{-- <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                    Status
                                </th> --}}
                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- 1 -->
                            @foreach ($orders as $item)
                            <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                {{-- <td class="w-4 p-4">
                                    <label class="custom-label">
                                        <div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block leading-5 text-center -mb-[6px]">
                                        <input type="checkbox" class="hidden" >
                                        <i class="icofont-verification-check hidden text-xs text-brand-500 dark:text-slate-200"></i>
                                        </div>
                                    </label>
                                </td> --}}
                                <td class="p-5 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    {{ date('d-m-y',strtotime($item->created_at))}}
                                </td>
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    {{$item->Tracking_id}}
                                </td>
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    {{$item->Total_price}}
                                </td>
                                {{-- <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    {{$item->status}}
                                </td> --}}
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    <a href="{{route('invoice',[$item->id] )}}" class="inline-block focus:outline-none text-white hover:bg-brand-500 hover:text-white bg-brand-500 border border-gray-200 text-sm font-medium py-1 px-3 rounded">Invoice</a>
                                </td>
                               
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div><!--end div-->
                @else
                <div class="card-body text-center">
                    <h2>Your Have No Order</h2>
                    <a href="{{route('customer.product')}}" class="btn btn-outline-primary float-end">Continue Shopping</a>
                </div>
                @endif

            </div><!--end div-->
        </div><!--end grid-->

@endsection

{{-- 
    
    <form >  

    <div class="sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4 ">
        <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
            <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                <div class="flex-none md:flex">
                    <h4 class="font-medium flex-1 self-center mb-2 md:mb-0">Order Details</h4>                                        
                </div>                                    
            </div><!--end header-title-->
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
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

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Product 1 -->
                                   @php
                                       $total = 0;
                                       $item = 0;
                                   @endphp
                                   @foreach ($items as $order)
                                       
                                    <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                        <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-slate-300">
                                            <img src="assets/images/products/01.png" alt="" class="mr-2 h-8 inline-block">
                                            ////<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400 inline-block">{{ $order->id->get() }}</h5>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            {{$cart->qty}}
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            //&#8377 {{ $cart->product->price }}
                                        </td>
                                    </tr>

                                    @php
                                        // $total +=  $cart->product->price*$cart->qty;
                                        // $item += $cart->qty;
                                    @endphp
                                    @endforeach  
                                    <!-- Product 2 -->
                                    
                                    <!-- Product 3 -->

                                    <tr class="bg-white dark:bg-gray-900">
                                        <td class="p-3 text-base font-semibold text-gray-900 whitespace-nowrap dark:text-slate-300">                                                                
                                            Total
                                        </td>
                                        <td class="p-3 text-base font-semibold text-gray-900 whitespace-nowrap dark:text-slate-300">
                                            {{$item}}
                                        </td>
                                        <td class="p-3 text-base font-semibold text-gray-900 whitespace-nowrap dark:text-slate-300">
                                            &#8377 {{$total}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>                                    
            </div>
        </div> <!--end card-->
        
    </div><!--end col-->
</form>   
    --}}
