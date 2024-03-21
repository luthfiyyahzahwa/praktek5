@extends('layout.main')

@section('content')
<!-- Product Cards -->
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold mb-4">Our Products</h1>
    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Case Handphone</p>
                    <h5 class="mb-2 font-bold dark:text-white">Rp 18.000</h5>
                    <p class="mb-0 dark:text-white dark:opacity-60">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                    </p>
                </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-blue-500 to-violet-500 overflow-hidden">
                    <img src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="Earphone" class="object-cover w-full h-full">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Tas Canvas</p>
                    <h5 class="mb-2 font-bold dark:text-white">Rp 50.400</h5>
                    <p class="mb-0 dark:text-white dark:opacity-60">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                    </p>
                </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-blue-500 to-violet-500 overflow-hidden">
                    <img src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="Earphone" class="object-cover w-full h-full">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Bracelet</p>
                    <h5 class="mb-2 font-bold dark:text-white">Rp 3.999</h5>
                    <p class="mb-0 dark:text-white dark:opacity-60">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                    </p>
                </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-blue-500 to-violet-500 overflow-hidden">
                    <img src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="Earphone" class="object-cover w-full h-full">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Binder</p>
                    <h5 class="mb-2 font-bold dark:text-white">Rp 28.950</h5>
                    <p class="mb-0 dark:text-white dark:opacity-60">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                    </p>
                </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-blue-500 to-violet-500 overflow-hidden">
                    <img src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="Earphone" class="object-cover w-full h-full">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- row 2 -->
    <div class="flex flex-wrap mt-6 -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Earphone</p>
                    <h5 class="mb-2 font-bold dark:text-white">Rp 59.000</h5>
                    <p class="mb-0 dark:text-white dark:opacity-60">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                    </p>
                </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-blue-500 to-violet-500 overflow-hidden">
                    <img src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="Earphone" class="object-cover w-full h-full">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Handuk</p>
                    <h5 class="mb-2 font-bold dark:text-white">Rp 76.000</h5>
                    <p class="mb-0 dark:text-white dark:opacity-60">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                    </p>
                </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-blue-500 to-violet-500 overflow-hidden">
                    <img src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="Earphone" class="object-cover w-full h-full">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Pashmina Kaos</p>
                    <h5 class="mb-2 font-bold dark:text-white">Rp 32.000</h5>
                    <p class="mb-0 dark:text-white dark:opacity-60">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                    </p>
                </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-blue-500 to-violet-500 overflow-hidden">
                    <img src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="Earphone" class="object-cover w-full h-full">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Cushion</p>
                    <h5 class="mb-2 font-bold dark:text-white">Rp 107.000</h5>
                    <p class="mb-0 dark:text-white dark:opacity-60">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                    </p>
                </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-blue-500 to-violet-500 overflow-hidden">
                    <img src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="Earphone" class="object-cover w-full h-full">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- row 3 -->
    <div class="flex flex-wrap mt-12 -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Earphone</p>
                    <h5 class="mb-2 font-bold dark:text-white">Rp 59.000</h5>
                    <p class="mb-0 dark:text-white dark:opacity-60">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                    </p>
                </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-blue-500 to-violet-500 overflow-hidden">
                    <img src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="Earphone" class="object-cover w-full h-full">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Handuk</p>
                    <h5 class="mb-2 font-bold dark:text-white">Rp 76.000</h5>
                    <p class="mb-0 dark:text-white dark:opacity-60">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                    </p>
                </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-blue-500 to-violet-500 overflow-hidden">
                    <img src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="Earphone" class="object-cover w-full h-full">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Pashmina Kaos</p>
                    <h5 class="mb-2 font-bold dark:text-white">Rp 32.000</h5>
                    <p class="mb-0 dark:text-white dark:opacity-60">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                    </p>
                </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-blue-500 to-violet-500 overflow-hidden">
                    <img src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="Earphone" class="object-cover w-full h-full">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Cushion</p>
                    <h5 class="mb-2 font-bold dark:text-white">Rp 107.000</h5>
                    <p class="mb-0 dark:text-white dark:opacity-60">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
                    </p>
                </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-blue-500 to-violet-500 overflow-hidden">
                    <img src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="Earphone" class="object-cover w-full h-full">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    </div>
    <!-- end cards -->

<footer class="pt-4">
    <div class="w-full px-6 mx-auto">
    <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
        <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
        <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
            ©
            <script>
            document.write(new Date().getFullYear() + ",");
            </script>
            made with <i class="fa fa-heart"></i> by
            <a href="https://www.creative-tim.com" class="font-semibold text-slate-700 dark:text-white" target="_blank">Creative Tim</a>
            for a better web.
        </div>
        </div>
        <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
        <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
            <li class="nav-item">
            <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
            <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
            <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
            <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">License</a>
            </li>
        </ul>
        </div>
    </div>
    </div>
</footer>
@endsection
