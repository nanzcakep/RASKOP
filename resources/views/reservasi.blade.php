@extends('layouts.mainlayout')
@section('title','Reservasi')


{{-- content --}}
@section('content')

<div class="container mx-auto text-center p-[200px] relative">
    <h1 class="font-sans">
        <span class="text-2xl">Hai kamu, </span>
        <span class="text-4xl font-extrabold">cek reservasi disini !</span>
    </h1>    
    <div class="p-8">
        <form>   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-2 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-150 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kode reservasi" required>
                <button type="submit" class="text-white absolute end-5 bottom-2.5 bg-[#E08756] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
    </div>
</div>

<div class="container mx-auto">
    <div class="w-[700px] h-[253px] relative top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <div class="w-[700px] h-[253px] left-0 top-0 absolute bg-stone-50 rounded-[10px] shadow"></div>
        <div class="w-[187px] h-[193px] left-[30px] top-[30px] absolute bg-stone-50 rounded-[10px] shadow">
            <div class="left-[58px] top-0 absolute text-center text-black text-[70px] font-semibold font-['Poppins']">15</div>
            <div class="w-[23px] h-[23px] left-[20px] top-[150px] absolute">
                <div class="w-[15.33px] h-[15.33px] left-[3.83px] top-[3.83px] absolute rounded-full border-2 border-zinc-400"></div>
            </div>
            <div class="left-[50px] top-[150px] absolute text-zinc-400 text-[15px] font-semibold font-['Poppins']">10.30 - 13.30 PM </div>
            <div class="left-[60px] top-[97px] absolute text-zinc-400 text-3xl font-semibold font-['Poppins']">NOV</div>
        </div>
        <div class="left-[247px] top-[65px] absolute text-black text-[25px] font-semibold font-['Poppins']">#RASKOP01</div>
        <div class="w-[423px] h-[0px] left-[247px] top-[113px] absolute border-2 border-gray-500 border-opacity-25"></div>
        <div class="w-[130px] h-[38px] left-[540px] top-[65px] absolute">
            <div class="w-[130px] h-[38px] left-0 top-0 absolute bg-teal-500 bg-opacity-30 rounded-[10px]"></div>
            <div class="w-[130px] h-[38px] left-0 top-0 absolute text-center text-teal-500 text-[25px] font-semibold font-['Poppins']">SUCCESS</div>
        </div>
        <div class="left-[247px] top-[123px] absolute text-zinc-400 text-xl font-semibold font-['Poppins']">Customer</div>
        <div class="left-[580px] top-[123px] absolute text-zinc-600 text-xl font-semibold font-['Poppins']">AOBAMA</div>
        <div class="left-[247px] top-[158px] absolute text-zinc-400 text-xl font-semibold font-['Poppins']">Ruangan</div>
        <div class="left-[545px] top-[158px] absolute text-zinc-600 text-xl font-semibold font-['Poppins']">Ruangan Kopi</div>
    </div>
</div>



@endsection
{{-- endcontent --}}

{{-- footer --}}

{{-- endfooter --}}



</body>
<script>

</script>
</html>