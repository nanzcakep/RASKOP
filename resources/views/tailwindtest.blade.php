<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Ruangan</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap" async defer></script>
</head>
<body>
    {{-- Start Nav --}}
    <nav class="bg-[#164138]">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
          <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Mobile menu button-->
              <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!--
                  Icon when menu is closed.
      
                  Menu open: "hidden", Menu closed: "block"
                -->
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!--
                  Icon when menu is open.
      
                  Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="flex flex-1 items-end justify-center sm:items-stretch sm:justify-start">
              <div class="flex flex-shrink-0 items-center">
                {{-- <img class="h-8 w-auto" src="{{ asset('assets/images/Rasakopi-logo.png') }}" alt="Your Company"> --}}
                <img class="h-8 w-auto" src="{{ asset('assets/images/Rasakopi-logo.png') }}" alt="Your Company">
                <h2 class="text-white px-3 font-['DM Sans'] font-extrabold">RASA KOPI</h2>
              </div>
            </div>
            <div class="flex justify-end">
              <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                  <a href="#" class="text-white hover:bg-white-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Reservasi</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
          </div>
        </div>
      </nav>
    {{-- End Nav --}}

    {{-- Coursell --}}
    {{-- Belum saya kasih gambar tinggal tambahin 2 --}}
    <div class="max-w-[1500px] h-[635px] relative" style="background: url('/assets/images/bg-logo2.png'); background-color: rgba(0, 0, 0, 0.4); background-blend-mode: multiply; ">
      <div class="absolute inset-0 flex items-center justify-center text-white text-[34px] font-bold font-['DM Sans'] tracking-[3.40px]">
        <p><span class="bg-[#E08756]">KENANG</span> MASANYA<br><span>SIMPAN <span class="bg-[#164138]">RASANYA</span></p>
      </div>
    </div>
    
    {{-- End Coursell --}}

    {{-- Start Room --}}
    <div class="flex space-x-4 mt-8 px-5 text-justify">
      <div class="relative flex w-full max-w-[45rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
        <div class="relative w-2/5 m-0 overflow-hidden text-gray-700 bg-white rounded-r-none shrink-0 rounded-xl bg-clip-border">
          <img
            src="{{ asset('assets/images/DALAM.jpg') }}"
            alt="image"
            class="object-cover w-full h-full"
          />
        </div>
        <div class="p-6">
          {{-- <h6 class="block mb-4 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-[#164138] uppercase">
            RUANGAN DALAM
          </h6> --}}
          <h4 class="block mb-6 font-sans text-2xl antialiased font-extrabold leading-snug tracking-normal text-[#164138]">
            RUANGAN DALAM
          </h4>
          <p class="block mb-8 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
            Like so many organizations these days, Autodesk is a company in
            transition. It was until recently a traditional boxed software company
            selling licenses. Yet its own business model disruption is only part of
            the story
          </p>
          <a class="inline-block" href="#">
            <button
              class="flex items-center gap-2 px-6 py-3 font-sans text-xs font-bold text-center text-[#E08756] uppercase align-middle transition-all rounded-lg select-none hover:bg-[#164138]/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              type="button"
            >
              Reservasi
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true"
                class="w-4 h-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                ></path>
              </svg>
            </button>
          </a>
        </div>
      </div>
      <div class="relative flex w-full max-w-[45rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
        <div class="relative w-2/5 m-0 overflow-hidden text-gray-700 bg-white rounded-r-none shrink-0 rounded-xl bg-clip-border">
          <img
            src="{{ asset('assets/images/LUAR.jpg') }}"
            alt="image"
            class="object-cover w-full h-full"
          />
        </div>
        <div class="p-6">
          {{-- <h6 class="block mb-4 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-[#164138] uppercase">
            RUANGAN LUAR
          </h6> --}}
          <h4 class="block mb-6 font-sans text-2xl antialiased font-extrabold leading-snug tracking-normal text-[#164138]">
            RUANGAN LUAR
          </h4>
          <p class="block mb-8 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
            Like so many organizations these days, Autodesk is a company in
            transition. It was until recently a traditional boxed software company
            selling licenses. Yet its own business model disruption is only part of
            the story
          </p>
          <a class="inline-block" href="#">
            <button
              class="flex items-center gap-2 px-6 py-3 font-sans text-xs font-bold text-center text-[#E08756] uppercase align-middle transition-all rounded-lg select-none hover:bg-[#164138]/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              type="button"
            >
              Reservasi
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true"
                class="w-4 h-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                ></path>
              </svg>
            </button>
          </a>
        </div>
      </div>
    </div>    

    {{-- End Room --}}

    {{-- Start Map --}}
    {{-- <div class="flex justify-center mt-8 ">
      <img src="{{ asset('assets/images/MAP.png') }}" class="w-[1144px] h-[407px] bg-emerald-900 bg-opacity-20 rounded-[20px]" alt="">
    </div>  --}}
    
    <div class="container mx-auto mt-12">
      <div class="grid grid-cols-2 gap-[150px]">
        <div class="col-span-1 mt-8">
          <h2 class="text-6xl font-extrabold">
            <span class="bg-[#164138] text-white"> RASA</span>
            <span class="bg-[#E08756] text-white">KOPI</span>
          </h2>
          <div class="text-justify">
            <p class="mt-4">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore reiciendis quaerat magnam quis consequatur eum quo? Voluptate nulla doloremque laboriosam esse fugiat ipsum dolores. Voluptatum pariatur tenetur sint  adaaa 
            </p>
            <p class="mt-6">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore reiciendis quaerat magnam quis consequatur eum quo? Voluptate nulla doloremque laboriosam esse fugiat ipsum dolores. Voluptatum pariatur tenetur sint  adaaa 
            </p>
          </div>
        </div>
        <div class="col-span-1 ">
          <img src="{{ asset('assets/images/MAP.png') }}" class="" alt="Image">
        </div>
      </div>
    </div>
    
    
    

    {{-- End Map --}}


    {{-- Start Footer --}}
    <footer class="bg-[#164138] mt-8">
      <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Rasa Kopi</a>. All Rights Reserved.
      </span>
      <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-white dark:text-gray-400 sm:mt-0">
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
          </li>
          <li>
              <a href="#" class="hover:underline">Contact</a>
          </li>
      </ul>
      </div>
    </footer>

    {{-- End Footer --}}

    {{-- Start Content --}}
    {{-- <h1 class="text-center font-bold mt-3">Belajar Tailwind Css</h1> --}}
   
    {{-- End Content --}}

   
  
</body>
</html>
