  @include('layout.head')
  @include('layout.navbar')
  @include('layout.sidebar')

  @include('sweetalert::alert')
<div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
        <div class="xl:w-full">        
            <div class="flex flex-wrap">
                <div class="flex items-center py-4 w-full">
                    <div class="w-full">                    
                        <div class="">
                            <div class="flex flex-wrap justify-between">
                                {{-- <div class="content"> --}}
                                    {{-- <div class="container-fluid"> --}}
                                        <div class="col-sm-6">
                                            <h1 class="m-0">@yield('mainTitle')</h1>
                                          </div>
                                        
                                     @yield('content')
                                      <!-- /.row -->
                                    {{-- </div><!-- /.container-fluid --> --}}
                                  {{-- </div> --}}
                                {{-- <div class="flex items-center">
                                    <div class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                        <input type="text" class="dash_date border-0 focus:border-0 focus:outline-none" readonly  required="">
                                    </div>
                                </div> --}}
                                {{-- @include('layout.footer') --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--end container-->


{{-- <div class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40">
    <div class="container">
      <!-- Footer Start -->
      <footer
        class="footer bg-transparent  text-center  font-medium text-slate-600 dark:text-slate-400 md:text-left "
      >
        &copy;
        <script>
          var year = new Date();document.write(year.getFullYear());
        </script>
        Robotech
        <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block"
          >Crafted with <i class="ti ti-heart text-red-500"></i> by
          Mannatthemes</span
        >
      </footer>
      <!-- end Footer -->
    </div>
  </div>


</div><!--end container--> --}}
</div>
</div>

<!-- JAVASCRIPTS -->
<!-- <div class="menu-overlay"></div> -->
<script src="{{ asset('/libs/lucide/umd/lucide.min.js') }}"></script>
<script src="{{ asset('/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('/libs/@frostui/tailwindcss/frostui.js') }}"></script>

<script src="{{ asset('/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('/js/pages/analytics-index.init.js') }}"></script>
<script src="{{ asset('/js/app.js') }}"></script>
<!-- JAVASCRIPTS -->
</body>
</html>
{{-- @include('layout.footer') --}}
{{-- @include('layout.sidebar') --}}