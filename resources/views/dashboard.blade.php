@extends('layout.app')

@section('title')
 Dashboard
@endsection


@section('content')


<div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14"> 
    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">  
        <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-3 xl:col-span-3">
            <div class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                <div class="flex-auto p-4">
                    <div class="flex justify-between xl:gap-x-2 items-cente">
                        <div class="self-center"> 
                            <p class="text-gray-800 font-semibold dark:text-slate-400 text-lg uppercase">Total orders</p>                           
                            <h3 class="my-4 font-semibold text-[30px] dark:text-slate-200">{{$order->count()}}</h3>                                                
                        </div>                                       
                        <div class="self-center">                                                
                            <i data-lucide="shopping-cart" class=" h-16 w-16 stroke-primary-500/30"></i>
                        </div>                                            
                    </div>
                    <p class="truncate text-slate-400"><span class="text-green-500"><i class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>
                </div><!--end card-body-->  
                <div class="flex-auto p-0 overflow-hidden"> 
                    <div class="flex mb-0 h-full">
                        <div class="w-full">                                                
                            <div class="apexchart-wrapper">
                                <div id="apex_column1" class="chart-gutters"></div>
                            </div>
                        </div>
                    </div>
                </div><!--end card-body-->                             
            </div> <!--end inner-grid--> 
        </div><!--end col-->


        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
            <div class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                <div class="flex-auto p-4">
                    <div class="flex justify-between xl:gap-x-2 items-cente">
                        <div class="self-center"> 
                            <p class="text-gray-800 font-semibold dark:text-slate-400 uppercase">Total customers</p>                           
                            <h3 class="my-4 font-semibold text-[30px] dark:text-slate-200">{{ $user->count()}}</h3>                                              
                        </div>                                       
                        <div class="self-center">                                                
                            <i data-lucide="users" class=" h-16 w-16 stroke-green/30"></i>
                        </div>                                            
                    </div>
                    <p class="truncate text-slate-400"><span class="text-red-500"><i class="mdi mdi-trending-down"></i>0.6%</span> Bounce Rate Weekly</p>
                </div><!--end card-body-->   
                <div class="flex-auto p-0 overflow-hidden"> 
                    <div class="flex mb-0 h-full">
                        <div class="w-full">                                                
                            <div class="apexchart-wrapper">
                                <div id="dash_spark_1" class="chart-gutters"></div>
                            </div>
                        </div>
                    </div>
                </div><!--end card-body-->                              
            </div> <!--end inner-grid-->                                                                                                  
        </div><!--end col-->


        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
            <div class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                <div class="flex-auto p-4">
                    <div class="flex justify-between xl:gap-x-2 items-cente">
                        <div class="self-center"> 
                            <p class="text-gray-800 font-semibold dark:text-slate-400 uppercase">Top coupons</p>                           
                            <h3 class="my-4 font-semibold text-[30px] dark:text-slate-200">78%</h3>                                                
                        </div>                                       
                        <div class="self-center">                                                
                            <i data-lucide="gem" class=" h-16 w-16 stroke-yellow-500/30"></i>
                        </div>                                            
                    </div>
                    <p class="truncate text-slate-400"><span class="text-green-500"><i class="mdi mdi-trending-up"></i>1.5%</span> Weekly Avg.Sessions</p>        
                </div><!--end card-body-->  
                <div class="flex-auto p-0 overflow-hidden"> 
                    <div class="grid grid-cols-12">
                        <div class="col-span-6">
                            <div id="ana_device" class="apex-charts"></div>
                        </div><!--end col-->
                        <div class="col-span-6">
                            <ol class="list-none list-inside">
                                <li class="-mt-1 text-slate-700 dark:text-slate-400 text-sm"><i class="icofont-caret-right text-primary-500 text-lg"></i> Sent</li>
                                <li class="-mt-1 text-slate-700 dark:text-slate-400 text-sm"><i class="icofont-caret-right text-green-500 text-lg"></i> Opened</li>
                                <li class="-mt-1 text-slate-700 dark:text-slate-400 text-sm"><i class="icofont-caret-right text-red-500 text-lg"></i> Not Opened</li>
                            </ol>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div><!--end card-body-->                                
            </div> <!--end inner-grid--> 
        </div>
        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
            <div class="bg-[#1b1b22] shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                <div class="flex-auto p-4">
                    <div class="flex justify-between xl:gap-x-2 items-cente">
                        <div class="self-center"> 
                            <p class="text-gray-300 font-semibold dark:text-slate-400 uppercase">Total Revenue</p>                           
                            <h3 class="my-4 font-semibold text-[30px] text-slate-200">$85000</h3>                                                
                        </div>                                       
                        <div class="self-center">                                                
                            <i data-lucide="dollar-sign" class=" h-16 w-16 stroke-[#2ecee1]/30"></i>
                        </div>                                            
                    </div>
                    <p class="truncate text-slate-400"><span class="text-green-500"><i class="mdi mdi-trending-up"></i>10.5%</span> Completions Weekly</p>
                </div><!--end card-body-->
                <div class="flex-auto p-4 pt-0 -mt-1">
                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                        
                        <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-3">
                            <img src="assets/images/widgets/wallet.png" alt="" class="w-full h-auto">                                    
                        </div>
                        <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-8 text-end self-center">
                            <button class="px-4 py-1 font-medium text-white transition duration-200 ease-in-out delay-200 skew-y-6 bg-brand-600 border-b-4 border-brand-700 rounded shadow-lg shadow-brand-600/50 hover:skew-y-0 hover:border-brand-700">Withdrawal</button>
                            <!-- <button class="px-2 py-1 bg-brand-500 border border-transparent collapse:bg-green-100 text-white text-sm rounded hover:bg-brand-600 hover:text-white">Withdrawal</button> -->
                        </div>
                    </div> 
                </div><!--end card-body-->
            </div> <!--end inner-grid-->                                     
        </div><!--end col-->
    </div> <!--end grid-->

    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-4">
            <div class="w-full relative mb-4">  
                <div class="flex-auto p-4">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12 sm:col-span-4">
                            <img src="assets/images/widgets/user.png" alt="" class="h-auto w-full">
                        </div><!--end col--> 
                        <div class="col-span-12 sm:col-span-8 self-center">
                            <h4 class="font-medium flex-1 self-center mb-2 md:mb-0 dark:text-slate-400 text-xl">A Guide to Analyze and Optimize Your Online Business</h4>
                        </div><!--end col--> 
                    </div><!--end grid-->
                    
                    <div class="border-b border-dashed border-slate-300 dark:border-slate-700/40 my-3"></div>
                    <div class="grid grid-cols-12 gap-4 mb-8">
                        <div class="col-span-12 sm:col-span-6">
                            <div id="email_report" class="apex-charts -mb-4"></div>
                        </div><!--end col--> 
                        <div class="col-span-12 sm:col-span-6 self-center">
                            <ol class="list-none list-inside mb-3">
                                <li class="mb-1 text-slate-700 dark:text-slate-400 text-sm"><i class="icofont-ui-play me-2 text-brand-500"></i> Tablet</li>
                                <li class="mb-1 text-slate-700 dark:text-slate-400 text-sm"><i class="icofont-ui-play me-2 text-yellow-400"></i> Desktop</li>
                                <li class="mb-1 text-slate-700 dark:text-slate-400 text-sm"><i class="icofont-ui-play me-2 text-[#13939c]"></i> Moble</li>
                            </ol>
                            <button type="button" class="inline-block shadow-sm dark:shadow-slate-700/10 focus:outline-none text-slate-600 hover:bg-brand-500 hover:text-white bg-transparent border border-slate-300 dark:bg-transparent dark:text-slate-400 dark:hover:text-white dark:border-gray-700 dark:hover:bg-brand-500  text-sm font-medium py-1 px-3 rounded">View Details <i class="mdi mdi-arrow-right"></i></button>
                        </div><!--end col--> 
                    </div><!--end grid--> 
                    <h6 class="bg-brand-400/5 shadow-sm dark:shadow-slate-700/10 border border-dashed dark:text-brand-300 border-brand dark:bg-slate-700/40 py-3 px-2 rounded-md  text-center text-brand-500 font-medium mt-3">
                        <i class="ti ti-calendar self-center text-lg mr-1"></i>
                        01 January 2023 to 31 December 2024
                    </h6>                                   
                </div><!--end card-body--> 
            </div><!--end card-->                                  
        </div><!--end col-->
        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-8 xl:col-span-8">
            <div class="w-full relative mb-4">
                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                    <div class="flex-none md:flex">
                        <h4 class="font-medium flex-1 self-center mb-2 md:mb-0 text-xxl">Sales Report</h4>
                        <div class="dropdown inline-block">
                            <button data-fc-autoclose="both" data-fc-type="dropdown" class="dropdown-toggle px-3 py-1 text-xs font-medium text-gray-500 focus:outline-none bg-white rounded border border-gray-200 hover:bg-gray-50 hover:text-slate-800 focus:z-10 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                This Month 
                                <i class="fas fa-chevron-down text-xs ml-2"></i>
                            </button>
                            <!-- Dropdown menu -->
                            <div class="right-auto md:right-0 hidden z-10 w-28 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Last Week</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Last Month</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">This Year</a>  
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="flex-auto p-4">
                    <div id="crm-dash" class="apex-charts mt-5"></div>
                </div><!--end card-body-->                          
            </div> <!--end inner-grid-->                                                                                                  
        </div><!--end col-->
        
        
    </div> <!--end grid-->

@endsection
