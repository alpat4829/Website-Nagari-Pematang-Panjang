{{-- resources/views/statistik/pemilih.blade.php --}}
@extends('layouts.app')
@section('title', 'Daftar Pemilih Tetap')
@section('content')

<x-page-header
    title="Daftar Pemilih Tetap"
    subtitle="Data pemilih tetap Nagari Pematang Panjang berdasarkan jorong"
    image="images/images/masyarakatproduktif.jpg"
/>

<div class="bg-gray-50 py-14">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
        @foreach ([
            ['Total Pemilih', '4.520', 'text-blue-700', 'bg-blue-50 border-blue-200'],
            ['Pemilih Laki-laki', '2.268', 'text-indigo-700', 'bg-indigo-50 border-indigo-200'],
            ['Pemilih Perempuan', '2.252', 'text-pink-700', 'bg-pink-50 border-pink-200'],
            ['Jumlah TPS', '8', 'text-green-700', 'bg-green-50 border-green-200'],
        ] as [$label, $val, $text, $bg])
            <div class="{{ $bg }} border rounded-2xl p-5 text-center">
                <p class="text-xs text-gray-400 mb-1">{{ $label }}</p>
                <p class="text-xl font-bold {{ $text }}">{{ $val }}</p>
            </div>
        @endforeach
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 flex items-center gap-3">
                <div class="w-1 h-6 bg-blue-600 rounded-full"></div>
                <h2 class="font-bold text-gray-800">Data Pemilih per Jorong</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-gradient-to-r from-blue-700 to-blue-600 text-white">
                            <th class="py-3 px-3 text-left text-xs font-bold uppercase">#</th>
                            <th class="py-3 px-3 text-left text-xs font-bold uppercase">Jorong</th>
                            <th class="py-2 px-2 text-right text-xs font-bold uppercase">TPS</th>
                            <th class="py-2 px-2 text-right text-xs font-bold uppercase">Laki-laki</th>
                            <th class="py-2 px-2 text-right text-xs font-bold uppercase">Perempuan</th>
                            <th class="py-2 px-2 text-right text-xs font-bold uppercase">Total</th>
                            <th class="py-2 px-2 text-right text-xs font-bold uppercase">%</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $dpt = [
                            ['Jorong Koran',         1, 218, 215, 433],
                            ['Jorong Kambuik Koman', 1, 195, 193, 388],
                            ['Jorong Koto Tangah',   1, 210, 208, 418],
                            ['Jorong Parak Gadang',  1, 185, 184, 369],
                            ['Jorong Pale',          1, 200, 198, 398],
                            ['Jorong Duri',          1, 192, 190, 382],
                            ['Jorong Pondok Jago',   1, 225, 224, 449],
                            ['Jorong Kalumpang',     0, 218, 216, 434],
                            ['Jorong Koman Kacik',   0, 185, 183, 368],
                            ['Jorong Limau Sundai',  0, 198, 195, 393],
                            ['Jorong Sitampung',     0, 242, 246, 488],
                        ];
                        $totDpt = array_sum(array_column($dpt, 4));
                        @endphp
                        @foreach ($dpt as $i => [$nama, $tps, $l, $p, $tot])
                        @php $pct = round($tot/$totDpt*100,2); @endphp
                        <tr class="{{ $i%2===0?'bg-white':'bg-gray-50' }} hover:bg-blue-50 transition-colors text-xs">
                            <td class="py-2.5 px-3 text-gray-400 font-mono">{{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}</td>
                            <td class="py-2.5 px-3 font-semibold text-gray-800">{{ $nama }}</td>
                            <td class="py-2.5 px-2 text-right text-gray-600">{{ $tps > 0 ? 'TPS '.($i < 7 ? ($i+1) : '-') : '-' }}</td>
                            <td class="py-2.5 px-2 text-right text-blue-700 font-semibold">{{ number_format($l) }}</td>
                            <td class="py-2.5 px-2 text-right text-pink-700 font-semibold">{{ number_format($p) }}</td>
                            <td class="py-2.5 px-2 text-right font-bold text-gray-800">{{ number_format($tot) }}</td>
                            <td class="py-2.5 px-2 text-right text-blue-600">{{ $pct }}%</td>
                        </tr>
                        @endforeach
                        <tr class="bg-blue-50 font-bold border-t border-blue-200 text-xs">
                            <td colspan="2" class="py-3 px-3 text-gray-800">TOTAL</td>
                            <td class="py-3 px-2 text-right text-gray-600">8 TPS</td>
                            <td class="py-3 px-2 text-right text-blue-700">2.268</td>
                            <td class="py-3 px-2 text-right text-pink-700">2.252</td>
                            <td class="py-3 px-2 text-right font-bold">{{ number_format($totDpt) }}</td>
                            <td class="py-3 px-2 text-right text-blue-700">100%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="space-y-6">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-1 h-6 bg-blue-600 rounded-full"></div>
                    <h2 class="font-bold text-gray-800 text-sm">Komposisi Gender</h2>
                </div>
                <canvas id="genderChart" height="200"></canvas>
                <div class="mt-4 grid grid-cols-2 gap-3 text-center">
                    <div class="bg-blue-50 rounded-xl p-3">
                        <p class="text-xs text-gray-400">Laki-laki</p>
                        <p class="font-bold text-blue-700">2.268</p>
                        <p class="text-xs text-blue-500">50,18%</p>
                    </div>
                    <div class="bg-pink-50 rounded-xl p-3">
                        <p class="text-xs text-gray-400">Perempuan</p>
                        <p class="font-bold text-pink-700">2.252</p>
                        <p class="text-xs text-pink-500">49,82%</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-1 h-6 bg-green-600 rounded-full"></div>
                    <h2 class="font-bold text-gray-800 text-sm">Top Jorong Pemilih</h2>
                </div>
                @php $sorted = collect($dpt)->sortByDesc(fn($r) => $r[4])->take(5); @endphp
                <div class="space-y-3">
                    @foreach ($sorted as $i => [$nama, $tps, $l, $p, $tot])
                    @php $pct = round($tot/$totDpt*100); @endphp
                    <div>
                        <div class="flex justify-between text-xs mb-1">
                            <span class="font-medium text-gray-700">{{ $nama }}</span>
                            <span class="text-gray-500">{{ $tot }}</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width:{{ $pct }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
new Chart(document.getElementById('genderChart'), {
    type: 'doughnut',
    data: {
        labels: ['Laki-laki','Perempuan'],
        datasets: [{ data: [2268, 2252],
            backgroundColor: ['#3b82f6','#ec4899'],
            borderWidth: 0, hoverOffset: 6 }]
    },
    options: { cutout: '65%', plugins: { legend: { display: false } } }
});
</script>
@endsection
