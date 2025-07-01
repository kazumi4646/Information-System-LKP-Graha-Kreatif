 <nav class="bg-blue-700 shadow-md" x-data="{ isOpen: false }">
        <div class="max-w-7xl mx-auto px-4">
            <div class="max-w-6xl mx-auto p-4 flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="text-white font-bold text-2xl">LKP Graha Kreatif</div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/" class="text-white hover:bg-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Dashboard</a>
                        <a href="/myprograms" class="text-white hover:bg-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Lihat Program Yang Diikuti</a>
                        <a href="/profile" class="text-white hover:bg-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Kelola Biodata Peserta</a>
                        <a href="/register" class="text-white hover:bg-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Registrasi Pendaftaran</a>
                        <a href="/galeri" class="text-white hover:bg-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Galeri</a>
                        <a href="/programs" class="text-white hover:bg-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Daftar Program</a>
                    </div>
                </div>

                <!-- Desktop Login Button -->
                <div class="hidden md:block">
                    <a href="/login" class="bg-white text-blue-700 px-4 py-2 rounded-md font-medium hover:bg-gray-100 transition-colors">Log in</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button 
                        type="button" 
                        @click="isOpen = !isOpen"
                        class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none"
                        aria-controls="mobile-menu" 
                        aria-expanded="false"
                    >
                        <span class="sr-only">Open main menu</span>
                        <!-- Hamburger icon -->
                        <svg 
                            :class="{'hidden': isOpen, 'block': !isOpen }" 
                            class="block h-6 w-6" 
                            fill="none" 
                            viewBox="0 0 24 24" 
                            stroke-width="1.5" 
                            stroke="currentColor" 
                            aria-hidden="true"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Close icon -->
                        <svg 
                            :class="{'block': isOpen, 'hidden': !isOpen }" 
                            class="hidden h-6 w-6" 
                            fill="none" 
                            viewBox="0 0 24 24" 
                            stroke-width="1.5" 
                            stroke="currentColor" 
                            aria-hidden="true"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div x-show="isOpen" x-transition class="md:hidden" id="mobile-menu">
            <div class="flex flex-col space-y-1 px-4 pb-3 pt-2">
                <a href="/" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-blue-600 transition-colors">Dashboard</a>
                <a href="/profile" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-blue-600 transition-colors">Profile</a>
                <a href="/galeri" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-blue-600 transition-colors">Galeri</a>
                <a href="/pendaftaran" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-blue-600 transition-colors">Pendaftaran</a>
                <a href="/program" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-blue-600 transition-colors">Program</a>
                <a href="/sertifikasi" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-blue-600 transition-colors">Sertifikasi</a>
                <a href="/template" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-blue-600 transition-colors">Template</a>
            </div>
            
            <!-- Mobile user section -->
            <div class="border-t border-gray-600 pb-3 pt-4">
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User avatar">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-white">Tom Cook</div>
                        <div class="text-sm font-medium text-gray-300">tom@example.com</div>
                    </div>
                </div>
                <div class="mt-3 flex flex-col space-y-1 px-4">
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-blue-600 hover:text-white transition-colors">Kelola Data Pribadi</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-blue-600 hover:text-white transition-colors">Sign out</a>
                </div>
            </div>
        </div>
    </nav>