<nav class="bg-blue-700 shadow-md mb-0" x-data="{ isOpen: false }" >
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="flex items-center">
          <div class="flex items-center">
            <div class="text-white font-bold text-2xl">LKP Graha Kreatif</div>
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <x-nav-link href="/" :active="request()->is('/')">Dashboard</x-nav-link> 
              @auth
              <x-nav-link href="/myprograms" :active="request()->is('myprograms')">Lihat Program Yang Diikuti</x-nav-link>
              <x-nav-link href="/profile" :active="request()->is('profile')">Kelola Biodata Peserta</x-nav-link>
              <form method="POST" action="{{ route('logout') }}" id="logout-form">
    @csrf

    <x-nav-link href="{{ route('logout') }}"
        onclick="event.preventDefault(); 
                 if (confirm('Apakah Anda yakin ingin logout?')) {
                     document.getElementById('logout-form').submit();
                 }">
        {{ __('Log Out') }}
    </x-nav-link>
</form>

              @else
              <x-nav-link href="/register" :active="request()->is('profile')">Registrasi Pendaftaran</x-nav-link>
              <x-nav-link href="/galeri" :active="request()->is('galeri')">Galeri</x-nav-link>
              <x-nav-link href="/programs" :active="request()->is('programs')">Daftar Program</x-nav-link>
              @endauth
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">

            <!-- Profile dropdown -->
            @if (Route::has('login'))
                    <div>
                        @auth
            <div class="relative ml-3">
              </div>
            </div>
          </div>
          @else
                            <a href="{{ route('login') }}" class="bg-white text-blue-700 hover:bg-blue-100 px-4 py-2 rounded-lg font-medium transition-colors">Log in</a>
                        @endauth
                    </div>
                @endif
        </div>


         
        <div class="-mr-2 flex md:hidden">

          <button type="button" @click="isOpen = !isOpen"
          class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>

            <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>

            <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>

          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <x-nav-link-mobile href="/" :active="request()->is('')">dashboard</x-nav-link-mobile>
        <x-nav-link-mobile href="/profile" :active="request()->is('profile')">Profile</x-nav-link-mobile>
        <x-nav-link-mobile href="/galeri" :active="request()->is('galeri')">Galeri</x-nav-link-mobile>
        <x-nav-link-mobile href="/pendaftaran" :active="request()->is('pendaftaran')">Pendaftaran</x-nav-link-mobile> 
        <x-nav-link-mobile href="/program" :active="request()->is('program')">Program</x-nav-link-mobile> 
        <x-nav-link-mobile href="/sertifikasi" :active="request()->is('sertifikasi')">Sertifikasi</x-nav-link-mobile> 
        <x-nav-link-mobile href="/template" :active="request()->is('template')">Template</x-nav-link-mobile> 
      </div>
      <div class="border-t border-gray-700 pt-4 pb-3">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white">Tom Cook</div>
            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
          </div>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Kelola Data Pribadi</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
        </div>
      </div>
    </div>
</nav> 