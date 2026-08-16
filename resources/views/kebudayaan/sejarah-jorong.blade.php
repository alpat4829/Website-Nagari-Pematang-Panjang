{{-- resources/views/kebudayaan/sejarah-jorong.blade.php --}}
@extends('layouts.app')

@section('title', 'Sejarah 11 Jorong')

@section('content')
<x-page-header
    title="Sejarah 11 Jorong"
    subtitle="Asal-usul dan kisah di balik nama sebelas jorong yang membentuk Nagari Pematang Panjang"
    image="images/images/lokasistrategis.jpg"
/>

<div class="bg-gray-50 min-h-screen">

    {{-- Intro Section --}}
    <div class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="text-center max-w-3xl mx-auto">
                <p class="font-cursive text-green-600 text-lg mb-2">Asal-Usul Sebelas Jorong</p>
                <h2 class="text-3xl font-black text-gray-900 mb-4">Nagari Pematang Panjang</h2>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Setiap jorong di Nagari Pematang Panjang menyimpan sejarah dan makna tersendiri yang menjadi
                    identitas unik kawasan tersebut. Nama-nama jorong ini lahir dari cerita, kondisi alam, dan
                    peristiwa yang dialami oleh masyarakat turun-temurun.
                </p>

                {{-- Peta mini jorong / badges --}}
                <div class="flex flex-wrap gap-2 justify-center mt-8">
                    @php $jorongList = ['Koran','Pondok Jago','Kambuik Koman','Koto Tangah','Duri','Parak Gadang','Koman Kaciak','Sitampung','Kalumpang','Pale','Limau Sundai']; @endphp
                    @foreach($jorongList as $i => $j)
                    <a href="#jorong-{{ $i+1 }}"
                        class="flex items-center gap-1.5 px-3 py-1.5 bg-amber-50 border border-amber-200 text-amber-800 rounded-full text-xs font-semibold hover:bg-amber-100 transition-colors">
                        <span class="w-4 h-4 bg-amber-500 text-white rounded-full flex items-center justify-center text-[10px] font-bold">{{ $i+1 }}</span>
                        {{ $j }}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Jorong Cards --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

        @php
        $jorongData = [
            [
                'nama'    => 'Koran',
                'warna'   => ['from-amber-500','to-yellow-600','ring-amber-200','bg-amber-50','text-amber-800','border-amber-200','bg-amber-500'],
                'sejarah' => 'Istilah <em>"koran"</em> merujuk pada kosakata penduduk lokal yang berarti <strong>"tempat perkumpulan"</strong>. Penamaan demikian diberikan lantaran wilayah Koran dulunya merupakan sentra perkumpulan masyarakat sebelum melakukan aktifitas dan/atau acara bersama. Kata inilah yang kemudian melekat dan lama-kelamaan menjadi nama resmi jorong.',
                'icon'    => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
                'makna'   => 'Tempat Perkumpulan',
                'gambar'  => 'jorong/koran.jpeg',
            ],
            [
                'nama'    => 'Pondok Jago',
                'warna'   => ['from-red-500','to-rose-600','ring-red-200','bg-red-50','text-red-800','border-red-200','bg-red-500'],
                'sejarah' => 'Di era perjuangan dulu, kawasan Pondok Jago merupakan tameng nagari dalam menghadapi serangan penjajah. Wilayah jorong ini dulunya merupakan jalur utama penduduk untuk masuk maupun keluar dari Nagari Pematang Panjang. Dikarenakan kondisi tersebut, masyarakat fokus untuk berjaga di wilayah ini. Yang mana kemudian menginspirasi penamaan <em>"Pondok Jago"</em>.',
                'icon'    => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                'makna'   => 'Pos Penjagaan / Benteng Nagari',
                'gambar'  => 'jorong/pondok-jago.jpeg',
            ],
            [
                'nama'    => 'Kambuik Koman',
                'warna'   => ['from-green-600','to-emerald-700','ring-green-200','bg-green-50','text-green-800','border-green-200','bg-green-600'],
                'sejarah' => 'Penamaan jorong ini bermula dari ciri khas daerahnya yang kaya akan pohon berukuran besar layaknya pohon beringin. Kata <em>"kambuik"</em> sendiri berarti <strong>"besar"</strong>, sementara <em>"koman"</em> berarti <strong>"pohon"</strong> yang secara langsung merepresentasikan keunikan jorong Kambuik Koman.',
                'icon'    => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                'makna'   => 'Pohon Besar (Beringin Raksasa)',
                'gambar'  => 'jorong/kambuik-koman.jpeg',
            ],
            [
                'nama'    => 'Koto Tangah',
                'warna'   => ['from-blue-600','to-sky-700','ring-blue-200','bg-blue-50','text-blue-800','border-blue-200','bg-blue-600'],
                'sejarah' => 'Sebagai jorong yang menjadi pusat kegiatan bagi nagari, nama <em>"Koto Tangah"</em> bermakna <strong>"wilayah yang menjadi sentra kegiatan masyarakat"</strong>. Kata <em>"koto"</em> sendiri berarti <strong>"kota"</strong>, sementara <em>"tangah"</em> sendiri berarti <strong>"tengah"</strong>.',
                'icon'    => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                'makna'   => 'Kota di Tengah / Pusat Nagari',
                'gambar'  => 'jorong/koto-tangah.jpeg',
            ],
            [
                'nama'    => 'Duri',
                'warna'   => ['from-orange-500','to-amber-600','ring-orange-200','bg-orange-50','text-orange-800','border-orange-200','bg-orange-500'],
                'sejarah' => 'Jorong Duri merupakan hasil pemecahan dari Jorong Pale dan Parak Gadang, membuatnya menjadi salah satu jorong termuda yang berada di dalam kawasan Nagari Pematang Panjang. Selayaknya pembentukannya yang murni mengandalkan suara masyarakat, penamaan Jorong Duri pun bersumber dari permintaan masyarakat setempat.',
                'icon'    => 'M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 4h-4m0 0a4 4 0 11-8 0 4 4 0 018 0z',
                'makna'   => 'Jorong Hasil Pemekaran',
                'gambar'  => 'jorong/duri.jpeg',
            ],
            [
                'nama'    => 'Parak Gadang',
                'warna'   => ['from-teal-600','to-cyan-700','ring-teal-200','bg-teal-50','text-teal-800','border-teal-200','bg-teal-600'],
                'sejarah' => 'Lantaran memiliki banyak lahan yang luas, <em>Parak Gadang</em> atau dalam bahasa Indonesia berarti <strong>"lahan yang besar/luas"</strong>, nama tersebut melekat dan berakhir menjadi nama resmi jorong yang satu ini.',
                'icon'    => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064',
                'makna'   => 'Lahan / Kebun yang Luas',
                'gambar'  => 'jorong/parak-gadang.jpeg',
            ],
            [
                'nama'    => 'Koman Kaciak',
                'warna'   => ['from-lime-600','to-green-700','ring-lime-200','bg-lime-50','text-lime-800','border-lime-200','bg-lime-600'],
                'sejarah' => 'Penamaan dari jorong ini tidak jauh beda dengan sejarah <em>"Kambuik Koman"</em> dari ciri khas daerahnya yang kaya akan pohon berukuran besar layaknya pohon beringin. Kata <em>"Koman"</em> berarti <strong>"pohon"</strong> yang secara langsung merepresentasikan keunikan jorong Koman Kaciak, sedangkan <em>"Kaciak"</em> berarti <strong>"kecil"</strong>. <em>Koman Kaciak</em> berarti pohon yang menyerupai beringin tumbuhnya kecil-kecil, berbeda dengan <em>Kambuik Koman</em> yang memiliki pohon yang besar-besar.',
                'icon'    => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                'makna'   => 'Pohon Kecil (Beringin Kecil)',
                'gambar'  => 'jorong/koman-kaciak.jpeg',
            ],
            [
                'nama'    => 'Sitampung',
                'warna'   => ['from-purple-600','to-violet-700','ring-purple-200','bg-purple-50','text-purple-800','border-purple-200','bg-purple-600'],
                'sejarah' => 'Jorong ini dinamakan Sitampung karena banyak orang atau tempat perkumpulan orang yang berdoa (tokoh agama) <strong>"menampung"</strong> rezeki. Nama ini mencerminkan nuansa religius dan spiritual yang kuat pada masyarakat di jorong ini.',
                'icon'    => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
                'makna'   => 'Tempat Menampung Berkah & Rezeki',
                'gambar'  => 'jorong/sitampung.jpeg',
            ],
            [
                'nama'    => 'Kalumpang',
                'warna'   => ['from-pink-600','to-rose-700','ring-pink-200','bg-pink-50','text-pink-800','border-pink-200','bg-pink-600'],
                'sejarah' => 'Jorong Kalumpang menyimpan sejarah dan makna tersendiri yang menjadi bagian tak terpisahkan dari keunikan Nagari Pematang Panjang. Nama <em>Kalumpang</em> merupakan nama yang telah diwariskan turun-temurun dan menjadi identitas bagi warga yang menetap di jorong ini.',
                'icon'    => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z',
                'makna'   => 'Warisan Leluhur Nagari',
                'gambar'  => 'jorong/kalumpang.jpeg',
            ],
            [
                'nama'    => 'Pale',
                'warna'   => ['from-indigo-600','to-blue-700','ring-indigo-200','bg-indigo-50','text-indigo-800','border-indigo-200','bg-indigo-600'],
                'sejarah' => 'Jorong ini termasuk pecahan dari Jorong Parak Gadang, namun jorong ini berdiri sebelum Jorong Duri. Hal ini terjadi karena pada awalnya Jorong Parak Gadang sangat luas, maka untuk mempermudah warga dalam penyebutan nama jorong, dibagi namanya masing-masing agar orang mengetahuinya dan tidak bingung dengan lokasi yang dimaksud.',
                'icon'    => 'M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z',
                'makna'   => 'Pemekaran dari Parak Gadang',
                'gambar'  => 'jorong/pale.jpeg',
            ],
            [
                'nama'    => 'Limau Sundai',
                'warna'   => ['from-yellow-500','to-orange-600','ring-yellow-200','bg-yellow-50','text-yellow-800','border-yellow-200','bg-yellow-500'],
                'sejarah' => 'Jorong Limau Sundai memiliki sejarah yang unik, yaitu tempat ini dahulunya banyak ditumbuhi tanaman <em>"Limau Sundai"</em> — sebutan bagi orang Sijunjung. <strong>"Limau"</strong> berarti <strong>"jeruk"</strong> sedangkan <strong>"sundai"</strong> adalah jenis dari jeruk tersebut. Tempat ini disebut sebagai patokan atau penunjuk bagi orang yang tidak mengetahuinya, dengan tujuan agar yang bertanya mengerti tempat yang dimaksud.',
                'icon'    => 'M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z',
                'makna'   => 'Kebun Jeruk Sundai (Penanda Wilayah)',
                'gambar'  => 'jorong/limau-sundai.jpeg',
            ],
        ];
        @endphp

        <div class="space-y-10">
        @foreach($jorongData as $i => $jorong)
        @php
            $no = $i + 1;
            $isEven = $i % 2 === 1;
            [$gFrom, $gTo, $ring, $bgLight, $textColor, $borderColor, $bgDot] = $jorong['warna'];
        @endphp

        <div id="jorong-{{ $no }}" class="group bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-500 scroll-mt-24">
            <div class="flex flex-col {{ $isEven ? 'lg:flex-row-reverse' : 'lg:flex-row' }}">

                {{-- Foto Placeholder --}}
                <div class="lg:w-2/5 relative min-h-[280px] lg:min-h-0 flex items-center justify-center bg-gradient-to-br {{ $gFrom }} {{ $gTo }} p-8">
                    {{-- Pattern overlay --}}
                    <div class="absolute inset-0 opacity-10"
                        style="background-image: radial-gradient(circle at 20% 80%, white 1px, transparent 1px), radial-gradient(circle at 80% 20%, white 1px, transparent 1px); background-size: 30px 30px;">
                    </div>

                    {{-- Nomor urut besar --}}
                    <div class="absolute top-5 {{ $isEven ? 'right-5' : 'left-5' }} text-white/20 font-black text-8xl leading-none select-none">
                        {{ str_pad($no, 2, '0', STR_PAD_LEFT) }}
                    </div>

                    {{-- Frame foto lingkaran --}}
                    <div class="relative z-10 flex flex-col items-center gap-4">
                        <div class="w-48 h-48 rounded-full ring-4 ring-white/40 ring-offset-4 ring-offset-transparent shadow-2xl overflow-hidden bg-white/20 flex items-center justify-center backdrop-blur-sm border-2 border-white/30">
                            {{-- Placeholder: ganti dengan <img> saat foto tersedia --}}
                            @if(file_exists(public_path('images/' . $jorong['gambar'])))
                                <img src="{{ asset('images/' . $jorong['gambar']) }}"
                                    alt="Foto Jorong {{ $jorong['nama'] }}"
                                    class="w-full h-full object-cover">
                            @else
                                <div class="flex flex-col items-center justify-center w-full h-full text-white/80 p-4 text-center">
                                    <p class="text-sm font-bold text-white">{{ $jorong['nama'] }}</p>
                                </div>
                            @endif
                        </div>

                        {{-- Badge makna --}}
                        <div class="bg-white/20 backdrop-blur-sm border border-white/30 text-white px-4 py-1.5 rounded-full text-xs font-semibold text-center max-w-[180px]">
                            {{ $jorong['makna'] }}
                        </div>
                    </div>
                </div>

                {{-- Konten teks --}}
                <div class="lg:w-3/5 p-8 lg:p-10 flex flex-col justify-center">

                    <div class="flex items-start gap-4 mb-6">
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <span class="inline-flex items-center justify-center w-6 h-6 rounded-full text-white text-xs font-black {{ $bgDot }}">{{ $no }}</span>
                                <span class="text-xs font-semibold text-gray-400 uppercase tracking-widest">Jorong ke-{{ $no }}</span>
                            </div>
                            <h3 class="text-2xl font-black text-gray-900">{{ $jorong['nama'] }}</h3>
                        </div>
                    </div>

                    {{-- Divider --}}
                    <div class="h-px bg-gradient-to-r {{ $gFrom }} {{ $gTo }} opacity-30 mb-6"></div>

                    <div class="prose prose-sm prose-gray max-w-none">
                        <p class="text-gray-600 leading-relaxed text-sm">{!! $jorong['sejarah'] !!}</p>
                    </div>


                </div>

            </div>
        </div>

        @endforeach
        </div>



    </div>
</div>
@endsection
