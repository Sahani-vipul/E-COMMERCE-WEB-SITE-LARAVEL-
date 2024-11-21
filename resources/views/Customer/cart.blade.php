@extends('Customer.layout.app')

@section('title')
Cart
@endsection

@section('contant')
<form >  
    @include('sweetalert::alert')

    <div class="sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4 ">
        <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
            @if ($carts->count()>0)
            <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                <div class="flex-none md:flex">
                    <h4 class="font-medium flex-1 self-center mb-2 md:mb-0">Cart Details</h4>                                        
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
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Action
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
                                            <img src="assets/images/products/01.png" alt="" class="mr-2 h-8 inline-block">
                                            <h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400 inline-block">{{ $cart->product->name }}</h5>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            {{$cart->qty}}
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            &#8377 {{ $cart->product->price }}
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <a href="{{ route('cartitem.delete',[$cart->Product_id])}}"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                        </td>
                                    </tr>

                                    @php
                                        $total +=  $cart->product->price*$cart->qty;
                                        $item += $cart->qty;
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
                            <div>
                                <a href="{{route('checkout')}}" class="flex w-full items-center justify-center rounded-md bg-brand py-[10px] px-10 text-center text-base font-normal text-white hover:bg-opacity-90">
                                  Place Order
                                </a>
                              </div>
                        </div>
                    </div>
                </div>                                    
            </div>
            @else
            <div class="card-body text-center">
                <h2>Your <i class="fa fa-shopping-cart"></i> Cart is emty</h2>
                <a href="{{route('customer.product')}}" class="btn btn-outline-primary float-end">Continue Shopping</a>
            </div>
            @endif
        </div> <!--end card-->
        
    </div><!--end col-->
</form>   
@endsection
