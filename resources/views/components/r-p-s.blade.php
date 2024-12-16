<div class="relative w-full h-[140px] bg-fixed bg-center shadow-inner bg-[url('../../../public/img/Bg/Auditorium.jpg')]">
    <div class="absolute inset-0 bg-opacity-50 flex items-center justify-center">
        <h1 class="text-black text-4xl font-semibold">Rencana Pembelajaran Semester</h1>
    </div>
</div>

<div class="container mx-auto">
    <div class="flex flex-col lg:flex-row items-end lg:items-start w-full max-w-screen-lg mx-auto pt-6 mb-6">

        <div class="lg:w-1/4 w-full flex justify-center lg:justify-start mb-6 pr-4 lg:mb-0 mx-5 px-5">
            <div class="overflow-x-auto space-y-1 py-4 text-sm">

                <div class="py-2">
                    <h2 class="text-left font-bold">Profile Kurikulum</h2>
                    <span class="block w-96 h-[2px] bg-blue-500 my-4"></span>
                </div>
                <ul class="space-y-2 text-gray-700">
                    <li class="hover:bg-blue-300 p-2 rounded"><a href="/landasan_kurikulum">Landasan Kurikulum</a></li>
                    <li class="hover:bg-blue-300 p-2 rounded"><a href="/visi-misi">Visi, Misi, Dan Tujuan</a></li>

                    <!-- Menu dengan Dropdown -->
                    <li class="relative group">
                        <button class=" cursor-pointer flex items-center justify-between w-full p-2 hover:bg-blue-300 rounded">
                            Hasil Evaluasi Kurikulum & Tracer Study
                            <span class="text-gray-500 pl-2">▼</span>
                        </button>
                        <!-- Dropdown Menu -->
                        <ul class="hidden group-hover:block bg-blue-300 rounded p-2 mt-1">
                            <li class="cursor-pointer p-2 hover:bg-blue-400 rounded"><a href="/tracer-study">Tracer Study</a></li>
                            <li class="p-2 hover:bg-blue-400 rounded"><a href="/evaluasi-kurikulum">Evaluasi Kurikulum</a></li>
                        </ul>
                    </li>

                    <li class="hover:bg-blue-300 p-2 rounded"><a href="/profile_lulusan">Profile Lulusan</a></li>
                    <li class="hover:bg-blue-300 p-2 rounded"><a href="/Rencana_Pembelajaran_Semester">Rencana Pembelajaran Semester</a></li>



                    <li class="hover:bg-blue-300 p-2 rounded"><a href="/struktur matkul">Struktur Matakuliah Dalam Kurikulum Program Studi Dan Masa Tempuh</a></li>
                </ul>

            </div>
        </div>

        <div class="lg:w-3/4 w-full text-justify space-y-2 p-4">
            <!-- Link Dowlnoad 1 -->
            <div class="p-6 max-w-4xl mx-auto bg-white shadow rounded-lg">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Rencana Pembelajaran Semester (RPS)</h2>
                <ul class="divide-y divide-gray-200">
                    <li class="flex items-center justify-between py-4">
                        <div class="pr-2">
                            <h3 class="text-lg font-medium text-gray-900">Mata kuliah Eksplorasi Data</h3>
                            <p class="text-sm text-gray-500">mencakup Capaian Pembelajaran Mata Kuliah (CPMK), tahapan belajar (Sub-CPMK), metode pembelajaran, dan rubrik penilaian.</p>
                        </div>
                        <a class="px-4 py-2 bg-[#3b82f6] text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:ring focus:ring-blue-300" href="{{asset('doc/pdf/RPS - 1.pdf') }}" target="_blank" class="hover:text-black">
                            Download
                        </a>
                    </li>
                    <li class="flex items-center justify-between py-4">
                        <div class="pr-2">
                            <h3 class="text-lg font-medium text-gray-900">Daftar mata kuliah per semester</h3>
                            <p class="text-sm text-gray-500">Metode Statistika I, Kalkulus, Rancangan Percobaan, dll. disediakan dengan bobot SKS, tetapi tidak ada penjelasan rinci mengenai RPS untuk mata kuliah tersebut dalam dokumen ini.</p>
                        </div>
                        <a class="px-4 py-2 bg-[#3b82f6] text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:ring focus:ring-blue-300" href="{{asset('doc/pdf/Matkul.pdf') }}" target="_blank" class="hover:text-black">
                            Download
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </div>
</div>

<div class="bg-white p-6 rounded-lg text-gray-800 w-full max-w-[1000px] mx-auto mt-2">
    <div class="bg-gray-100 p-6  rounded-lg p-4 flex items-center mt-8">
        <div class="flex-shrink-0">
            <img src="{{asset('img/svg_file/Icon_pdf_file.svg')}}" alt="PDF Icon" class="w-11 h-12">
        </div>
        <div class="ml-4">
            <div class="text-orange-500 font-semibold">PDF</div>
            <div class="text-gray-800 font-medium">
                Dokument Kurikulum D3 - Statistika FMIPA UHO 2024
            </div>
            <div class="text-gray-500 text-sm mt-1 p-1 flex">
                <span class="flex items-center px-1">
                    <img src="{{asset('img/svg_file/Gnome-dev-harddisk.svg')}}" alt="file Icon" class="w-5 h-4 pr-1">
                    <span>2000.200 KB</span>

                </span>
                <span class="flex items-center mt-1 px-1 py-1">
                    <img src="{{asset('img/svg_file/Icon_pdf_file.svg')}}" alt="file Icon" class="w-4 h-4 pr-1"> <span><a href="{{asset('doc/pdf/Kurikulum.pdf') }}" target="_blank" class="hover:text-black">Download</a></span>
                </span>
            </div>
        </div>
    </div>
</div>