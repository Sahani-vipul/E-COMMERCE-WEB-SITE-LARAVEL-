{{-- <footer
class="footer bg-transparent  text-center  font-medium text-slate-400 dark:text-slate-400 md:text-left ">
&copy;
<script>
  var year = new Date();document.write(year.getFullYear());
</script>
Robotech
<span class="float-right hidden text-slate-400 dark:text-slate-400 md:inline-block"> Crafted with <i class="ti ti-heart text-red-500"></i> by
  Mannatthemes</span>
</footer> --}}
        <!-- JAVASCRIPTS -->
        <!-- <div class="menu-overlay"></div> -->
        <script src="{{ asset('libs/lucide/umd/lucide.min.js') }}"></script>
        <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('libs/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('libs/@frostui/tailwindcss/frostui.js') }}"></script>

        <script src="{{ asset('libs/nice-select2/js/nice-select2.js') }}"></script>
        <script src="{{ asset('libs/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            NiceSelect.bind(document.querySelector(".nice-select"));
            var swiper = new Swiper(".defaultSwiper", {
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });    
        </script>
        <!-- JAVASCRIPTS -->
    