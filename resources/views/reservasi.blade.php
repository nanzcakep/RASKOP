@extends('layouts.mainlayout')
@section('title', 'Reservasi')


{{-- content --}}
@section('content')
<div x-data="reservasiData()">
    <div class="container mx-auto text-center p-[200px] relative">
        <h1 class="font-sans">
            <span class="text-2xl">Hai kamu, </span>
            <span class="text-4xl font-extrabold">cek reservasi disini !</span>
        </h1>
        <div class="p-8">
            <form action=""  x-on:submit.prevent="checkReservasi()">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-2 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        x-model="searchReservasi"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-150 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Kode reservasi" required>
                    <button type="submit"
                        class="text-white absolute end-5 bottom-2.5 bg-[#E08756] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div tabindex="-1"
        class="fixed top-0 left-0 right-0 z-40  w-full px-4 pt-5 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
        x-show="showModal" x-cloak
        >
        <div class="fixed top-0 left-0 right-0 bottom-0 backdrop-blur-sm bg-black/30"></div>
        <div class="mt-52 mx-auto max-w-md relative w-full max-h-full" x-show="showModal"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90"
            >
            <div class="container mx-auto"
            x-on:click.away="showModal = false"
            >
                <div class="w-[700px] h-[253px] relative top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="w-[700px] h-[253px] left-0 top-0 absolute bg-stone-50 rounded-[10px] shadow"></div>
                    <div class="w-[187px] h-[193px] left-[30px] top-[30px] absolute bg-stone-50 rounded-[10px] shadow">
                        <div
                            class="left-[58px] top-0 absolute text-center text-black text-[70px] font-semibold font-['Poppins']">
                            <span x-text="tanggalReservasi"></span>
                        </div>
                        <div class="w-[23px] h-[23px] left-[20px] top-[150px] absolute">
                            <div
                                class="w-[15.33px] h-[15.33px] left-[3.83px] top-[3.83px] absolute rounded-full border-2 border-zinc-400">
                            </div>
                        </div>
                        <div
                            class="left-[50px] top-[150px] absolute text-zinc-400 text-[15px] font-semibold font-['Poppins']">
                            <span x-text="`${jamMulaiReservasi}-${jamSelesaiReservasi}`">

                            </span>
                        </div>
                        <div class="left-[60px] top-[97px] absolute text-zinc-400 text-3xl font-semibold font-['Poppins']">
                            <span x-text="bulanReservasi"></span>
                        </div>
                    </div>
                    <div class="left-[247px] top-[65px] absolute text-black text-[25px] font-semibold font-['Poppins']">
                        #<span x-text="kodeReservasi"></span></div>
                    <div
                        class="w-[423px] h-[0px] left-[247px] top-[113px] absolute border-2 border-gray-500 border-opacity-25">
                    </div>
                    <div class="w-[130px] h-[38px] left-[540px] top-[65px] absolute">
                        <div id="bg-status-reservasi" class="w-[130px] h-[38px] left-0 top-0 absolute bg-opacity-30 rounded-[10px]">
                        </div>
                        <div
                            id="text-status-reservasi"
                            class="w-[130px] h-[38px] left-0 top-0 absolute text-center text-[25px] font-semibold font-['Poppins']">
                            <span x-text="statusReservasi"></span>
                        </div>
                    </div>
                    <div class="left-[247px] top-[123px] absolute text-zinc-400 text-xl font-semibold font-['Poppins']">
                        Customer
                    </div>
                    <div class="w-full left-[545px] top-[123px] absolute text-zinc-600 text-xl font-semibold font-['Poppins']">
                        <span x-text="customerReservasi"></span>
                    </div>
                    <div class="left-[247px] top-[158px] absolute text-zinc-400 text-xl font-semibold font-['Poppins']">
                        Ruangan
                    </div>
                    <div class="left-[545px] top-[158px] absolute text-zinc-600 text-xl font-semibold font-['Poppins']">
                        <span x-text="ruanganReservasi"></span>
                    </div>
                    {{-- make close button on bottom left --}}
                    <div class="bottom-1 right-1 absolute">
                        <button
                            class="text-white bg-teal-500 hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-teal-300 font-medium rounded-md text-sm px-4 py-2 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800"
                            @click="showModal = false">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- endcontent --}}

