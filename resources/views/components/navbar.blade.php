<nav style="background-color: #1D4ED8; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 0;" x-data="{ isOpen: false }">
  <div style="max-width: 112rem; margin: 0 auto; padding-left: 1rem; padding-right: 1rem;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 1rem; display: flex; justify-content: space-between; align-items: center;">
      <div style="display: flex; align-items: center;">
        <div style="display: flex; align-items: center;">
          <div style="color: white; font-weight: bold; font-size: 1.5rem;">LKP Graha Kreatif</div>
        </div>
        <div style="display: none;" class="md:block">
          <div style="margin-left: 2.5rem; display: flex; align-items: baseline; gap: 1rem;">
            <x-nav-link href="/" :active="request()->is('/')">Dashboard</x-nav-link>
            @auth
            <x-nav-link href="/myprograms" :active="request()->is('myprograms')">Lihat Program Yang Diikuti</x-nav-link>
            <x-nav-link href="/profile" :active="request()->is('profile')">Kelola Biodata Peserta</x-nav-link>
            <form method="POST" action="{{ route('logout') }}" id="logout-form">
              @csrf
              <x-nav-link href="{{ route('logout') }}"
                onclick="event.preventDefault(); if (confirm('Apakah Anda yakin ingin logout?')) { document.getElementById('logout-form').submit(); }">
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
      <div style="display: none;" class="md:block">
        <div style="margin-left: 1rem; display: flex; align-items: center;">
          @if (Route::has('login'))
          <div>
            @auth
            <div style="position: relative; margin-left: 0.75rem;"></div>
          </div>
        </div>
        @else
        <a href="{{ route('login') }}" style="background-color: white; color: #1D4ED8; padding: 0.5rem 1rem; border-radius: 0.5rem; font-weight: 500; text-decoration: none; transition: background-color 0.3s;">Log in</a>
        @endauth
        </div>
        @endif
      </div>
      <div style="margin-right: -0.5rem; display: flex;" class="md:hidden">
        <button type="button" @click="isOpen = !isOpen"
          style="position: relative; display: inline-flex; align-items: center; justify-content: center; border-radius: 0.375rem; background-color: #1F2937; padding: 0.5rem; color: #9CA3AF; transition: background-color 0.3s, color 0.3s; outline: none;"
          aria-controls="mobile-menu" aria-expanded="false">
          <span style="position: absolute; inset: -0.125rem;"></span>
          <span class="sr-only">Open main menu</span>
          <svg :class="{'hidden': isOpen, 'block': !isOpen }" style="display: block; width: 1.5rem; height: 1.5rem;" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg :class="{'block': isOpen, 'hidden': !isOpen }" style="display: none; width: 1.5rem; height: 1.5rem;" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>
  <div x-show="isOpen" class="md:hidden" id="mobile-menu">
    <div style="display: flex; flex-direction: column; gap: 0.25rem; padding: 0.5rem 1rem 0.75rem 1rem;">
      <x-nav-link-mobile href="/" :active="request()->is('')">dashboard</x-nav-link-mobile>
      <x-nav-link-mobile href="/profile" :active="request()->is('profile')">Profile</x-nav-link-mobile>
      <x-nav-link-mobile href="/galeri" :active="request()->is('galeri')">Galeri</x-nav-link-mobile>
      <x-nav-link-mobile href="/pendaftaran" :active="request()->is('pendaftaran')">Pendaftaran</x-nav-link-mobile>
      <x-nav-link-mobile href="/program" :active="request()->is('program')">Program</x-nav-link-mobile>
      <x-nav-link-mobile href="/sertifikasi" :active="request()->is('sertifikasi')">Sertifikasi</x-nav-link-mobile>
      <x-nav-link-mobile href="/template" :active="request()->is('template')">Template</x-nav-link-mobile>
    </div>
    <div style="border-top: 1px solid #374151; padding-top: 1rem; padding-bottom: 0.75rem;">
      <div style="display: flex; align-items: center; padding: 0 1.25rem;">
        <div style="flex-shrink: 0;">
          <img style="width: 2.5rem; height: 2.5rem; border-radius: 9999px;" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        </div>
        <div style="margin-left: 0.75rem;">
          <div style="font-size: 1rem; line-height: 1.25; font-weight: 500; color: white;">Tom Cook</div>
          <div style="font-size: 0.875rem; font-weight: 500; color: #9CA3AF;">tom@example.com</div>
        </div>
      </div>
      <div style="margin-top: 0.75rem; display: flex; flex-direction: column; gap: 0.25rem; padding: 0 1rem;">
        <a href="#" style="display: block; border-radius: 0.375rem; padding: 0.5rem 0.75rem; font-size: 1rem; font-weight: 500; color: #9CA3AF; text-decoration: none; transition: background-color 0.3s, color 0.3s;">Kelola Data Pribadi</a>
        <a href="#" style="display: block; border-radius: 0.375rem; padding: 0.5rem 0.75rem; font-size: 1rem; font-weight: 500; color: #9CA3AF; text-decoration: none; transition: background-color 0.3s, color 0.3s;">Sign out</a>
      </div>
    </div>
  </div>
</nav>
