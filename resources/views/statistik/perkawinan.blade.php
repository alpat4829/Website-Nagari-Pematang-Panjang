{{-- resources/views/statistik/perkawinan.blade.php --}}
@extends('layouts.app')
@section('title', 'Statistik Data Perkawinan')
@section('content')

<x-page-header
    title="Statistik Data Perkawinan"
    subtitle="Distribusi status perkawinan penduduk Nagari Pematang Panjang"
    image="images/images/masyarakatproduktif.jpg"
/>

<div class="bg-gray-50 py-14">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
        @foreach ([
            ['Total Penduduk', '6.938', 'text-green-700', 'bg-green-50 border-green-200'],
            ['Kawin', '3.280', 'text-pink-700', 'bg-pink-50 border-pink-200'],
            ['Belum Kawin', '3.120', 'text-blue-700', 'bg-blue-50 border-blue-200'],
            ['Cerai / Janda / Duda', '538', 'text-gray-700', 'bg-gray-50 border-gray-200'],
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
                <div class="w-1 h-6 bg-pink-500 rounded-full"></div>
                <h2 class="font-bold text-gray-800">Status Perkawinan Penduduk</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-3 px-3 text-left text-xs font-bold text-gray-500 uppercase">Kode</th>
                            <th class="py-3 px-3 text-left text-xs font-bold text-gray-500 uppercase">Status Perkawinan</th>
                            <th class="py-2 px-2 text-right text-xs font-bold text-gray-500 uppercase">n</th>
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
                            ['1', 'BELUM KAWIN',          3120, 1620, 1500],
                            ['2', 'KAWIN',                3280, 1640, 1640],
                            ['3', 'CERAI HIDUP',          210, 48, 162],
                            ['4', 'CERAI MATI (JANDA/DUDA)', 328, 161, 167],
                        ];
                        $tot = array_sum(array_column($data, 2));
                        @endphp
                        @foreach ($data as $i => [$kode, $kel, $n, $l, $p])
                        @php $pct=round($n/$tot*100,2); $pctl=round($l/3469*100,2); $pctp=round($p/3469*100,2); @endphp
                        <tr class="{{ $i%2===0?'bg-white':'bg-gray-50' }} hover:bg-pink-50 transition-colors">
                            <td class="py-3 px-3 text-gray-400 font-mono text-xs">{{ $kode }}</td>
                            <td class="py-3 px-3 font-semibold text-gray-800 text-sm uppercase">{{ $kel }}</td>
                            <td class="py-3 px-2 text-right text-gray-700 font-bold text-sm">{{ number_format($n) }}</td>
                            <td class="py-3 px-2 text-right text-gray-600 text-xs">{{ $pct }}%</td>
                            <td class="py-3 px-2 text-right text-blue-700 font-semibold text-xs">{{ $l }}</td>
                            <td class="py-3 px-2 text-right text-blue-600 text-xs">{{ $pctl }}%</td>
                            <td class="py-3 px-2 text-right text-pink-700 font-semibold text-xs">{{ $p }}</td>
                            <td class="py-3 px-2 text-right text-pink-600 text-xs">{{ $pctp }}%</td>
                        </tr>
                        @endforeach
                        <tr class="bg-pink-50 font-bold border-t border-pink-200 text-xs">
                            <td colspan="2" class="py-3 px-3 text-gray-800">TOTAL</td>
                            <td class="py-3 px-2 text-right text-gray-800">{{ number_format($tot) }}</td>
                            <td class="py-3 px-2 text-right text-pink-700">100%</td>
                            <td class="py-3 px-2 text-right text-blue-700">3.469</td>
                            <td class="py-3 px-2 text-right">50,00%</td>
                            <td class="py-3 px-2 text-right text-pink-700">3.469</td>
                            <td class="py-3 px-2 text-right">50,00%</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Bar per status --}}
            <div class="p-6 border-t border-gray-100">
                <h3 class="text-sm font-bold text-gray-700 mb-4">Distribusi Status Perkawinan</h3>
                <div class="space-y-3">
                    @foreach ($data as [$kode, $kel, $n, $l, $p])
                    @php $pct = round($n/$tot*100); @endphp
                    <div>
                        <div class="flex justify-between text-xs mb-1">
                            <span class="font-medium text-gray-700 uppercase">{{ $kel }}</span>
                            <span class="text-gray-500">{{ number_format($n) }} ({{ $pct }}%)</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2.5">
                            <div class="bg-pink-500 h-2.5 rounded-full transition-all" style="width:{{ $pct }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-1 h-6 bg-pink-500 rounded-full"></div>
                <h2 class="font-bold text-gray-800 text-sm">Komposisi Status</h2>
            </div>
            <canvas id="kawinChart" height="250"></canvas>
            <div class="mt-4 space-y-2">
                @php $colors=['#3b82f6','#ec4899','#f59e0b','#6b7280']; @endphp
                @foreach ($data as $i => [$kode, $kel, $n, $l, $p])
                <div class="flex items-center justify-between text-xs">
                    <div class="flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full" style="background:{{ $colors[$i] }}"></span>
                        <span class="text-gray-600 uppercase text-xs">{{ $kel }}</span>
                    </div>
                    <span class="font-bold text-gray-800">{{ number_format($n) }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
new Chart(document.getElementById('kawinChart'), {
    type: 'doughnut',
    data: {
        labels: @json(array_column($data, 1)),
        datasets: [{ data: @json(array_column($data, 2)),
            backgroundColor: ['#3b82f6','#ec4899','#f59e0b','#6b7280'],
            borderWidth: 0, hoverOffset: 6 }]
    },
    options: { cutout: '68%', plugins: { legend: { display: false } } }
});
</script>
@endsection
