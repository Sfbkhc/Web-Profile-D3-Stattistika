@extends('layout.app')
@section('content')
<!-- Clients -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="sm:w-1/2 xl:w-1/3 mx-auto text-center mb-6 md:mb-12">
        <h2 class="text-xl font-semibold md:text-2xl md:leading-tight text-gray-800">Telah dipercaya oleh beberapa instansi dan perusahaan hingga saat ini.</h2>
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 gap-3 lg:gap-6">
        <div class="p-4 md:p-7 bg-gray-100 rounded-lg">
            <img src="{{asset('img/pt-hajampo-removebg-preview.png')}}" alt="PT.Hajompo" class="py-6 lg-py-5 w-16 h-auto md-w-20 lg:w-24 mx-auto text-gary-800">
        </div>

        <div class="p-4 md:p-7 bg-gray-100 rounded-lg">
            <img src="{{asset('img/compressed/BPS_Provinsi-removebg-preview.svg')}}" alt="Polri NKRI" class="py-3 lg-py-5 w-16 h-auto md-w-20 lg:w-24 mx-auto text-gary-800">
        </div>

        <div class="p-4 md:p-7 bg-gray-100 pt-5 rounded-lg">
            <img src="{{asset('img/Logo_BKKBN_(2020).png')}}" alt="Polri NKRI" class="py-9 lg-py-5 w-16 h-auto md-w-20 lg:w-24 mx-auto text-gary-800">
        </div>

        <div class="p-4 md:p-7 bg-gray-100 rounded-lg">
            <img src="{{asset('img/pt_askes-removebg-preview.png')}}" alt="Polri NKRI" class="py-14 lg-py-5 w-16 h-auto md-w-20 lg:w-24 mx-auto text-gary-800">
        </div>

        <div class="p-4 md:p-7 bg-gray-100 rounded-lg">
            <img src="{{asset('img/anindya-removebg-preview.png')}}" alt="Polri NKRI" class="py-3 lg-py-5 w-16 h-auto md-w-20 lg:w-24 mx-auto text-gary-800">
        </div>

        <div class="p-4 md:p-7 bg-gray-100 rounded-lg">
            <img src="{{asset('img/Sulawesi_Tenggara.png')}}" alt="Polri NKRI" class="py-3 lg-py-5 w-16 h-auto md-w-20 lg:w-24 mx-auto text-gary-800">
        </div>

        <div class="p-4 md:p-7 bg-gray-100 rounded-lg">
            <img src="{{asset('img/UHO.png')}}" alt="Polri NKRI" class="py-14 lg-py-5 w-16 h-auto md-w-20 lg:w-24 mx-auto text-gary-800">
        </div>

        <div class="p-4 md:p-7 bg-gray-100 rounded-lg">
            <img src="{{asset('img/Logo_Universitas_Terbuka.svg')}}" alt="Polri NKRI" class="py-8 lg-py-5 w-16 h-auto md-w-20 lg:w-24 mx-auto text-gary-800">
        </div>

        <div class="p-4 md:p-7 bg-gray-100 rounded-lg">
            <img src="{{asset('img/Lambang_Kabupaten_Buton.png')}}" alt="Polri NKRI" class="py-3 lg-py-5 w-12 h-auto md-w-20 lg:w-24 mx-auto text-gary-800">
        </div>

        <div class="p-4 md:p-7 bg-gray-100 rounded-lg">
            <img src="{{asset('img/Insignia_of_the_Indonesian_National_Police.svg')}}" alt="Polri NKRI" class="py-3 lg-py-5 w-16 h-auto md-w-20 lg:w-24 mx-auto text-gary-800">

        </div>
    </div>
    <!-- End Grid -->
</div>
<!-- End Clients -->
@endsection