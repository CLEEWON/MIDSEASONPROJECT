<body class="bg-[#fff9f8] text-gray-800 font-sans">

    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="max-w-2xl w-full text-center">
            
            <div class="mb-8">
                <div class="inline-flex items-center gap-3 bg-white shadow-md px-6 py-3 rounded-3xl">
                    <span class="text-5xl">🧁</span>
                    <div>
                        <h1 class="text-4xl font-bold tracking-tight text-pink-600">SweetBake</h1>
                        <p class="text-sm text-gray-500 -mt-1">Bakery & Cake Studio</p>
                    </div>
                </div>
            </div>

            <h2 class="text-5xl font-bold leading-tight mb-4">
                Selamat Datang di<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-rose-500">Admin Panel</span>
            </h2>
            
            <p class="text-lg text-gray-600 mb-10 max-w-md mx-auto">
                Kelola produk kue, pesanan pelanggan, dan laporan penjualan dengan mudah dan menyenangkan.
            </p>

            @if (Route::has('login'))
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ url('/dashboard') }}" 
                       class="bg-pink-600 hover:bg-pink-700 text-white font-semibold px-10 py-4 rounded-2xl transition-all text-lg shadow-lg shadow-pink-200">
                        Masuk ke Dashboard
                    </a>
                    
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" 
                       class="border border-gray-300 hover:border-gray-400 font-medium px-8 py-4 rounded-2xl transition-all text-lg">
                        Buat Akun Admin
                    </a>
                    @endif
                </div>
            @endif

            <div class="mt-16 text-xs text-gray-400">
                © 2026 SweetBake Bakery • Jakarta
            </div>
        </div>
    </div>

</body>