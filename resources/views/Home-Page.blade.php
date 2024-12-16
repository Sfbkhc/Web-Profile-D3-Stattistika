<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-head></x-head>
</head>

<body class="flex h-full flex-col">

    <main>
        <x-navbar-home />
        <div class="w-full max-w-5xl mx-auto px-4 md:px-6 py-24" id="mitra">
            <div class="text-center">
                <p class="font-display text-base text-slate-900">Telah dipercaya oleh beberapa perusahaan hingga saat ini.</p>

                <!-- Logo Carousel animation -->
                <div
                    x-data="{}"
                    x-init="$nextTick(() => {
                        let ul = $refs.logos;
                        ul.insertAdjacentHTML('afterend', ul.outerHTML);
                        ul.nextSibling.setAttribute('aria-hidden', 'true');
                    })"
                    class="w-full mt-4 inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
                    <ul class=" flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
                        <li>
                            <img src="{{asset('img/Logo_Universitas_Terbuka.svg')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="Universitas Terbuka" />
                        </li>
                        <li>
                            <img src="{{asset('img/Logo-Kementerian-Pekerjaan-Umum-768x512.jpg')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="PUPR" />
                        </li>
                        <li>
                            <img src="{{asset('img/anindya.jpg')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="PT Anindya" />
                        </li>
                        <li>
                            <img src="{{asset('img/Polri_Logo.svg')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="Polri" />
                        </li>
                        <li>
                            <img src="{{asset('img/pt_askes-removebg-preview.png')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="Polri" />
                        </li>
                        <li>
                            <img src="{{asset('img/Lambang_Kabupaten_Buton.png')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="PEMDA BUTON" />
                        </li>
                        <li>
                            <img src="{{asset('img/compressed/BPS_Provinsi-removebg-preview.svg')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="BPS" />
                        </li>
                        <li>
                            <img src="{{asset('img/Logo_BKKBN_(2020).png')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="BKKBN" />
                        </li>
                        <li>
                            <img src="{{asset('img/pt-hajampo.jpg')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="PT Hajompo" />
                        </li>
                        <li>
                            <img src="{{asset('img/Logo_Universitas_Terbuka.svg')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="Universitas Terbuka" />
                        </li>
                        <li>
                            <img src="{{asset('img/Logo-Kementerian-Pekerjaan-Umum-768x512.jpg')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="PUPR" />
                        </li>
                        <li>
                            <img src="{{asset('img/anindya.jpg')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="PT Anindya" />
                        </li>
                        <li>
                            <img src="{{asset('img/Polri_Logo.svg')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="Polri" />
                        </li>
                        <li>
                            <img src="{{asset('img/Lambang_Kabupaten_Buton.png')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="PEMDA BUTON" />
                        </li>
                        <li>
                            <img src="{{asset('img/compressed/BPS_Provinsi-removebg-preview.svg')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="BPS" />
                        </li>
                        <li>
                            <img src="{{asset('img/Logo_BKKBN_(2020).png')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="BKKBN" />
                        </li>
                        <li>
                            <img src="{{asset('img/pt-hajampo.jpg')}}" class="h-24 w-24 object-contain animate-slide" loading="lazy" decoding="async" alt="PT Hajompo" />
                        </li>
                    </ul>

                </div>
                <!-- End: Logo Carousel animation -->

            </div>

        </div>

        <!-- section informasi benefit  -->
        <section id="features" aria-label="Features for running your books" class="relative overflow-hidden bg-blue-600 pb-28 pt-20 sm:py-32"><img alt="" loading="lazy" width="2245" height="1636" decoding="async" data-nimg="1" class="absolute left-1/2 top-1/2 max-w-none translate-x-[-44%] translate-y-[-42%]" style="color:transparent" src="{{asset('img/background-features.5f7a9ac9.jpg')}}">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
                <div class="max-w-2xl md:mx-auto md:text-center xl:max-w-none">
                    <h2 class="font-display text-3xl tracking-tight text-white sm:text-4xl md:text-5xl">Semua yang kamu butuhkan</h2>
                    <p class="mt-6 text-lg tracking-tight text-blue-100">Bagian-bagian ini memastikan mahasiswa memiliki keterampilan analisis data yang kuat dan siap menghadapi tantangan industri</p>
                </div>
                <div class="mt-16 grid grid-cols-1 items-center gap-y-2 pt-10 sm:gap-y-6 md:mt-20 lg:grid-cols-12 lg:pt-0">

                    <div class="-mx-4 flex overflow-x-auto pb-4 sm:mx-0 sm:overflow-visible sm:pb-0 lg:col-span-5">

                        <div class="relative z-10 flex gap-x-4 whitespace-nowrap px-4 sm:mx-auto sm:px-0 lg:mx-0 lg:block lg:gap-x-0 lg:gap-y-1 lg:whitespace-normal" role="tablist" aria-orientation="horizontal">
                            <!-- <div class="absolute inset-x-0 bottom-0 bg-white/10 ring-1 ring-inset ring-white/10 sm:rounded-t-xl block lg:hidden"></div> -->
                            <div class="group relative rounded-full px-4 py-1 lg:rounded-l-xl lg:rounded-r-none lg:p-6 hover:bg-white/10 lg:hover:bg-white/5" id="matematikaDiv">
                                <h3>
                                    <button class="font-display text-lg ui-not-focus-visible:outline-none text-blue-600 lg:text-white" id="tab-matematika" role="tab" aria-selected="true" tabindex="0" aria-controls="tabpanel-matematika" onclick="activateButton(this)">
                                        <span class="absolute inset-0 rounded-full lg:rounded-l-xl lg:rounded-r-none"></span>Matematika Dasar
                                    </button>
                                </h3>
                                <p class="mt-2 hidden text-sm lg:block text-white">Fondasi matematika yang digunakan dalam analisis statistik.</p>
                            </div>
                            <div class="group relative rounded-full px-4 py-1 lg:rounded-l-xl lg:rounded-r-none lg:p-6 hover:bg-white/10 lg:hover:bg-white/5" id="statistikaDiv">
                                <h3>
                                    <button class="font-display text-lg ui-not-focus-visible:outline-none text-blue-600 lg:text-white" id="tab-statistika" role="tab" aria-selected="false" tabindex="-1" aria-controls="tabpanel-statistika" onclick="activateButton(this)">
                                        <span class="absolute inset-0 rounded-full lg:rounded-l-xl lg:rounded-r-none "></span>Statistika Deskriptif
                                    </button>
                                </h3>
                                <p class="mt-2 hidden text-sm lg:block text-blue-100 group-hover:text-white">Pengumpulan, penyajian, dan interpretasi data secara deskriptif.</p>
                            </div>
                            <div class="group relative rounded-full px-4 py-1 lg:rounded-l-xl lg:rounded-r-none lg:p-6 hover:bg-white/10 lg:hover:bg-white/5 id=" analisisDiv">
                                <h3>
                                    <button class="font-display text-lg ui-not-focus-visible:outline-none text-blue-100 hover:text-white lg:text-white" id="tab-analisis" role="tab" aria-selected="false" tabindex="-1" aria-controls="tabpanel-analisis" onclick="activateButton(this)">
                                        <span class="absolute inset-0 rounded-full lg:rounded-l-xl lg:rounded-r-none"></span>Analisis Data
                                    </button>
                                </h3>
                                <p class="mt-2 hidden text-sm lg:block text-blue-100 group-hover:text-white">Penggunaan perangkat lunak statistik untuk memproses dan menganalisis data.</p>
                            </div>
                            <div class="group relative rounded-full px-4 py-1 lg:rounded-l-xl lg:rounded-r-none lg:p-6 hover:bg-white/10 lg:hover:bg-white/5" id="komputasiDiv">
                                <h3>
                                    <button class="font-display text-lg ui-not-focus-visible:outline-none text-blue-100 hover:text-white lg:text-white" id="tab-komputasi" role="tab" aria-selected="false" tabindex="-1" aria-controls="tabpanel-komputasi" onclick="activateButton(this)">
                                        <span class="absolute inset-0 rounded-full lg:rounded-l-xl lg:rounded-r-none"></span>Komputasi Statistika
                                    </button>
                                </h3>
                                <p class="mt-2 hidden text-sm lg:block text-blue-100 group-hover:text-white">Penggunaan teknologi untuk mempermudah pengolahan data.</p>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-7">
                        <div class="relative sm:px-6 lg:hidden">
                            <div class="absolute -inset-x-4 bottom-[-4.25rem] top-[-6.5rem] bg-white/10 ring-1 ring-inset ring-white/10 sm:inset-x-0 sm:rounded-t-xl"></div>
                            <p class="relative mx-auto max-w-2xl text-base text-white sm:text-center">Bagian-bagian ini memastikan mahasiswa memiliki keterampilan analisis data yang kuat dan siap menghadapi tantangan industri.</p>
                        </div>
                        <div class="mt-10 w-[45rem] overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 sm:w-auto lg:mt-0 lg:w-[67.8125rem]">
                            <!-- Tab Panels -->
                            <div id="tabpanel-matematika" role="tabpanel" tabindex="0" aria-labelledby="tab-matematika" aria-selected="true">
                                <p class="relative mx-auto max-w-2xl text-base text-white sm:text-center">Fondasi matematika yang digunakan dalam analisis statistik.</p>
                                <div class="mt-10 w-[45rem] overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 sm:w-auto lg:mt-0 lg:w-[67.8125rem]">
                                    <img alt="Grafik yang menunjukkan data XYZ" fetchpriority="high" width="2174" height="1464" decoding="async" data-nimg="1" class="w-full" sizes="(min-width: 1024px) 67.8125rem, (min-width: 640px) 100vw, 45rem" src="{{asset('img/frequences_distribution.png')}}">
                                </div>
                            </div>

                            <div id="tabpanel-statistika" role="tabpanel" tabindex="-1" hidden aria-labelledby="tab-statistika">
                                <p class="relative mx-auto max-w-2xl text-base text-white sm:text-center">Pengumpulan, penyajian, dan interpretasi data secara deskriptif.</p>
                                <div class="mt-10 w-[45rem] overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 sm:w-auto lg:mt-0 lg:w-[67.8125rem]">
                                    <img alt="Grafik yang menunjukkan data XYZ" fetchpriority="high" width="2174" height="1464" decoding="async" data-nimg="1" class="w-full" sizes="(min-width: 1024px) 67.8125rem, (min-width: 640px) 100vw, 45rem" src="{{asset('img/flipchart-3614771_1920.png')}}">
                                </div>
                            </div>

                            <div id="tabpanel-analisis" role="tabpanel" tabindex="-1" hidden aria-labelledby="tab-analisis">
                                <p class="relative mx-auto max-w-2xl text-base text-white sm:text-center">Penggunaan perangkat lunak statistik untuk memproses dan menganalisis data.</p>
                                <div class="mt-10 w-[45rem] overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 sm:w-auto lg:mt-0 lg:w-[67.8125rem]">
                                    <img alt="Grafik yang menunjukkan data XYZ" fetchpriority="high" width="2174" height="1464" decoding="async" data-nimg="1" class="w-full" sizes="(min-width: 1024px) 67.8125rem, (min-width: 640px) 100vw, 45rem" src="{{asset('img/spss-Download-SPSS.avif')}}">
                                </div>
                            </div>

                            <div id="tabpanel-komputasi" role="tabpanel" tabindex="-1" hidden aria-labelledby="tab-komputasi">
                                <p class="relative mx-auto max-w-2xl text-base text-white sm:text-center">Penggunaan teknologi untuk mempermudah pengolahan data.</p>
                                <div class="mt-[-100px] w-[45rem] overflow-hidden rounded-xl bg-slate-50 shadow-xl shadow-blue-900/20 sm:w-auto lg:mt-0 lg:w-[67.8125rem]">
                                    <img alt="Grafik yang menunjukkan data XYZ" fetchpriority="high" width="2174" height="1464" decoding="async" data-nimg="1" class="w-full" sizes="(min-width: 1024px) 67.8125rem, (min-width: 640px) 100vw, 45rem" src="{{asset('img/Visualisasi-Data-Menggunakan-Google-Data-Studio-.jpeg')}}">
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

                <script>
                    const tabs = document.querySelectorAll('[role="tab"]');
                    const tabPanels = document.querySelectorAll('[role="tabpanel"]');

                    tabs.forEach(tab => {
                        tab.addEventListener('click', () => {
                            const selectedPanel = document.getElementById(tab.getAttribute('aria-controls'));
                            console.log(selectedPanel);
                            // Sembunyikan semua tab panel
                            tabPanels.forEach(panel => {
                                panel.setAttribute('hidden', true);
                                panel.setAttribute('tabindex', '-1');
                            });

                            // Tampilkan tab panel yang dipilih
                            selectedPanel.removeAttribute('hidden');
                            selectedPanel.setAttribute('tabindex', '0');

                            // Perbarui status pilihan tab
                            tabs.forEach(t => {
                                t.setAttribute('aria-selected', 'false');
                                t.tabIndex = -1;
                            });
                            tab.setAttribute('aria-selected', 'true');
                            tab.tabIndex = 0;
                        });
                    });

                    function activateButton(button) {
                        // Dapatkan elemen div berdasarkan ID button
                        const buttonId = button.id.replace('tab-', '');
                        const targetDiv = document.getElementById(buttonId + 'Div');

                        // Hapus kelas dari semua tombol dan div lain
                        const allButtons = document.querySelectorAll('button[role="tab"]');
                        const allDivs = document.querySelectorAll('.group');

                        allButtons.forEach(btn => {
                            btn.classList.remove('text-white');
                            btn.classList.add('text-white');
                            btn.setAttribute('aria-selected', 'false');
                        });

                        allDivs.forEach(div => {
                            div.classList.remove('bg-white/10', 'lg:bg-white/10');
                        });

                        // Tambahkan kelas pada button yang dipilih
                        button.classList.remove('text-white');
                        button.classList.add('text-white');
                        button.setAttribute('aria-selected', 'true');

                        // Tambahkan kelas pada div yang sesuai
                        targetDiv.classList.add('bg-white/10', 'lg:bg-white/10');
                    }
                </script>
            </div>
            </div>
        </section>

        <section class="py-24 relative">
            <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
                <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
                    <div
                        class="w-full justify-center items-start gap-6 grid sm:grid-cols-2 grid-cols-1 lg:order-first order-last">
                        <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                            <img class=" rounded-xl object-cover" src="{{asset('img/Kegiatan pkl1.jpeg')}}" alt="about Us image" />
                        </div>
                        <img class="sm:ml-0 ml-auto rounded-xl object-cover" src="{{asset('img/kegiatan-01.jpeg')}}"
                            alt="about Us image" />

                    </div>
                    <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                        <div class="w-full flex-col justify-center items-start gap-8 flex">
                            <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                                <h2
                                    class="text-gray-900 text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                                    Membangun Keberhasilan Bersama dalam Dunia Statistika</h2>
                                <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                                    Melalui kerja sama dan bimbingan yang berkelanjutan, kami memastikan setiap mahasiswa memiliki bekal pengetahuan dan keterampilan yang dibutuhkan untuk sukses dalam dunia statistika yang dinamis dan terus berkembang.</p>
                            </div>
                            <div class="w-full lg:justify-start justify-center items-center sm:gap-10 gap-5 inline-flex">
                                <div class="flex-col justify-start items-start inline-flex">
                                    <h3 class="text-gray-900 text-4xl font-bold font-manrope leading-normal">10k+</h3>
                                    <h6 class="text-gray-500 text-base font-normal leading-relaxed">Lulusan</h6>
                                </div>
                                <div class="flex-col justify-start items-start inline-flex">
                                    <h4 class="text-gray-900 text-4xl font-bold font-manrope leading-normal">1200+</h4>
                                    <h6 class="text-gray-500 text-base font-normal leading-relaxed">Mahasiswa Aktif</h6>
                                </div>
                                <div class="flex-col justify-start items-start inline-flex">
                                    <h4 class="text-gray-900 text-4xl font-bold font-manrope leading-normal">10+</h4>
                                    <h6 class="text-gray-500 text-base font-normal leading-relaxed">Mitra Kerja Sama</h6>
                                </div>
                            </div>
                        </div>
                        <button
                            class="sm:w-fit w-full px-3.5 py-2 bg-indigo-600 hover:bg-indigo-650 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                            <span class="px-1.5 text-white text-sm font-medium leading-6"><a href="/profile_lulusan">Profile</a></span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section id="get-started-today" class="relative overflow-hidden bg-blue-600 py-32"><img alt="Testimoni" loading="lazy" width="2347" height="1244" decoding="async" data-nimg="1" class="absolute left-1/2 top-1/2 max-w-none -translate-x-1/2 -translate-y-1/2" style="color:transparent" src="{{asset('img/Bg/background-call-to-action.6a5a5672.jpg')}}">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
                <div class="mx-auto max-w-lg text-center">
                    <h2 class="font-display text-3xl tracking-tight text-white sm:text-4xl"></h2>
                    <p class="mt-4 text-lg tracking-tight text-white">Statistika bukan hanya tentang angka, tapi tentang memahami cerita di balik data dan mengambil keputusan yang bijaksana."</p><a class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-white text-slate-600 hover:bg-blue-100 active:bg-blue-200 active:text-slate-600 focus-visible:outline-white mt-10" color="white" variant="solid" href="#testimoni">Kata Alumni Kami</a>
                </div>
            </div>
        </section>



        <section id="testimonials" aria-label="What our customers are saying" class="bg-slate-100 py-20 sm:py-32">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-2xl md:text-center">
                    <h2 class="font-display text-3xl tracking-tight text-slate-900 sm:text-4xl">Testimoni</h2>
                    <p class="mt-4 text-lg tracking-tight text-slate-700">Inspirasi dari Mereka yang Telah Berkembang Bersama Kami</p>
                </div>
                <ul role="list" class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:gap-8 lg:mt-20 lg:max-w-none lg:grid-cols-3">
                    <li>
                        <ul role="list" class="flex flex-col gap-y-6 sm:gap-y-8">
                            <li>
                                <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10"><svg aria-hidden="true" width="105" height="78" class="absolute left-6 top-6 fill-slate-100">
                                        <path d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z"></path>
                                    </svg>
                                    <blockquote class="relative">
                                        <p class="text-lg tracking-tight text-slate-900">"Kuliah di jurusan Statistika memberikan saya keterampilan yang sangat diperlukan di era digital ini. Data adalah kekuatan, dan jurusan ini membuat saya lebih percaya diri dalam mengolah dan menganalisis data."</p>
                                    </blockquote>
                                    <figcaption class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                        <div>
                                            <div class="font-display text-base text-slate-900">Budi Hartanto</div>
                                            <div class="mt-1 text-sm text-slate-500">Angkatan 2022</div>
                                        </div>
                                        <div class="overflow-hidden rounded-full bg-slate-50"><img alt="" loading="lazy" width="56" height="56" decoding="async" data-nimg="1" class="h-14 w-14 object-cover" style="color:transparent" src="{{asset('img/person/justin.png')}}"></div>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10"><svg aria-hidden="true" width="105" height="78" class="absolute left-6 top-6 fill-slate-100">
                                        <path d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z"></path>
                                    </svg>
                                    <blockquote class="relative">
                                        <p class="text-lg tracking-tight text-slate-900">"Belajar di Statistika membuat saya melihat dunia dari perspektif data. Analisis yang kami pelajari benar-benar mempersiapkan kami untuk karier di bidang riset dan bisnis."</p>
                                    </blockquote>
                                    <figcaption class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                        <div>
                                            <div class="font-display text-base text-slate-900">Ahmad Ridwan</div>
                                            <div class="mt-1 text-sm text-slate-500">Mahasiswa Angkatan 2020</div>
                                        </div>
                                        <div class="overflow-hidden rounded-full bg-slate-50"><img alt="" loading="lazy" width="56" height="56" decoding="async" data-nimg="1" class="h-14 w-14 object-cover" style="color:transparent" src="{{asset('img/person/budi.png')}}"></div>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul role=" list" class="flex flex-col gap-y-6 sm:gap-y-8">
                            <li>
                                <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10"><svg aria-hidden="true" width="105" height="78" class="absolute left-6 top-6 fill-slate-100">
                                        <path d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z"></path>
                                    </svg>
                                    <blockquote class="relative">
                                        <p class="text-lg tracking-tight text-slate-900">"Jurusan Statistika membantu saya memahami bagaimana data dapat digunakan untuk mengambil keputusan yang tepat. Dosen-dosennya sangat mendukung dan selalu memberikan contoh-contoh kasus nyata yang relevan."</p>
                                    </blockquote>
                                    <figcaption class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                        <div>
                                            <div class="font-display text-base text-slate-900">Rina Saputri</div>
                                            <div class="mt-1 text-sm text-slate-500">Mahasiswa Angkatan 2023</div>
                                        </div>
                                        <div class="overflow-hidden rounded-full bg-slate-50"><img alt="" loading="lazy" width="56" height="56" decoding="async" data-nimg="1" class="h-14 w-14 object-cover" style="color:transparent" src="{{asset('img/person/ubu.png')}}"></div>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10"><svg aria-hidden="true" width="105" height="78" class="absolute left-6 top-6 fill-slate-100">
                                        <path d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z"></path>
                                    </svg>
                                    <blockquote class="relative">
                                        <p class="text-lg tracking-tight text-slate-900">"Belajar di Statistika membuat saya melihat dunia dari perspektif data. Analisis yang kami pelajari benar-benar mempersiapkan kami untuk karier di bidang riset dan bisnis."</p>
                                    </blockquote>
                                    <figcaption class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                        <div>
                                            <div class="font-display text-base text-slate-900">Erin Maulana</div>
                                            <div class="mt-1 text-sm text-slate-500">Mahasiswa Angkatan 2021</div>
                                        </div>
                                        <div class="overflow-hidden rounded-full bg-slate-50"><img alt="" loading="lazy" width="56" height="56" decoding="async" data-nimg="1" class="h-14 w-14 object-cover" style="color:transparent" src="{{asset('img/person/erin.png')}}"></div>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul role="list" class="flex flex-col gap-y-6 sm:gap-y-8">
                            <li>
                                <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10"><svg aria-hidden="true" width="105" height="78" class="absolute left-6 top-6 fill-slate-100">
                                        <path d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z"></path>
                                    </svg>
                                    <blockquote class="relative">
                                        <p class="text-lg tracking-tight text-slate-900">"Saya awalnya khawatir tentang kesulitan dalam memahami statistik, tetapi di sini saya merasa terbantu karena materi disampaikan dengan cara yang sederhana dan jelas."</p>
                                    </blockquote>
                                    <figcaption class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                        <div>
                                            <div class="font-display text-base text-slate-900">Dewi Lestari</div>
                                            <div class="mt-1 text-sm text-slate-500">Mahasiswa Angkatan 2019</div>
                                        </div>
                                        <div class="overflow-hidden rounded-full bg-slate-50"><img alt="" loading="lazy" width="56" height="56" decoding="async" data-nimg="1" class="h-14 w-14 object-cover" style="color:transparent" src="{{asset('img/person/yeni.png')}}"></div>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10"><svg aria-hidden="true" width="105" height="78" class="absolute left-6 top-6 fill-slate-100">
                                        <path d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z"></path>
                                    </svg>
                                    <blockquote class="relative">
                                        <p class="text-lg tracking-tight text-slate-900">"Dosen-dosen di sini tidak hanya mengajarkan teori, tetapi juga bagaimana mengaplikasikan ilmu statistik dalam kehidupan sehari-hari. Saya merasa sangat siap menghadapi dunia kerja."</p>
                                    </blockquote>
                                    <figcaption class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                        <div>
                                            <div class="font-display text-base text-slate-900">Siti Marlina</div>
                                            <div class="mt-1 text-sm text-slate-500">Mahasiswa Angkatan 2021</div>
                                        </div>
                                        <div class="overflow-hidden rounded-full bg-slate-50"><img alt="" loading="lazy" width="56" height="56" decoding="async" data-nimg="1" class="h-14 w-14 object-cover" style="color:transparent" src="{{asset('img/person/marlina.png')}}"></div>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>

        <x-blog-section />

        <x-foother />
    </main>


</body>

</html>