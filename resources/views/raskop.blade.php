<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    
    <title>Ruangan</title>
    
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
    <div class="container max-w-full h-[635px] relative" style="background: url('/assets/images/bg-logo2.png'); background-color: rgba(0, 0, 0, 0.4); background-blend-mode: multiply; ">
      <div class="absolute inset-0 flex items-center justify-center text-white text-[34px] font-bold font-['DM Sans'] tracking-[3.40px]">
        <p><span class="bg-[#E08756]">KENANG</span> MASANYA<br><span>SIMPAN <span class="bg-[#164138]">RASANYA</span></p>
      </div>
    </div>
    {{-- End Coursell --}}

    {{-- Start Room --}}
{{-- 
    <div class="flex mt-4">
      <div class="flex-initial w-50">
        <img src="{{ asset('assets/images/DALAM.jpg') }}" alt="">
        <div class="mt-5">
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tenetur excepturi recusandae incidunt eos debitis, nesciunt repellendus saepe ipsum, sequi quis odit dolores id corporis aut nihil, voluptates facilis veritatis.</p>
        </div>
      </div>
      <div class="flex-initial w-10"></div>
      <div class="flex-initial w-50">
        <img src="{{ asset('assets/images/DALAM.jpg') }}" alt="">
        <div class="mt-5">
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tenetur excepturi recusandae incidunt eos debitis, nesciunt repellendus saepe ipsum, sequi quis odit dolores id corporis aut nihil, voluptates facilis veritatis.</p>
        </div>
      </div>
    </div> --}}
    <div class="container max-w-full mx-auto mt-4">
      <div class="container mx-auto">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-3">
          <div class="bg-[url('http://127.0.0.1:8000/assets/images/DALAM.jpg')] bg-cover h-[347px] rounded-md shadow-md overflow-hidden">
            <div class="w-full h-full pt-52 pb-3 pl-9 bg-black bg-opacity-30">
              <h1  class="text-white text-4xl font-extrabold">Ruangan Dalam</h1>
              <button class="bg-[#164138] text-white text-center w-1/3 py-1.5 px-5 mt-3 rounded-md" type="button" data-modal-target="reservasi-modal" data-modal-toggle="reservasi-modal">Reservasi</button>
            </div>
          </div>
          <div class="bg-[url('http://127.0.0.1:8000/assets/images/LUAR.jpg')] bg-cover h-[347px] rounded-md shadow-md overflow-hidden">
            <div class="w-full h-full pt-52 pb-3 pl-9 bg-black bg-opacity-30">
              <h1  class="text-white text-4xl font-extrabold">Ruangan Luar</h1>
              <button class="bg-[#164138] text-white text-center w-1/3 py-1.5 px-5 mt-3 rounded-md" type="button" data-modal-target="reservasi-modal" data-modal-toggle="reservasi-modal">Reservasi</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- End Room --}}

  
    <!-- Main modal -->
    <div id="reservasi-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="fixed top-0 left-0 right-0 bottom-0 backdrop-blur-sm bg-black/30"></div>
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Reservasi - Ruangan Dalam</h3>
                    <form class="space-y-6" action="#" method="POST">
                        <div>
                          <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                          <div class="mt-2">
                            <input type="text" name="name" id="name" autocomplete="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-4" placeholder="nanzcakep">
                          </div>
                        </div>
                        <div>
                          <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Nomer WhatsApp</label>
                          <div class="mt-2">
                            <input type="text" name="phone" id="phone" autocomplete="phone" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-4" placeholder="+62xxxxxx">
                          </div>
                        </div>
                        <div>
                          <label for="faculty" class="block text-sm font-medium leading-6 text-gray-900">Fakultas</label>
                          <div class="mt-2">
                            <input type="text" name="faculty" id="faculty" autocomplete="faculty" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-4" placeholder="FRI/Fakultas Rekayasa Industri">
                          </div>
                        </div>
                        <div>
                          <label for="order" class="block text-sm font-medium leading-6 text-gray-900">Order</label>
                          <div class="mt-2">
                            <input type="text" name="order" id="order" autocomplete="order" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-4">
                          </div>
                        </div>
                        <div>
                          <label for="note" class="block text-sm font-medium leading-6 text-gray-900">note</label>
                          <div class="mt-2">
                            <textarea id="note" name="note" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-4" placeholder="Raskop less ice"></textarea>
                          </div>
                          {{-- <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p> --}}
                        </div>
                        <button type="submit" class="w-full text-white bg-[#164138]  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Reservasi Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    {{-- End Modal --}}

    {{-- Start Deskripsi --}}
    <div class="container max-w-full mx-auto mt-4">
      <div class="container mx-auto">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-3">
            <div>
              <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae sequi earum reiciendis voluptatum autem dicta facere nemo tempora, quas nulla a debitis nihil voluptatem tenetur fugiat sunt atque deserunt ex.</p>
            </div>
            <div>
              <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae sequi earum reiciendis voluptatum autem dicta facere nemo tempora, quas nulla a debitis nihil voluptatem tenetur fugiat sunt atque deserunt ex.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- End Deskprisi --}}


    {{-- Start Map --}}
    {{-- <div class="flex justify-center mt-8 ">
      <img src="{{ asset('assets/images/MAP.png') }}" class="w-[1144px] h-[407px] bg-emerald-900 bg-opacity-20 rounded-[20px]" alt="">
    </div>  --}}
    
    <div class="container mx-auto mt-12">
      <div class="grid sm:grid-cols-1 xl:grid-cols-2 gap-[150px]">
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


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
  $(document).ready(function () {
    // Function to toggle modal visibility
    function toggleModal(modalId) {
      const modal = document.getElementById(modalId);
      modal.classList.toggle('hidden');
    }

    // Attach click event to buttons with data-modal-toggle attribute
    $('[data-modal-toggle]').on('click', function () {
      const targetModalId = $(this).data('modal-target');
      toggleModal(targetModalId);
    });

    // Attach click event to close button within modal
    $('[data-modal-hide]').on('click', function () {
      const modalId = $(this).data('modal-hide');
      toggleModal(modalId);
    });
  });
</script>
    
  
</body>
</html>
