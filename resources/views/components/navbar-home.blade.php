<div class="h-screen flex flex-col md:flex-row">

    <!-- Column pertama -->
    <div class="md:w-[60%] p-6 flex-col">
        <div class="mb-8">
            <header class="absolute inset-x-0 top-0 z-50 " x-data="{ isOpen: false, isOpen2:false }">
                <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                    <div class="flex lg:flex-1">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Statistika </span>
                            <img class="h-[60px] w-auto" src="{{asset('img/Logo Statistika.png')}}" alt="Statistika UHO">
                        </a>
                    </div>
                    <div class="flex lg:hidden">
                        <button type="button" @click="isOpen = !isOpen" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:flex lg:gap-x-12">
                        <div class="relative">
                            <button type="button" @click="isOpen = !isOpen" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
                                Profile
                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="isOpen"
                                x-transition:enter="transition ease-out duration-100 transform"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75 transform"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95" class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                                <div class="p-4">
                                    <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                        <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.5c4.333 0 7.833 3.667 8 8.5-.167 4.833-3.667 8.5-8 8.5S4.167 17.833 4 13c.167-4.833 3.667-8.5 8-8.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-auto">
                                            <a href="/visi-misi" class="block font-semibold text-gray-900">
                                                Visi, Misi, & Tujuan
                                                <span class="absolute inset-0"></span>
                                            </a>
                                            <p class="mt-1 text-gray-600">Gambaran tentang tujuan jangka panjang institusi</p>
                                        </div>
                                    </div>
                                    <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                        <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.5c4.333 0 7.833 3.667 8 8.5-.167 4.833-3.667 8.5-8 8.5S4.167 17.833 4 13c.167-4.833 3.667-8.5 8-8.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-auto">
                                            <a href="/profile_lulusan" class="block font-semibold text-gray-900">
                                                Profile Lulusan
                                                <span class="absolute inset-0"></span>
                                            </a>
                                            <p class="mt-1 text-gray-600">Keahlian yang relevan dengan kebutuhan industri</p>
                                        </div>
                                    </div>
                                    <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                        <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.5c4.333 0 7.833 3.667 8 8.5-.167 4.833-3.667 8.5-8 8.5S4.167 17.833 4 13c.167-4.833 3.667-8.5 8-8.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-auto">
                                            <a href="/struktur_organisasi" class="block font-semibold text-gray-900">
                                                Struktur Organisasi
                                                <span class="absolute inset-0"></span>
                                            </a>
                                            <p class="mt-1 text-gray-600">Kepemimpinan dan peran-peran kunci</p>
                                        </div>
                                    </div>
                                    <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                        <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.5c4.333 0 7.833 3.667 8 8.5-.167 4.833-3.667 8.5-8 8.5S4.167 17.833 4 13c.167-4.833 3.667-8.5 8-8.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-auto">
                                            <a href="/dosen_pengajar" class="block font-semibold text-gray-900">
                                                Dosen Pengajar
                                                <span class="absolute inset-0"></span>
                                            </a>
                                            <p class="mt-1 text-gray-600">Informasi mengenai para pengajar</p>
                                        </div>
                                    </div>
                                    <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                        <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.5c4.333 0 7.833 3.667 8 8.5-.167 4.833-3.667 8.5-8 8.5S4.167 17.833 4 13c.167-4.833 3.667-8.5 8-8.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-auto">
                                            <a href="/kurikulum" class="block font-semibold text-gray-900">
                                                Kurikulum
                                                <span class="absolute inset-0"></span>
                                            </a>
                                            <p class="mt-1 text-gray-600">Rancangan atau kerangka kerja sistematis</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                                    <a href="https://youtu.be/YOiVU8A4CGQ?si=iaNndxbhRvsBvHZA" class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                                        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z" clip-rule="evenodd" />
                                        </svg>
                                        Watch Vidio
                                    </a>
                                    <a href="https://wa.me/6285322773994" class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                                        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                                        </svg>
                                        Contact Admin
                                    </a>
                                </div>
                            </div>
                        </div>

                        <a href="/kurikulum" class="text-sm font-semibold leading-6 text-gray-900">Kurikulum</a>
                        <div class="relative">
                            <button type="button" @click="isOpen2 = !isOpen2" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
                                Pendaftaran
                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="isOpen2"
                                x-transition:enter="transition ease-out duration-100 transform"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75 transform"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95" class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                                <div class="p-4">
                                    <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                        <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.5c4.333 0 7.833 3.667 8 8.5-.167 4.833-3.667 8.5-8 8.5S4.167 17.833 4 13c.167-4.833 3.667-8.5 8-8.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-auto">
                                            <a href="/form-asisten" class="block font-semibold text-gray-900">
                                                Pendaftaran Asisten
                                                <span class="absolute inset-0"></span>
                                            </a>
                                            <p class="mt-1 text-gray-600">Untuk mahasiswa yang ingin mendaftar sebagai asisten dosen atau asisten laboratorium di kampus.</p>
                                        </div>
                                    </div>
                                    <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                        <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.5c4.333 0 7.833 3.667 8 8.5-.167 4.833-3.667 8.5-8 8.5S4.167 17.833 4 13c.167-4.833 3.667-8.5 8-8.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-auto">
                                            <a href="/form-ta" class="block font-semibold text-gray-900">
                                                Pendaftaran Tujian Akhir
                                                <span class="absolute inset-0"></span>
                                            </a>
                                            <p class="mt-1 text-gray-600">Untuk mahasiswa yang akan menyelesaikan Tugas Akhir (skripsi) sebagai bagian dari syarat kelulusan. </p>
                                        </div>
                                    </div>
                                    <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                        <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.5c4.333 0 7.833 3.667 8 8.5-.167 4.833-3.667 8.5-8 8.5S4.167 17.833 4 13c.167-4.833 3.667-8.5 8-8.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-auto">
                                            <a href="/form-ta" class="block font-semibold text-gray-900">
                                                Pendaftaran Ujian Proposal
                                                <span class="absolute inset-0"></span>
                                            </a>
                                            <p class="mt-1 text-gray-600">Untuk mahasiswa dalam proses pendaftaran ujian proposal penelitian yang biasanya dilakukan sebelum memulai Tugas Akhir.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <a href="/mitra" class="text-sm font-semibold leading-6 pr-8 text-gray-900">Mitra</a>
                    </div>
                    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                        <!-- <a href="#" class="text-sm font-semibold leading-6  rounded-full ring ring-white ring-1 rounded lg:p-2 bg-white/20 transform hover:scale-105">Log in <span aria-hidden="true">&rarr;</span></a> -->
                    </div>
                    <div class="relative isolate">
                        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                        </div>
                    </div>
                </nav>
                <!-- Mobile menu, show/hide based on menu open state. -->
                <div class="lg:hidden" role="dialog" aria-modal="true" x-show="isOpen" @click.away="isOpen = false" x-transition>
                    <!-- Background backdrop, show/hide based on slide-over state. -->
                    <div class="fixed inset-0 z-10"></div>
                    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                        <div class="flex items-center justify-between">
                            <a href="#" class="-m-1.5 p-1.5">
                                <span class="sr-only">D3 Statistika</span>
                                <img class="h-8 w-auto" src="{{asset('img/Logo Statistika.png')}}" alt="">
                            </a>
                            <button type="button" @click="isOpen = !isOpen" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-500/10">
                                <div class="space-y-2 py-6" x-data="{ isOpen: false }">
                                    <div class="-mx-3">
                                        <!-- Tombol utama Product -->
                                        <button type="button" @click="isOpen = !isOpen" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" :aria-expanded="isOpen">
                                            Profile
                                            <!-- Icon expand/collapse -->
                                            <svg :class="{'rotate-180': isOpen, 'rotate-0': !isOpen}" class="h-5 w-5 flex-none transition-transform duration-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </button>

                                        <!-- Submenu Product, menggunakan x-show -->
                                        <div class="mt-2 space-y-2" id="disclosure-1" x-show="isOpen" x-cloak>
                                            <div class="mt-2 space-y-2" id="disclosure-1" x-show="isOpen" x-cloak>
                                                <a href="/visi-misi" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Visi, Misi, & Tujuan</a>
                                                <a href="/profile_lulusan" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Profile Lulusan</a>
                                                <a href="/profile_lulusan" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Struktur Organisasi</a>
                                                <a href="/dosen_pengajar" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Dosen Pengajar</a>
                                                <a href="/kurikulum" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Kurikulum</a>
                                            </div>
                                        </div>

                                        <!-- Link lainnya -->
                                        <a href="/kurikulum" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Kurikulum</a>
                                        <a href="/login" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Pendaftaran</a>
                                        <a href="/mitra" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Mitra</a>
                                    </div>

                                    <div class="py-6">
                                        <a href="/Page_Login" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </header>
        </div>
        <div class="flex-1 p-10 flex flex-col flex-grow mt-[180px] text-center lg:text-left items-left lg:items-left">
            <h1 class="mx-auto max-w-4xl font-display text-5xl font-medium tracking-tight text-slate-900 sm:text-7xl">Lulusan kami telah
                <span class="relative whitespace-nowrap text-blue-600"><svg aria-hidden="true" viewBox="0 0 418 42" class="absolute left-0 top-2/3 h-[0.58em] w-full fill-blue-300/70" preserveAspectRatio="none">
                        <path d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z"></path>
                    </svg><span class="relative">berhasil </span></span>berkontribusi
            </h1>
            <p class="mt-4 text-gray-600">Lulusan kami siap kerja dan profesional, dengan keterampilan analisis data yang sesuai kebutuhan industri.</p>
            <div class="mt-6 flex space-x-4">
                <div class="mt-10 flex justify-center gap-x-6"><a class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-slate-900 text-white hover:bg-slate-700 hover:text-slate-100 active:bg-slate-800 active:text-slate-300 focus-visible:outline-slate-900" variant="solid" color="slate" href="#">Selengkapnya</a><a class="group inline-flex ring-1 items-center justify-center rounded-full py-2 px-4 text-sm focus:outline-none ring-slate-200 text-slate-700 hover:text-slate-900 hover:ring-slate-300 active:bg-slate-100 active:text-slate-600 focus-visible:outline-blue-600 focus-visible:ring-slate-300" variant="outline" color="slate" href="https://youtu.be/YOiVU8A4CGQ?si=iaNndxbhRvsBvHZA"><svg aria-hidden="true" class="h-3 w-3 flex-none fill-blue-600 group-active:fill-current">
                            <path d="m9.997 6.91-7.583 3.447A1 1 0 0 1 1 9.447V2.553a1 1 0 0 1 1.414-.91L9.997 5.09c.782.355.782 1.465 0 1.82Z"></path>
                        </svg><span class="ml-3">Watch video</span></a></div>
            </div>
        </div>
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="relative isolate">
        </div>
    </div>

    <!-- Column kedua (Jajar Genjang untuk gambar) -->
    <div class="w-[40%] h-full relative">
        <div class="flex-col w-full h-full parallelogram overflow-hidden hidden md:block">
            <img src="{{asset('img/kegiatan-01.jpeg')}}" alt="Gambar di dalam jajar genjang" class="w-full h-full object-cover">
        </div>
    </div>
</div>