{{-- @include('layout.head') --}}
<div class="min-h-full z-[99]  fixed inset-y-0 print:hidden bg-gradient-to-t from-[#6f3dc3] from-10% via-[#603dc3] via-40% to-[#5c3dc3] to-100% dark:bg-[#603dc3] main-sidebar duration-300 group-data-[sidebar=dark]:bg-[#603dc3] group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#603dc3]">
    <div class=" text-center border-b bg-[#603dc3] border-r h-[64px] flex justify-center items-center brand-logo dark:bg-[#603dc3] dark:border-slate-700/40 group-data-[sidebar=dark]:bg-[#603dc3] group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#603dc3] group-data-[sidebar=brand]:border-slate-700/40">
        <a href="{{ route('dashboard') }}" class="logo">
            <span>
                <img src="{{ asset('/images/logo-sm.png') }}" alt="logo-small" class="logo-sm h-8 align-middle inline-block">
            </span>
            <span>
                
                {{-- <img src="{{ asset('/images/logo.png') }}" alt="logo-large" class="logo-lg h-[28px] logo-light hidden dark:inline-block ms-1 group-data-[sidebar=dark]:inline-block group-data-[sidebar=brand]:inline-block"> --}}
                <img src="{{ asset('/images/logo.png') }}" alt="logo-large"
                    class="logo-lg h-[28px] logo-dark inline-block dark:hidden ms-1 group-data-[sidebar=dark]:hidden group-data-[sidebar=brand]:hidden">
            </span>
        </a>
    </div>
    {{-- @include('layout.navbar') --}}
    <div class="border-r pb-14 h-[100vh] dark:bg-[#603dc3] dark:border-slate-700/40 group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40" data-simplebar>
        <div class="p-4 block">
            <ul class="navbar-nav">
                <li class="uppercase text-[11px]  text-primary-500 dark:text-primary-400 mt-0 leading-4 mb-2 group-data-[sidebar=dark]:text-primary-400 group-data-[sidebar=brand]:text-primary-300">
                   <span class="text-[9px] text-slate-600 dark:text-slate-500 group-data-[sidebar=dark]:text-slate-500 group-data-[sidebar=brand]:text-slate-400">DashboardS & Apps</span></li>
                <li>
                    <div id="parent-accordion" data-fc-type="accordion">
                        <a href="#"
                           class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 "
                           data-fc-type="collapse" data-fc-parent="parent-accordion">
                            <span data-lucide="home"
                                  class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                            <span>Admin</span>
                            <i class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
                        </a>

                        <div id="Admin-flush" class="hidden  overflow-hidden">
                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                <li class="nav-item relative block">
                                    <a href="{{ route('dashboard') }}"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="{{ route('categories.index')}}"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        Category
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="{{ route('product.index') }}"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        Product
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="{{ route('cust.list') }}"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        Customers
                                    </a>
                                </li>
                                {{-- 
                                    
                                    
                            --}}
                                <li class="nav-item relative block">
                                    <a href="{{route('orderlist')}}"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        Orders
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="{{route('adminOrderHistory')}}"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        Order History
                                    </a>
                                </li>
                                
                            </ul>                            
                        {{-- </div>
                        <a href="#"
                            class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 "
                            data-fc-type="collapse" data-fc-parent="parent-accordion">
                            <span data-lucide="home"
                                class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                            <span>Customer</span>
                            <i class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
                        </a>
                        <div id="Customer-flush" class="hidden  overflow-hidden">
                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                <li class="nav-item relative block">
                                    <a href="customers-home.html"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                        Home 
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="customers-pro-details.html"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        Product details
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="customers-products.html"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                       Product filter
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="customers-cart.html"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        Cart
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="customers-checkout.html"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        Checkout
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="customers-profile.html"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        Profile
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="customers-stores.html"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                       Favourite store
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="customers-wishlist.html"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                       Wishlist
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="customers-order-track.html"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                       Order track
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="customers-invoice.html"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                       Invoice
                                    </a>
                                </li>
                            </ul>                            
                        </div>
                        <div data-fc-type="collapse" data-fc-parent="parent-accordion">
                            <a href="#"
                               class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200">
                                <span data-lucide="grid"
                                      class="w-5 h-5 text-center text-slate-800 me-2 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Apps</span>
                                <i class="icofont-thin-down fc-collapse-open:rotate-180 ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
                            </a>
                        </div>
                        <div class="hidden  overflow-hidden">
                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2" id="apps-accordion"
                                data-fc-type="accordion">
                                <li class="nav-item relative block">
                                    <a href="apps-chat.html"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200  flex items-center decoration-0 px-3 py-3">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        Chat
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="apps-contact-list.html"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        Contact List
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="apps-calendar.html"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        Calendar
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="apps-files.html"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        File Mamager
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="apps-invoice.html"
                                       class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        Invoice
                                    </a>
                                </li>
                                <li>
                                    <div id="Email" data-fc-type="collapse" data-fc-parent="apps-accordion">
                                        <a href="#"
                                           class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 "
                                           aria-expanded="false" aria-controls="Email-flush">
                                            <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            <span>Email</span>
                                            <i class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400  fc-collapse-open:rotate-180"></i>
                                        </a>
                                    </div>
                                    <div id="Email-flush" class=" hidden  overflow-hidden "
                                         aria-labelledby="Email">
                                        <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                            <li class="nav-item relative block">
                                                <a href="apps-email-inbox.html"
                                                   class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                    <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                    Inbox
                                                </a>
                                            </li>
                                            <li class="nav-item relative block">
                                                <a href="apps-email-read.html"
                                                   class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative group-data-[sidebar=brand]:hover:text-slate-200   flex items-center decoration-0 px-3 py-3">
                                                    <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                    Read Email
                                                </a>
                                            </li>
                                        </ul>--}}
                        
                                    </div>
                                </li>
                            </ul>
                        </div> 

                
                        
    </div>
</div>

{{-- @include('layout.footer') --}}