{{-- footer --}}

{{-- endfooter --}}



</body>
<script>
    const loadingConfigToast = {
    title: 'Please wait...',
    color: '#164138',
    position: 'topRight',
    overlay: true,
    image: "{{ asset('assets/images/puff.svg') }}",
    timeout: false,
    close: false,
    class: 'loadingrefresh',
    };
    function reservasiData(){
        return {
            showModal:true,
            searchReservasi:'',
            kodeReservasi:'',
            tanggalReservasi:'',
            bulanReservasi:'',
            jamMulaiReservasi:'',
            jamSelesaiReservasi:'',
            statusReservasi:'',
            statusColorReservasi:'',
            customerReservasi:'',
            ruanganReservasi:'',
            async checkReservasi(){
                if(this.searchReservasi == ''){
                    iziToast.error({
                        title: 'Error',
                        message: 'Kode reservasi tidak boleh kosong',
                        position: 'topRight'
                    });
                    return
                }
                try {
                    iziToast.show(loadingConfigToast);
                    let response = await axios.get(`http://127.0.0.1:8000/api/cek-reservasi?kode=${this.searchReservasi}`)
                    let responseJson = response.data
                    console.log(response)
                    if(responseJson.data){
                        let dataReservasi = responseJson.data[0]
                        let splitTanggal = dataReservasi.tanggal.split('-')
                        this.kodeReservasi = dataReservasi.kode_reservasi
                        this.tanggalReservasi = splitTanggal[splitTanggal.length - 1]
                        this.bulanReservasi = MONTH_SHORT_NAMES[parseInt(splitTanggal[1])]
                        let jamMulai = dataReservasi.jam_mulai.split(':')
                        this.jamMulaiReservasi = `${jamMulai[0]}.${jamMulai[1]}`
                        let jamSelesai = dataReservasi.jam_selesai.split(':')
                        this.jamSelesaiReservasi = `${jamSelesai[0]}.${jamSelesai[1]}`
                        this.statusReservasi = dataReservasi.status
                        this.ruanganReservasi = dataReservasi.ruangan.nama_ruangan
                        this.customerReservasi = dataReservasi.pelanggan.nama
                        if(dataReservasi.status == 'pending'){
                            document.getElementById('bg-status-reservasi').classList.add('bg-amber-500')
                            document.getElementById('text-status-reservasi').classList.add('text-amber-500')
                        }else if(dataReservasi.status == 'success'){
                            document.getElementById('bg-status-reservasi').classList.add('bg-teal-500')
                            document.getElementById('text-status-reservasi').classList.add('text-teal-500')
                        }else if(dataReservasi.status == 'cancel'){
                            document.getElementById('bg-status-reservasi').classList.add('bg-red-500')
                            document.getElementById('text-status-reservasi').classList.add('text-red-500')
                        }
                        this.showModal = true
                        iziToast.hide({}, document.getElementsByClassName('loadingrefresh')[0])
                        iziToast.success({
                            title: 'Success',
                            message: 'Reservasi ditemukan',
                            position: 'topRight'
                        });
                    }else{
                        iziToast.hide({}, document.getElementsByClassName('loadingrefresh')[0])
                        iziToast.error({
                            title: 'Error',
                            message: 'Reservasi tidak ditemukann',
                            position: 'topRight'
                        });
                    }
                    
                } catch (xhr) {
                    let response = xhr.response
                    console.log(xhr)
                    iziToast.hide({}, document.getElementsByClassName('loadingrefresh')[0])
                    iziToast.error({
                        title: 'Error',
                        message: 'Reservasi tidak ditemukan',
                        position: 'topRight'
                    });
                }
            }
        }
    }
</script>

</html>
