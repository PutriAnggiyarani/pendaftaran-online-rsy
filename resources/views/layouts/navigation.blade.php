<nav class="bg-white border-b border-gray-100 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <!-- Left Side: Logo & User Greeting -->
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                        <img src="{{ asset('build/assets/image/logors.png') }}" alt="Logo RS Cinta" class="w-15 h-15 object-contain">
                        <div>
                            <h1 class="text-xl font-extrabold text-[#1f2937] leading-tight tracking-tight">RS DR M YASIN BONE</h1>
                            <p class="text-xs text-[#64748b] font-medium">Halo, {{ explode(' ', Auth::user()->name)[0] }} 👋</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Middle: Search Bar -->
            <div class="hidden md:flex flex-1 justify-center px-12">
                <div class="relative w-full max-w-2xl">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-full text-sm bg-gray-50 focus:ring-[#4ebde1] focus:border-[#4ebde1] focus:bg-white shadow-sm transition-colors" placeholder="Cari dokter, poli, atau layanan...">
                </div>
            </div>

            <!-- Right Side: Actions -->
            <div class="flex items-center gap-4">
                <!-- Notifications -->
                <!-- <button class="relative p-2 text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span class="absolute top-1.5 right-1.5 block h-2 w-2 rounded-full bg-orange-400 ring-2 ring-white"></span>
                </button> -->

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}" class="m-0">
                    @csrf
                    <button type="submit" class="p-2 text-gray-400 hover:text-red-500 transition-colors" title="Keluar">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </button>
                </form>
            </div>

        </div>
    </div>
</nav>
