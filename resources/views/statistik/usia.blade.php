{{-- resources/views/statistik/usia.blade.php --}}
@extends('layouts.app')
@section('title', 'Statistik Data Usia Penduduk')
@section('content')

<x-page-header
    title="Statistik Data Usia Penduduk"
    subtitle="Distribusi usia penduduk Nagari Pematang Panjang berdasarkan kelompok umur"
    image="images/images/masyarakatproduktif.jpg"
/>

<div class="bg-gray-50 py-14">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
        @foreach ([
            ['Total Penduduk', '6.938', 'text-green-700', 'bg-green-50 border-green-200'],
            ['Usia Produktif (15-64)', '4.285', 'text-blue-700', 'bg-blue-50 border-blue-200'],
            ['Usia Anak (0-14)', '1.862', 'text-amber-700', 'bg-amber-50 border-amber-200'],
            ['Usia Lansia (65+)', '791', 'text-purple-700', 'bg-purple-50 border-purple-200'],
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
                <div class="w-1 h-6 bg-purple-600 rounded-full"></div>
                <h2 class="font-bold text-gray-800">Kelompok Usia Penduduk</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-3 px-3 text-left text-xs font-bold text-gray-500 uppercase">Kelompok Usia</th>
                            <th class="py-2 px-2 text-right text-xs font-bold text-gray-500 uppercase">Jumlah n</th>
                            <th class="py-2 px-2 text-right text-xs font-bold text-gray-500 uppercase">%</th>
                            <th class="py-2 px-2 text-right text-xs font-bold text-blue-500 uppercase">L n</th>
                            <th class="py-2 px-2 text-right text-xs font-bold text-blue-500 uppercase">%</th>
                            <th class="py-2 px-2 text-right text-xs font-bold text-pink-500 uppercase">P n</th>
                            <th class="py-2 px-2 text-right text-xs font-bold text-pink-500 uppercase">%</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $usia = [
                            ['0 - 4',   412, 210, 202],
                            ['5 - 9',   398, 202, 196],
                            ['10 - 14', 425, 215, 210],
                            ['15 - 19', 530, 268, 262],
                            ['20 - 24', 610, 308, 302],
                            ['25 - 29', 580, 292, 288],
                            ['30 - 34', 548, 276, 272],
                            ['35 - 39', 510, 257, 253],
                            ['40 - 44', 472, 238, 234],
                            ['45 - 49', 428, 215, 213],
                            ['50 - 54', 380, 191, 189],
                            ['55 - 59', 340, 171, 169],
                            ['60 - 64', 285, 143, 142],
                            ['65 - 69', 225, 113, 112],
                            ['70 - 74', 180, 90, 90],
                            ['75+',     115, 58, 57],
                        ];
                        $tot = array_sum(array_column($usia, 1));
                        @endphp
                        @foreach ($usia as $i => [$grp, $n, $l, $p])
                        @php $pct=round($n/$tot*100,2); $pctl=round($l/3469*100,2); $pctp=round($p/3469*100,2); @endphp
                        <tr class="{{ $i%2===0?'bg-white':'bg-gray-50' }} hover:bg-purple-50 transition-colors text-xs">
                            <td class="py-2.5 px-3 font-semibold text-gray-800">{{ $grp }} tahun</td>
                            <td class="py-2.5 px-2 text-right text-gray-700">{{ number_format($n) }}</td>
                            <td class="py-2.5 px-2 text-right text-gray-600">{{ $pct }}%</td>
                            <td class="py-2.5 px-2 text-right text-blue-700">{{ $l }}</td>
                            <td class="py-2.5 px-2 text-right text-blue-600">{{ $pctl }}%</td>
                            <td class="py-2.5 px-2 text-right text-pink-700">{{ $p }}</td>
                            <td class="py-2.5 px-2 text-right text-pink-600">{{ $pctp }}%</td>
                        </tr>
                        @endforeach
                        <tr class="bg-purple-50 font-bold border-t border-purple-200 text-xs">
                            <td class="py-3 px-3 text-gray-800">TOTAL</td>
                            <td class="py-3 px-2 text-right">{{ number_format($tot) }}</td>
                            <td class="py-3 px-2 text-right text-purple-700">100%</td>
                            <td class="py-3 px-2 text-right text-blue-700">3.469</td>
                            <td class="py-3 px-2 text-right text-blue-600">50,00%</td>
                            <td class="py-3 px-2 text-right text-pink-700">3.469</td>
                            <td class="py-3 px-2 text-right text-pink-600">50,00%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-1 h-6 bg-purple-600 rounded-full"></div>
                <h2 class="font-bold text-gray-800 text-sm">Piramida Usia</h2>
            </div>
            <canvas id="usiaChart" height="380"></canvas>
        </div>
    </div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
const usiaLabels = @json(array_column($usia, 0));
const lakiData   = @json(array_column($usia, 2));
const perempData = @json(array_column($usia, 3));

new Chart(document.getElementById('usiaChart'), {
    type: 'bar',
    data: {
        labels: usiaLabels,
        datasets: [
            { label: 'Laki-laki', data: lakiData.map(v => -v),
              backgroundColor: '#3b82f6', borderRadius: 3, borderSkipped: false },
            { label: 'Perempuan', data: perempData,
              backgroundColor: '#ec4899', borderRadius: 3, borderSkipped: false },
        ]
    },
    options: {
        indexAxis: 'y', responsive: true,
        plugins: {
            legend: { position: 'top', labels: { font: { size: 10 } } },
            tooltip: { callbacks: { label: ctx => `${ctx.dataset.label}: ${Math.abs(ctx.raw)}` } }
        },
        scales: {
            x: {
                ticks: { callback: v => Math.abs(v), font: { size: 9 } },
                grid: { color: '#f3f4f6' }
            },
            y: { grid: { display: false }, ticks: { font: { size: 9 } } }
        }
    }
});
</script>
@endsection
