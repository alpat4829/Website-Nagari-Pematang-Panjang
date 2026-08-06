{{-- resources/views/statistik/pekerjaan.blade.php --}}
@extends('layouts.app')
@section('title', 'Statistik Data Pekerjaan')
@section('content')

<x-page-header
    title="Statistik Data Pekerjaan"
    subtitle="Distribusi jenis pekerjaan penduduk Nagari Pematang Panjang"
    image="images/images/masyarakatproduktif.jpg"
/>

<div class="bg-gray-50 py-14">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
        @foreach ([
            ['Total Penduduk', '6.938', 'text-green-700', 'bg-green-50 border-green-200'],
            ['Sektor Pertanian', '527', 'text-emerald-700', 'bg-emerald-50 border-emerald-200'],
            ['Sektor Jasa', '123', 'text-blue-700', 'bg-blue-50 border-blue-200'],
            ['Wirausaha', '85', 'text-amber-700', 'bg-amber-50 border-amber-200'],
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
                <div class="w-1 h-6 bg-teal-600 rounded-full"></div>
                <h2 class="font-bold text-gray-800">Distribusi Jenis Pekerjaan</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-3 px-3 text-left text-xs font-bold text-gray-500 uppercase">Kode</th>
                            <th class="py-3 px-3 text-left text-xs font-bold text-gray-500 uppercase">Kelompok</th>
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
                            ['1',  'BELUM/TIDAK BEKERJA',           1130, 575, 555],
                            ['2',  'MENGURUS RUMAH TANGGA',          778, 2, 776],
                            ['3',  'PELAJAR/MAHASISWA',              660, 341, 319],
                            ['4',  'PENSIUNAN',                      35, 22, 13],
                            ['5',  'PEGAWAI NEGERI SIPIL (PNS)',     123, 52, 71],
                            ['6',  'TENTARA NASIONAL INDONESIA (TNI)', 4, 4, 0],
                            ['7',  'KEPOLISIAN RI (POLRI)',           9, 9, 0],
                            ['8',  'PERDAGANGAN',                    40, 28, 12],
                            ['9',  'PETANI/PEKEBUN',                 527, 459, 68],
                            ['10', 'PETERNAK',                       2, 2, 0],
                            ['11', 'NELAYAN/PERIKANAN',              1, 1, 0],
                            ['14', 'TRANSPORTASI',                   1, 1, 0],
                            ['15', 'KARYAWAN SWASTA',                85, 66, 19],
                            ['16', 'KARYAWAN BUMN',                  12, 7, 5],
                            ['17', 'KARYAWAN HONORER',               38, 18, 20],
                            ['18', 'BURUH HARIAN LEPAS',             95, 62, 33],
                            ['19', 'TUKANG/KONSTRUKSI',              28, 28, 0],
                            ['20', 'WIRASWASTA',                     125, 72, 53],
                            ['21', 'LAINNYA',                        145, 79, 66],
                        ];
                        $tot = array_sum(array_column($data, 2));
                        @endphp
                        @foreach ($data as $i => [$kode, $kel, $n, $l, $p])
                        @php $pct=round($n/$tot*100,2); $pctl=round($l/3469*100,2); $pctp=round($p/3469*100,2); @endphp
                        <tr class="{{ $i%2===0?'bg-white':'bg-gray-50' }} hover:bg-teal-50 transition-colors text-xs">
                            <td class="py-2.5 px-3 text-gray-400 font-mono">{{ $kode }}</td>
                            <td class="py-2.5 px-3 font-medium text-gray-800 uppercase">{{ $kel }}</td>
                            <td class="py-2.5 px-2 text-right text-gray-700">{{ number_format($n) }}</td>
                            <td class="py-2.5 px-2 text-right text-gray-600">{{ $pct }}%</td>
                            <td class="py-2.5 px-2 text-right text-blue-700">{{ $l }}</td>
                            <td class="py-2.5 px-2 text-right text-blue-600">{{ $pctl }}%</td>
                            <td class="py-2.5 px-2 text-right text-pink-700">{{ $p }}</td>
                            <td class="py-2.5 px-2 text-right text-pink-600">{{ $pctp }}%</td>
                        </tr>
                        @endforeach
                        <tr class="bg-teal-50 font-bold border-t border-teal-200 text-xs">
                            <td colspan="2" class="py-3 px-3 text-gray-800">TOTAL</td>
                            <td class="py-3 px-2 text-right">{{ number_format($tot) }}</td>
                            <td class="py-3 px-2 text-right text-teal-700">100%</td>
                            <td class="py-3 px-2 text-right text-blue-700">3.469</td>
                            <td class="py-3 px-2 text-right">50,00%</td>
                            <td class="py-3 px-2 text-right text-pink-700">3.469</td>
                            <td class="py-3 px-2 text-right">50,00%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-1 h-6 bg-teal-600 rounded-full"></div>
                <h2 class="font-bold text-gray-800 text-sm">Top 8 Pekerjaan</h2>
            </div>
            <canvas id="pekerjaanChart" height="320"></canvas>
        </div>
    </div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
// Top 8 by jumlah
const sorted = @json(collect($data)->sortByDesc(fn($r) => $r[2])->take(8)->values());
new Chart(document.getElementById('pekerjaanChart'), {
    type: 'doughnut',
    data: {
        labels: sorted.map(r => r[1].length > 22 ? r[1].substring(0,20)+'…' : r[1]),
        datasets: [{ data: sorted.map(r => r[2]),
            backgroundColor: ['#0d9488','#2563eb','#16a34a','#7c3aed','#d97706','#dc2626','#db2777','#6366f1'],
            borderWidth: 0, hoverOffset: 6 }]
    },
    options: {
        cutout: '60%',
        plugins: { legend: { position: 'bottom', labels: { font: { size: 9 }, padding: 8 } } }
    }
});
</script>
@endsection
