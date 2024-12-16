<div class="bg-blue-500 shadow-md hidden md:block ">
    <div class="container mx-auto flex items-center justify-around p-2 text-xs">
        <div class="flex space-x-4 ">
            <a href="#" class="text-white hover:text-black">Siakad UHO</a>
            <a href="#" class="text-white hover:text-black">IT Center</a>
            <a href="#" class="text-white hover:text-black">Library</a>
            <a href="#" class="text-white hover:text-black">Research</a>
            <a href="#" class="text-white hover:text-black">Arsip Berita</a>
        </div>
        <div class="flex items-center justify-end  w-2/4 px-2">
            <!-- <div class="relative">
                <input
                    type="text"
                    placeholder="Kata kunci ..."
                    class="border border-gray-300 rounded-md py-1 px-8 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    onfocus="this.placeholder=''; document.getElementById('search-icon').style.display = 'none';"
                    onblur="this.placeholder='Kata kunci ...'; if (this.value === '') { document.getElementById('search-icon').style.display = 'flex'; }" />
                <span id="search-icon" class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-500">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17a6 6 0 100-12 6 6 0 000 12zm6 0l4 4m-4-4l-4-4" />
                    </svg>
                </span>
            </div> -->

            <a href="#" class="text-white hover:text-black">Telepon: 0401-3190105 | Fax: 0401-3194108 </a>
            <a href="www.uho.ac.id/tentang" class="text-white hover:text-black">info@uho.ac.id</a>
            <div class="flex space-x-2 items-center pl-4">
                <img src="{{asset('img/svg_file/582px-Flag_of_the_United_Kingdom_Square.svg.png')}}" alt="English" class=" rounded-full w-6 h-6" /><span class="text-white font-medium text-base">EN</span>
                <img src="{{asset('img/svg_file/Flag_of_Indonesia_(bordered).svg')}}" class="roune w-6 h-6" /><span class="text-white font-medium text-base">ID</span>
            </div>
        </div>
    </div>
</div>

<div class="bg-white">
    <header class="absolute inset-x-0 top-0 z-50 relative " x-data="{ isOpen: false, isOpen2: false }">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">Statistika </span>
                    <img class="h-[60px] w-auto" src="{{asset('img/Logo Statistika.png')}}" alt="Statistika UHO">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" @click="isOpen = !isOpen" class="ml-[325px] md:ml-[570px] inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
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
                <a href="/profile_lulusan" class="text-sm font-semibold leading-6 text-gray-900">Tentang Kami</a>
                <a href="/mitra" class="text-sm font-semibold leading-6 text-gray-900">Mitra</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="/login" class="text-sm font-semibold leading-6  rounded-full ring ring-white ring-1 rounded lg:p-2 bg-white/20 transform hover:scale-105">Log in <span aria-hidden="true">&rarr;</span></a>
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
                    <a href="/" class="-m-1.5 p-1.5">
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