@extends('Customer.layout.app')

@section('title')
Checkout
@endsection

@section('contant')
@include('sweetalert::alert')

<div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div class="page-wrapper relative  duration-300 pt-0 w-full">
        <form action="{{route('order')}}" method="post">
            @csrf
        <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0"> 
            <div class="container my-4">
                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4 ">
                        <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                            <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                                <div class="flex-none md:flex">
                                    <h4 class="font-medium flex-1 self-center mb-2 md:mb-0">Order Summary</h4>                                        
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
                                                            Total
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Product 1 -->
                                                @php
                                                    $total = 0;
                                                    $item = 0;
                                                @endphp
                                                @foreach ($carts as $cart)
                                                    <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                        <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-slate-300">
                                                            {{-- <img src="assets/images/products/01.png" alt="" class="mr-2 h-8 inline-block"> --}}
                                                            <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400 inline-block" style="white-space: break-spaces">{{ $cart->product->name }}</h5>
                                                        </td>
                                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            {{$cart->qty}}
                                                        </td>
                                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            &#8377 {{ $cart->product->price }}
                                                        </td>
                                                    </tr>
                                                @php
                                                    $total +=  $cart->product->price*$cart->qty;
                                                    $item += 1;
                                                @endphp
                                                @endforeach  
                                                   
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
                                                            Subtotal
                                                        </td>
                                                        <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                            &#8377 {{$total}}
                                                        </td>
                                                    </tr>
                                                    <!-- 2 -->
                                                    <tr class="border-b border-dashed border-slate-500/60 dark:border-slate-700/40">
                                                        <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                            Shipping Charge
                                                        </td>
                                                        <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                            &#8377 250 
                                                        </td>
                                                    </tr>
                                                    <!-- 3 -->
                                                   
                                                    <!-- 4 -->
                                                    <tr class="border-t-2 border-solid border-slate-500/60 dark:border-slate-700/40">
                                                        <td class="p-3 text-base text-gray-200 whitespace-nowrap font-medium">
                                                            Total
                                                        </td>
                                                        <td class="p-3 text-base font-medium text-gray-100 whitespace-nowrap">
                                                            &#8377 {{$total+250}}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>   
                                    <div class="flex gap-4 mb-4">
                                        <button class="px-3 py-2 lg:px-4 bg-brand-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-brand-600 hover:text-white w-1/2 mt-4 lg:mb-0 inline-block"><a href="{{route('customer.product')}}">Continue shopping</a></button>  
                                        <button class="px-3 py-2 lg:px-4 bg-brand-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-brand-600 hover:text-white w-1/2 mt-4 lg:mb-0 inline-block"><a href="{{route('cart')}}">Back To Cart</a></button>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div>
                    </div><!--end col-->
                    
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8 ">
                        <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative mb-4">
                            {{-- <form action="{{ url('addressupload')}}" method="POST" id="addpost"> --}}
                                @csrf
                                <span id="message"></span>
                            <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                                <h4 class="font-medium">Delivery Address</h4>
                            </div><!--end header-title-->
                            @foreach ($address as $add)
                                
                            
                            <div class="flex-auto p-4">
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
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
                            {{-- </div><!--end card-body--> --}}
                                @endforeach
                                
                                <div class="mt-3">
                                    <button  class="inline-block focus:outline-none text-white hover:bg-brand-500 hover:text-white bg-brand-500 border border-gray-200 text-sm font-medium py-1 px-3 rounded"><a href="{{route('address')}}">Edit</a></button>
                                    {{-- <button class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200  text-sm font-medium py-1 px-3 rounded">Cancle</button> --}}
                                </div>
                            {{-- </form> --}}
                            </div><!--end card-body-->
                        </div> <!--end card-->
                        <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">                                        
                            <div class="flex-auto p-4">
                                <div class="flex items-center mb-4">
                                    <img src="assets/images/logos/card-2.png" alt="" class="mr-2 h-8 inline-block">
                                    <div class="self-center">
                                        <span class="block  font-medium text-slate-700">Payment mode</span>
                                        {{-- <h5 class="text-xs font-medium text-slate-500 dark:text-gray-400">Last time used: 21 march 2023</h5> --}}
                                    </div>
                                </div>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Cash on Delivery
                                    </label>
                                  </div>
                                  @if ($carts->count() > 0)
                                      <button name="confurm_order" type="submit" class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500 w-full" id="confurm_order">Confirm payment  &#8377 {{$total+250}}</button>
                                      @else    
                                      <button name="confurm_order" type="submit" class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500 w-full" id="confurm_order">Confirm payment  &#8377 {{$total}}</button>
                                  @endif
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </form>
                {{-- </div>    --}}


      <script type="text/javascript">
        
        $(document).ready(function(){

                $('#submit').click(function(event){
              
                    
                    alert('heelo');
                    // event.preventDefault();
                    
                    // JQuery.ajax({

                    //     url:{{url('addressupload')}},
                    //     data:JQuery(#addpost).serialize(),
                    //     type:'post',
                        
                    //     success:function(result){
                            
                            
                    //         $(#message).css('display','block');
                    //             JQuery('#message').html(result.message);
                    //     }

                    // });
                });

                // $('#confurm_order').on('click',function(){

                //     // JQuery.ajax({
                        
                //         alert('heelo');

                //      });
                // });
                
            });
    </script>                  
@endsection
