<!-- ====== Navbar Section Start -->
<header
    x-data="
   {
   navbarOpen: false,
   }
   "
    class="absolute top-0 left-0 z-50 w-full">
    <div class="container mx-auto">
        <div class="relative flex items-center justify-between -mx-4">
            <div class="max-w-full px-4 w-60">
                <a href="./index.php" class="block w-full py-5">
                    <span class="self-center ml-2 text-xl sm:text-xl md:text-2xl lg:text-3xl xl:text-5xl font-semibold whitespace-nowrap">
                        <span style="font-family: 'Elsie Swash Caps', serif; font-weight: 900; font-style: normal;">
                            <span class="text-white">Dbase</span>
                        </span>
                    </span>
                </a>
            </div>
            <div class=" w-full px-4">
                <div class="justify-end pr-16 sm:flex lg:pr-0">
                    <a
                        href="./dashboard.php"
                        class="py-3 text-base font-medium text-white rounded-md bg-primary px-7 hover:bg-blue-dark">
                        Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ====== Navbar Section End -->