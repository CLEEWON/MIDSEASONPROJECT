@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-gradient-to-br from-[#fff9f8] to-[#fff0f0]">

    @include('components.sidebar')

    <div class="flex-1 flex flex-col">

        @include('components.header')

        <main class="flex-1 p-6 md:p-10 overflow-auto">

            <!-- Greeting -->
            <div class="mb-12">
                <div class="flex items-center gap-4">
                    <div class="text-5xl">🧁</div>
                    <div>
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-800 tracking-tight">
                            Selamat Datang Kembali, Admin!
                        </h2>
                        <p class="text-gray-600 mt-2 text-lg">Semoga hari ini penuh dengan pesanan manis 🍰</p>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-12">

                <!-- Card 1 -->
                <div class="bg-white rounded-3xl shadow-md p-8 border border-pink-100 hover:border-pink-400 hover:shadow-xl transition-all duration-300 group">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="uppercase text-xs tracking-widest text-pink-500 font-medium">Penjualan Hari Ini</p>
                            <p class="text-4xl font-bold text-gray-800 mt-4">Rp 4.820.000</p>
                        </div>
                        <div class="w-16 h-16 bg-gradient-to-br from-pink-400 to-rose-400 rounded-3xl flex items-center justify-center text-4xl shadow-inner group-hover:rotate-12 transition-transform">
                            💰
                        </div>
                    </div>
                    <div class="mt-6 inline-flex items-center gap-2 bg-emerald-100 text-emerald-600 text-sm font-medium px-4 py-1.5 rounded-2xl">
                        ↑ 18% dari kemarin
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-3xl shadow-md p-8 border border-pink-100 hover:border-pink-400 hover:shadow-xl transition-all duration-300 group">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="uppercase text-xs tracking-widest text-amber-500 font-medium">Pesanan Baru</p>
                            <p class="text-4xl font-bold text-gray-800 mt-4">27</p>
                        </div>
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-orange-400 rounded-3xl flex items-center justify-center text-4xl shadow-inner group-hover:scale-110 transition-transform">
                            📦
                        </div>
                    </div>
                    <div class="mt-6 inline-flex items-center gap-2 bg-emerald-100 text-emerald-600 text-sm font-medium px-4 py-1.5 rounded-2xl">
                        ↑ 5 pesanan
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-3xl shadow-md p-8 border border-pink-100 hover:border-pink-400 hover:shadow-xl transition-all duration-300 group">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="uppercase text-xs tracking-widest text-rose-500 font-medium">Produk Terjual</p>
                            <p class="text-4xl font-bold text-gray-800 mt-4">184</p>
                        </div>
                        <div class="w-16 h-16 bg-gradient-to-br from-rose-400 to-pink-500 rounded-3xl flex items-center justify-center text-4xl shadow-inner group-hover:rotate-6 transition-transform">
                            🧁
                        </div>
                    </div>
                    <div class="mt-6 inline-flex items-center gap-2 bg-emerald-100 text-emerald-600 text-sm font-medium px-4 py-1.5 rounded-2xl">
                        ↑ 12%
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-3xl shadow-md p-8 border border-pink-100 hover:border-pink-400 hover:shadow-xl transition-all duration-300 group">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="uppercase text-xs tracking-widest text-purple-500 font-medium">Pelanggan Aktif</p>
                            <p class="text-4xl font-bold text-gray-800 mt-4">1.248</p>
                        </div>
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-violet-400 rounded-3xl flex items-center justify-center text-4xl shadow-inner group-hover:scale-110 transition-transform">
                            👩‍❤️‍👨
                        </div>
                    </div>
                    <div class="mt-6 text-rose-500 text-sm font-medium">
                        +3 pelanggan baru hari ini
                    </div>
                </div>

            </div>

            <!-- Bottom Section -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

                <!-- Pesanan Terbaru -->
                <div class="lg:col-span-7 bg-white rounded-3xl shadow-md p-8">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-semibold text-gray-800">Pesanan Terbaru</h3>
                        <a href="#" class="text-pink-600 hover:text-pink-700 font-medium flex items-center gap-2">
                            Lihat semua <span class="text-xl">→</span>
                        </a>
                    </div>
                    <div class="flex items-center gap-6 py-6 border-b last:border-0 hover:bg-pink-50 rounded-2xl px-4 -mx-4 transition-colors">
                        <div class="w-16 h-16 bg-pink-50 rounded-2xl flex items-center justify-center text-5xl">🍰</div>
                        <div class="flex-1">
                            <p class="font-semibold text-lg">Order #SB-8921</p>
                            <p class="text-gray-500">Red Velvet Cake • 2 pcs</p>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold text-emerald-600">Rp 285.000</p>
                            <p class="text-xs text-gray-400 mt-1">5 menit lalu</p>
                        </div>
                    </div>
                </div>

                <!-- Aksi Cepat -->
                <div class="lg:col-span-5 bg-gradient-to-br from-pink-600 to-rose-600 rounded-3xl shadow-md p-8 text-white">
                    <h3 class="text-2xl font-semibold mb-8">Aksi Cepat</h3>
                    <div class="grid grid-cols-2 gap-5">
                        <a href="#" class="bg-white/15 hover:bg-white/25 backdrop-blur-md p-6 rounded-3xl text-center transition-all hover:scale-105">
                            <div class="text-5xl mb-4">🧁</div>
                            <p class="font-medium">Tambah Produk Baru</p>
                        </a>
                        <a href="#" class="bg-white/15 hover:bg-white/25 backdrop-blur-md p-6 rounded-3xl text-center transition-all hover:scale-105">
                            <div class="text-5xl mb-4">📦</div>
                            <p class="font-medium">Proses Pesanan</p>
                        </a>
                    </div>
                </div>

            </div>

        </main>

        @include('components.footer')

    </div>
</div>
@endsection