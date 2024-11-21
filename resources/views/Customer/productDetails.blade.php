@extends('Customer.layout.app')

@section('title')
product
@endsection

@section('contant')

<form action="{{ route('add-to-cart')}}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value={{$product->id}}>
<div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">                        
    <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
        <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
            <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                <h4 class="font-medium">{{$product->name}}</h4>
            </div><!--end header-title-->
            <div class="flex-auto p-4">                                   
                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 text-center">
                        <div id="img-container" class="w-[500px] text-center inline-block mx-auto">
                            <img src="{{ asset('productImage/'.$product->imgPath) }}" alt="" class="h-30 inline-block my-10 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                        </div>
                    </div>
                    <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 self-center">
                        {{-- <span class="bg-green-600/5 text-green-500 text-[14px] font-medium px-2.5 py-0.5 rounded h-5">Robotech</span> --}}
                        @if ($errors->has('product_id'))
                        <span class="text-danger"> @php
                            echo "This Item already In Cart";
                        @endphp </span>
                        @endif
                        <div class="">
                            {{-- <h5 class="dark:text-slate-200 font-medium text-[30px] leading-9 mt-4">Robotech air zoom terra kiger 7 <br> hiking colorful</h5> --}}
                            <p tabindex="0" class="focus:outline-none text-primary-500 dark:text-gray-400 text-base font-medium">Morden and good look model 2023.</p>
                            <ul class="mb-4">
                                <li class="inline-block">
                                    <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                </li>
                                <li class="inline-block">
                                    <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                </li>
                                <li class="inline-block">
                                    <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                </li>
                                <li class="inline-block">
                                    <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                </li>
                                <li class="inline-block">
                                    <i class="icofont-star text-xl text-slate-400 inline-block"></i>
                                </li>
                                <li class="inline-block">
                                    {{-- <span class="text-gray-700 dark:text-gray-400 text-sm font-medium">4.5 (9885 reviews)</span> --}}
                                </li>
                            </ul>
                            <h6 class="text-[28px] text-slate-700 dark:text-slate-300 font-semibold mb-4">&#8377 {{$product->price}}
                                {{-- <span class="text-base text-slate-400 font-semibold"><del>&#8377 {{$product->price}}</del></span> --}}
                                {{-- <span class="text-red-500 text-base font-semibold ml-2">50% Off</span> --}}
                            </h6>
                            <h6 class="text-sm font-medium text-slate-800 dark:text-slate-400">Detail :</h6>
                            <p class="focus:outline-none text-gray-500 dark:text-gray-400 text-sm font-medium mb-4">
                                {{$product->Description}}
                
                                {{-- <a href="#" class="text-primary-500">more details</a> --}}
                            </p>
                            <h6 class="text-sm font-medium text-slate-800 dark:text-slate-400">Size :</h6>

                            <p class="focus:outline-none text-gray-500 dark:text-gray-400 text-sm font-medium mb-4">
            
                                {{$product->size}}
                                {{-- <a href="#" class="text-primary-500">more details</a> --}}
                            </p>
                            <!-- <h6 class="text-sm font-medium text-slate-800 dark:text-slate-400 mt-2">Features :</h6>
                            <ol class="list-none list-inside mt-1">
                                <li class="mb-1 text-slate-700 dark:text-slate-400"><i class="las la-check-circle text-green-500 mr-1"></i> It is a long established fact that a reader will be distracted.</li>
                                <li class="mb-1 text-slate-700 dark:text-slate-400"><i class="las la-check-circle text-green-500 mr-1"></i> Contrary to popular belief, Lorem Ipsum is not text.</li>
                                <li class="mb-1 text-slate-700 dark:text-slate-400"><i class="las la-check-circle text-green-500 mr-1"></i> There are many variations of passages of Lorem Ipsum available.</li>
                            </ol> -->
                           
                            <input class="form-input border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent  rounded-md mt-1 border-gray-200 px-3 py-2 text-sm focus:outline-none focus:ring-0 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand-500  dark:hover:border-slate-700" style="width:100px;" type="number" min="0" value="1" name="qty" id="example-number-input">

                            <button type="submit" class="inline-block focus:outline-none text-slate-600 hover:bg-brand-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-slate-400 dark:hover:text-white dark:border-gray-700 dark:hover:bg-brand-500  text-sm font-medium py-2 px-3 rounded"><i class="ti ti-shopping-cart"></i> Add to cart</button>
                        </div>
                    </div>
                </div>
            </div><!--end card-body-->
        </div> <!--end card-->
    </div><!--end col-->            
</div><!--end inner-grid-->

</form>
@endsection