@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-[#fff9f8]">

    {{-- Sidebar sekali saja --}}
    @include('components.sidebar')

    <div class="flex-1 flex flex-col">

        {{-- Header sekali saja --}}
        @include('components.header')

        <main class="flex-1 p-6 md:p-8 overflow-auto bg-[#fff9f8]">

            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Selamat Datang Kembali, Admin! 👋</h2>
                <p class="text-gray-600 mt-1">Ini adalah ringkasan performa toko kue SweetBake hari ini</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <!-- Card Total Penjualan -->
                <div class="bg-white rounded-3xl shadow-sm p-6 border border-pink-100">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Total Penjualan Hari Ini</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">Rp 4.820.000</p>
                        </div>
                        <span class="text-4xl">💰</span>
                    </div>
                    <p class="text-emerald-500 text-sm mt-4">↑ 18% dari kemarin</p>
                </div>

                <!-- Sisanya card Pesanan Baru, Produk Terjual, Pelanggan Aktif -->
                <!-- ... kamu bisa copy dari versi sebelumnya ... -->
            </div>

        </main>

        {{-- Footer --}}
        @include('components.footer')

    </div>
</div>
@endsection