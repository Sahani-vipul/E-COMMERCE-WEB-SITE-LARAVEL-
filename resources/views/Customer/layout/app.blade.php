@include('Customer.layout.header')

@include('Customer.layout.navbar')



<body data-layout-mode="light"  data-sidebar-size="default" data-theme-layout="vertical" class="bg-[#EEF0FC] dark:bg-gray-900">


    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative  duration-300 pt-0 w-full">
            <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0"> 
                <div class="container my-4">
<div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div class="page-wrapper relative  duration-300 pt-0 w-full">
        <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0"> 
            <div class="bg-soft-gradient">
                <div class="container">
                    @yield('contant')
                </div><!--end container-->   
            </div><!--end section-->
        </div>    
    </div><!--end page-wrapper-->
</div><!--end div-->

@include('Customer.layout.footer')
</div><!--end section-->
</div>    
</div><!--end page-wrapper-->
</div><!--end div

</body>
</html>