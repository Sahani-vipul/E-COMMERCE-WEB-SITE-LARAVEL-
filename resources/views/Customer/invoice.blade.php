@extends('Customer.layout.app')

@section('title')
Invoice
@endsection

@section('contant')
<div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
    <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
        <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">                                
            <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 mb-4 md:mb-0 print:w-1/2">
                        <div class="flex items-center">
                            <div class="rounded">
                                <img class="w-9 h-9 overflow-hidden object-cover rounded object-center" src="{{ asset('/images/logo-sm.png') }}" alt="logo" />
                            </div>
                            <div class="ms-3">
                                <div class="cursor-pointer hover:text-gray-900 focus:text-gray-500 text-gray-800 dark:text-gray-100 focus:outline-none">
                                    <h5 class=" font-bold text-[18px] dark:text-slate-300">Invoice</h5>
                                </div>
                                {{-- <p class="focus:outline-none text-gray-500 dark:text-gray-400 text-sm font-medium">Invoice</p> --}}
                            </div>
                        </div>   
                    </div><!--end col--> 
                    {{-- <div class="w-full md:w-1/2 print:w-1/2">
                        <div class="text-left md:text-right print:text-right">
                            <p class="text-gray-500 text-sm font-medium mb-0">2821 Kensington Road,</p>
                            <p class="text-gray-500 text-sm font-medium mb-0">Avondale Estates, GA 30002 USA.</p>
                        </div>
                    </div><!--end col-->    --}}
                </div><!--end grid-->
            </div><!--end card-body-->
            <div class="flex-auto p-4">
                <div class="flex flex-wrap mb-4">
                    <div class="w-full md:w-1/3 self-center mb-4 md:mb-0 print:w-1/3">
                        <h6 class="font-medium dark:text-slate-400 text-sm mb-1"><span class="font-normal">Order Date :</span> {{date('d-m-y',strtotime($order->created_at))}}</h6>
                        <h6 class="font-medium dark:text-slate-400 text-sm"><span class="font-normal">Order ID :</span> # {{$order->Tracking_id}}</h6>
                    </div><!--end col--> 
                    <div class="w-full md:w-1/3 mb-4 md:mb-0 print:w-1/3">
                        <div class="dark:text-slate-400">
                            @foreach ($address  as $add)
                                          
                            <address class="text-sm">
                                <strong>Billed To:</strong><br>
                                {{$add->First_Name}} {{$add->Last_Name}} <br>
                                {{$add->Delivery_address}}<br>
                                {{$add->City}}, {{$add->State}}<br>
                                {{$add->Country}}, {{$add->Zip_Code}}<br>
                                <abbr title="Phone">P:</abbr> (+91) {{$add->Phone_Number}}
                            </address>
                            @endforeach
                        </div>
                    </div><!--end col--> 
                    <div class="w-full md:w-1/3 print:w-1/3">
                        <div class="dark:text-slate-400">
                            @foreach ($address  as $add)
                                          
                            <address class="text-sm">
                                <strong>Shipped To:</strong><br>
                                {{$add->First_Name}} {{$add->Last_Name}} <br>
                                {{$add->Delivery_address}}<br>
                                {{$add->City}}, {{$add->State}}<br>
                                {{$add->Country}}, {{$add->Zip_Code}}<br>
                                <abbr title="Phone">P:</abbr> (+91) {{$add->Phone_Number}}
                            </address>
                            @endforeach
                        </div>
                    </div><!--end col-->    
                </div><!--end grid-->
                <div class="border-b border-dashed border-slate-200 my-5 dark:border-slate-700"></div> 
                <div class="relative overflow-x-auto  flex flex-wrap sm:rounded-lg">
                    <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-700 dark:text-gray-400 ">
                            <tr>
                                <th scope="col" class="px-6 py-3 flex-1">
                                   Item
                                </th>
                                <th scope="col" class="px-6 py-3 text-right w-auto md:w-[10%]">
                                    Quantity
                                </th>
                                <th scope="col" class="px-6 py-3 text-right w-auto md:w-[18%]">
                                    Rate
                                </th>
                                {{-- <th scope="col" class="px-6 py-3 text-right w-auto md:w-[10%]">
                                    Text
                                </th> --}}
                                <th scope="col" class="px-6 py-3 text-right w-auto md:w-[10%]">
                                    Amount
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($order->orderitem  as $item)
                            <tr class="border-b dark:bg-gray-800 dark:border-slate-700 odd:bg-white even:bg-gray-50 odd:dark:bg-slate-800 even:dark:bg-slate-700">
                                <th scope="row" class="px-4 py-2 text-gray-900 dark:text-white whitespace-nowrap">
                                    <h5 class=" text-sm font-medium">{{$item->product->name}}</h5>
                                    {{-- <p class="mb-0 text-slate-400 font-normal">Size-04-15 (Model 2023)</p> --}}
                                </th>
                                <td class="px-4 py-2 text-right">
                                    {{$item->qty}}
                                </td>
                                <td class="px-4 py-2 text-right">
                                    {{$item->price}}
                                </td>

                                <td class="px-4 py-2 text-right">
                                    {{$item->qty*$item->price}}
                                </td>
                                @php
                                    $total += $item->qty*$item->price;
                                @endphp
                        @endforeach
                            <tr class="border-b dark:border-gray-700 ">
                                <th scope="row" class="px-4 py-2 text-gray-900 dark:text-white whitespace-nowrap">
                                   
                                </th>
                                {{-- <td class="px-4 py-2 text-right">
                                    
                                </td> --}}
                                <td class="px-4 py-2 text-right print:hidden">
                                    
                                </td>
                                <td class="px-4 py-2 text-right">
                                    <span class="font-bold text-slate-600 dark:text-slate-400">Sub Total</span>
                                </td>
                                <td class="px-4 py-2 text-right">
                                    <span class="font-bold text-slate-600 dark:text-slate-300"> &#8377 {{$total}}</span>
                                </td>
                                
                            </tr>
                            <tr class="border-b dark:border-gray-700 ">
                                <th scope="row" class="px-4 py-2 text-gray-900 dark:text-white whitespace-nowrap">
                                   
                                </th>
                                {{-- <td class="px-4 py-2 text-right">
                                    
                                </td> --}}
                                <td class="px-4 py-2 text-right print:hidden">
                                    
                                </td>
                                <td class="px-4 py-2 text-right">
                                    <span class="font-bold text-slate-600 dark:text-slate-400">Shipp Charge</span>
                                </td>
                                <td class="px-4 py-2 text-right">
                                    {{-- <span class="font-semibold text-slate-600 dark:text-slate-300 me-1">&#8377 250</span> --}}
                                    <span class="font-bold text-slate-600 dark:text-slate-300">&#8377 250</span>
                                </td>
                                
                            </tr>
                            <tr class="">
                                <th scope="row" class="px-4 py-2 text-gray-900 dark:text-white whitespace-nowrap">
                                   
                                </th>
                                {{-- <td class="px-4 py-2 text-right">
                                    
                                </td> --}}
                                <td class="px-4 py-2 text-right print:hidden">
                                    
                                </td>
                                <td class="px-4 py-2 text-right">
                                    <span class="font-bold text-xxl text-slate-800 dark:text-slate-400">Total</span>
                                </td>
                                <td class="px-4 py-2 text-right">
                                    <span class="font-bold text-xxl text-slate-800 dark:text-slate-300">&#8377 {{$order->Total_price}}</span>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div> 
                <div class="border-b border-dashed border-slate-200 my-5 dark:border-slate-600"></div>
                <div class="flex flex-wrap mb-4">
                    <div class="w-full md:w-1/2 print:w-full">
                        <h5 class="text-slate-800 font-medium text-sm">Terms And Condition :</h5>
                        <ul class="ps-3 dark:text-slate-400">
                            <li><small class="text-xs"><span class="font-bold">1.</span> All accounts are to be paid within 7 days from receipt of invoice. </small></li>
                            <li><small class="text-xs"><span class="font-bold">2.</span> To be paid by cheque or credit card or direct payment online.</small></li>
                            <li><small class="text-xs"><span class="font-bold">3.</span> If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</small></li>                                            
                        </ul>
                    </div>
                    <div class="w-full md:w-1/2 print:w-full self-center mt-5 md:mt-0">
                        <div class="float-none md:float-right w-[30%]">
                            <small class="dark:text-slate-400">Account Manager</small>
                            <img src="{{ asset('/images/signature (1).png') }}" alt="" class="mt-2 mb-1 h-4">
                            <p class="border-t border-dashed border-slate-400 dark:text-slate-400">Signature</p>
                        </div>
                    </div>
                </div>
                <button class=" px-4 py-2 lg:px-4 bg-brand-500  text-white text-base  transition hover:bg-brand-500 hover:text-white border border-brand border-dashed font-medium mb-2 print:hidden" onclick="location.href='javascript:window.print()'">
                    Print
                </button>
                <button class=" px-4 py-2 lg:px-6 bg-transparent  text-red text-base  transition hover:bg-red-500 hover:text-white  border-red border-[2px] font-medium mb-2 print:hidden" onclick="location.href='{{route('billList')}}'">
                    Cancel
                </button>
            </div>
        </div> <!--end card-->
    </div><!--end col-->  
</div><!--end inner-grid-->
@endsection
