{{-- resources/views/statistik/penduduk (pendidikan) --}}
@extends('layouts.app')
@section('title', 'Statistik Data Pendidikan')
@section('content')

<x-page-header
    title="Statistik Data Pendidikan"
    subtitle="Distribusi tingkat pendidikan penduduk Nagari Pematang Panjang"
    image="images/images/masyarakatproduktif.jpg"
/>

<div class="bg-gray-50 py-14">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    {{-- Stat Cards --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
        @foreach ([
            ['Total Penduduk', '6.938', 'text-green-700', 'bg-green-50 border-green-200'],
            ['Laki-laki', '3.469', 'text-blue-700', 'bg-blue-50 border-blue-200'],
            ['Perempuan', '3.469', 'text-pink-700', 'bg-pink-50 border-pink-200'],
            ['Tingkat Buta Huruf', '< 2%', 'text-amber-700', 'bg-amber-50 border-amber-200'],
        ] as [$label, $val, $text, $bg])
            <div class="{{ $bg }} border rounded-2xl p-5 text-center">
                <p class="text-xs text-gray-400 mb-1">{{ $label }}</p>
                <p class="text-xl font-bold {{ $text }}">{{ $val }}</p>
            </div>
        @endforeach
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- Tabel Pendidikan --}}
        <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 flex items-center gap-3">
                <div class="w-1 h-6 bg-green-600 rounded-full"></div>
                <h2 class="font-bold text-gray-800">Distribusi Tingkat Pendidikan</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-3 px-3 text-left text-xs font-bold text-gray-500 uppercase">Kode</th>
                            <th class="py-3 px-3 text-left text-xs font-bold text-gray-500 uppercase">Kelompok</th>
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
                        $data = [
                            ['1',  'BELUM MASUK TK/KELOMPOK BERMAIN', 210, 7, 3],
                            ['2',  'BELUM/TIDAK TAMAT SD/SEDERAJAT',   485, 248, 237],
                            ['3',  'TAMAT SD/SEDERAJAT',               1120, 568, 552],
                            ['4',  'SEDANG SLTP/SEDERAJAT',            285, 148, 137],
                            ['5',  'TAMAT SLTP/SEDERAJAT',             890, 445, 445],
                            ['6',  'SEDANG SLTA/SEDERAJAT',            310, 162, 148],
                            ['7',  'TAMAT SLTA/SEDERAJAT',             1650, 830, 820],
                            ['8',  'SEDANG D-1/D-2/D-3/SEDERAJAT',    95, 48, 47],
                            ['9',  'TAMAT D-1/D-2/D-3/SEDERAJAT',     215, 108, 107],
                            ['10', 'SEDANG S-1/SEDERAJAT',             185, 95, 90],
                            ['11', 'TAMAT S-1/SEDERAJAT',              420, 210, 210],
                            ['12', 'TAMAT S-2/S-3/SEDERAJAT',         73, 38, 35],
                        ];
                        $totaln = array_sum(array_column($data, 2));
                        @endphp
                        @foreach ($data as $i => [$kode, $kel, $n, $l, $p])
                        @php
                            $pct  = round($n/$totaln*100,2);
                            $pctl = round($l/3469*100,2);
                            $pctp = round($p/3469*100,2);
                        @endphp
                        <tr class="{{ $i%2===0?'bg-white':'bg-gray-50' }} hover:bg-green-50 transition-colors text-xs">
                            <td class="py-2.5 px-3 text-gray-400 font-mono">{{ $kode }}</td>
                            <td class="py-2.5 px-3 font-medium text-gray-800 uppercase text-xs">{{ $kel }}</td>
                            <td class="py-2.5 px-2 text-right text-gray-700">{{ number_format($n) }}</td>
                            <td class="py-2.5 px-2 text-right text-gray-600">{{ $pct }}%</td>
                            <td class="py-2.5 px-2 text-right text-blue-700">{{ number_format($l) }}</td>
                            <td class="py-2.5 px-2 text-right text-blue-600">{{ $pctl }}%</td>
                            <td class="py-2.5 px-2 text-right text-pink-700">{{ number_format($p) }}</td>
                            <td class="py-2.5 px-2 text-right text-pink-600">{{ $pctp }}%</td>
                        </tr>
                        @endforeach
                        <tr class="bg-green-50 font-bold border-t border-green-200 text-xs">
                            <td colspan="2" class="py-3 px-3 text-gray-800">TOTAL</td>
                            <td class="py-3 px-2 text-right">{{ number_format($totaln) }}</td>
                            <td class="py-3 px-2 text-right text-green-700">100%</td>
                            <td class="py-3 px-2 text-right text-blue-700">3.469</td>
                            <td class="py-3 px-2 text-right text-blue-600">50,00%</td>
                            <td class="py-3 px-2 text-right text-pink-700">3.469</td>
                            <td class="py-3 px-2 text-right text-pink-600">50,00%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Bar Chart --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-1 h-6 bg-green-600 rounded-full"></div>
                <h2 class="font-bold text-gray-800 text-sm">Grafik Pendidikan</h2>
            </div>
            <canvas id="pendChart" height="340"></canvas>
        </div>
    </div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
const labels = @json(array_column($data, 1));
const shortLabels = labels.map(l => l.length > 20 ? l.substring(0,18)+'…' : l);
new Chart(document.getElementById('pendChart'), {
    type: 'bar',
    data: {
        labels: shortLabels,
        datasets: [
            { label: 'Laki-laki', data: @json(array_column($data, 3)), backgroundColor: '#2563eb', borderRadius: 4 },
            { label: 'Perempuan', data: @json(array_column($data, 4)), backgroundColor: '#db2777', borderRadius: 4 },
        ]
    },
    options: {
        indexAxis: 'y', responsive: true,
        plugins: { legend: { position: 'top', labels: { font: { size: 10 } } } },
        scales: {
            x: { grid: { color: '#f3f4f6' }, ticks: { font: { size: 9 } } },
            y: { grid: { display: false }, ticks: { font: { size: 9 } } }
        }
    }
});
</script>
@endsection
