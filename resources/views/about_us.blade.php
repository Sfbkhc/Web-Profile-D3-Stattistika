<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$Title}}</title>
    @include('components.head')
</head>

<body>
    <div class="min-h-screen flex flex-col">
        <x-navbar />
        <main class="container mx-auto my-10 p-6 bg-white rounded-lg shadow-lg">
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Profil Program Studi</h2>
                <p>
                    Program Studi D3 Statistika dirancang untuk menghasilkan tenaga di bidang statistika yang mampu memenuhi kebutuhan industri, pemerintah, dan masyarakat. Dengan kemajuan teknologi informasi dan kompleksitas data yang semakin meningkat, kebutuhan akan tenaga profesional yang terampil dalam pengolahan dan analisis data semakin mendesak.
                </p>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Tujuan Program Studi</h2>
                <ul class="list-disc list-inside">
                    <li>Terselenggaranya proses pembelajaran berkualitas dengan kurikulum mutakhir.</li>
                    <li>Terlaksananya penelitian terapan yang berfokus pada pengembangan metode statistika.</li>
                    <li>Terjalinya kemitraan strategis dengan industri dan institusi pemerintah.</li>
                </ul>
            </section>

            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Nilai Universitas</h2>
                <p>
                    Universitas Halu Oleo menerapkan nilai-nilai luhur dalam spirit sosio-kultural, yang mencakup kecerdasan spiritual, intelektual, lingkungan, sosial, dan kepemimpinan. Nilai-nilai ini diharapkan dapat membentuk mahasiswa menjadi individu yang tidak hanya terampil, tetapi juga berakhlak mulia dan peduli terhadap lingkungan sekitar.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold mb-4">Kontak</h2>
                <p>Untuk informasi lebih lanjut, silakan hubungi kami di: <a href="mailto:info@d3statistika.uho.ac.id" class="text-blue-600">info@d3statistika.uho.ac.id</a></p>
            </section>
        </main>

        <x-foother />
    </div>
</body>

</html>