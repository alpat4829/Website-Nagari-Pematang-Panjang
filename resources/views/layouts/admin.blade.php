{{-- resources/views/layouts/admin.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel - Nagari Pematang Panjang</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-green-800 text-white flex-shrink-0">
            <div class="p-4">
                <span class="text-lg font-bold">Admin Panel</span>
            </div>

            <nav class="mt-8">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-4 py-3 text-sm hover:bg-green-700 {{ request()->routeIs('admin.dashboard') ? 'bg-green-700' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                    </svg>
                    Dashboard
                </a>

                <a href="{{ route('admin.umkm.index') }}"
                    class="flex items-center px-4 py-3 text-sm hover:bg-green-700 {{ request()->routeIs('admin.umkm.*') ? 'bg-green-700' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16"></path>
                    </svg>
                    UMKM
                </a>

                <a href="{{ route('admin.gallery.index') }}"
                    class="flex items-center px-4 py-3 text-sm hover:bg-green-700 {{ request()->routeIs('admin.gallery.*') ? 'bg-green-700' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16"></path>
                    </svg>
                    Galeri
                </a>

                <a href="{{ route('admin.articles.index') }}"
                    class="flex items-center px-4 py-3 text-sm hover:bg-green-700 {{ request()->routeIs('admin.articles.*') ? 'bg-green-700' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    Artikel & Berita
                </a>

                <a href="{{ route('admin.pengaduan.index') }}"
                    class="flex items-center px-4 py-3 text-sm hover:bg-green-700 {{ request()->routeIs('admin.pengaduan.*') ? 'bg-green-700' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                    </svg>
                    Pengaduan
                    @php $pengaduanBaru = \App\Models\Pengaduan::where('status','diterima')->count(); @endphp
                    @if($pengaduanBaru > 0)
                        <span class="ml-auto bg-red-500 text-white text-xs font-bold rounded-full px-2 py-0.5 min-w-[20px] text-center">
                            {{ $pengaduanBaru }}
                        </span>
                    @endif
                </a>

                <div class="border-t border-green-700 my-4"></div>

                <a href="{{ route('home') }}" class="flex items-center px-4 py-3 text-sm hover:bg-green-700"
                    target="_blank">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4"></path>
                    </svg>
                    Lihat Website
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm border-b border-gray-200">
                <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center">
                        <h1 class="text-2xl font-semibold text-gray-900">@yield('title', 'Dashboard')</h1>
                        <div class="flex items-center space-x-4">
                            <span class="text-sm text-gray-700">{{ Auth::user()->name }}</span>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="text-gray-500 hover:text-gray-700">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m10 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h8a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    @if (session('success'))
                        <div
                            class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                            {{ session('error') }}
                        </div>
                    @endif

                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>

</html>
