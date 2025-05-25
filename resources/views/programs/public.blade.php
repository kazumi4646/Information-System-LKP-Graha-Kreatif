<x-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- All Programs Section -->
            <div>
                <h1 class="text-3xl font-bold text-center text-blue-700 mb-4">Program Pelatihan Tersedia</h1>
                <p class="text-center text-gray-600 mb-8">Comprehensive training programs designed to build your skills from the ground up</p>
            
                @if(isset($programs) && $programs->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($programs as $program)
                            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                                <img src="{{ asset($program->image_path) }}" alt="{{ $program->title }}" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <span class="inline-block bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded-md mb-2">{{ $program->category }}</span>
                                    <h2 class="text-lg font-bold mb-2">{{ $program->title }}</h2>
                                    <p class="text-gray-600 text-sm mb-4">{{ $program->description }}</p>
                                    <div class="flex justify-between items-center mb-4">
                                        @if($program->price == 0)
                                            <span class="font-bold text-green-600">FREE</span>
                                        @else
                                            <span class="font-bold">Rp {{ number_format($program->price, 0, ',', '.') }}</span>
                                        @endif
                                        <span class="text-sm text-gray-500">{{ $program->duration_weeks }} weeks</span>
                                    </div>
                                </div>
                                <div class="px-6 pb-6">
                                    @auth
                                        <!-- Jika user sudah login, tampilkan tombol daftar -->
                                        <form action="{{ route('programs.enroll', $program->slug) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded transition">
                                                Daftar Program
                                            </button>
                                        </form>
                                    @else
                                        <!-- Jika user belum login, tampilkan tombol untuk login -->
                                        <a href="{{ route('login') }}" class="block">
                                            <button type="button" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition">
                                                Login untuk Mendaftar
                                            </button>
                                        </a>
                                    @endauth
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center text-gray-500 py-8">
                        <p>Belum ada program yang tersedia.</p>
                    </div>
                @endif
            </div>
            
        </div>
    </div>
</x-layout>