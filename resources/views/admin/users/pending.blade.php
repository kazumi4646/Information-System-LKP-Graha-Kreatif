<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Verifikasi Data Peserta') }}
            </h2>
            <span class="bg-orange-100 text-orange-800 text-sm font-medium px-3 py-1 rounded-full">
                {{ $users->total() }} Pending
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if($users->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($users as $user)
                                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-lg font-semibold text-gray-900">{{ $user->name }}</h3>
                                        <span class="bg-orange-100 text-orange-800 text-xs font-medium px-2 py-1 rounded-full">
                                            Pending
                                        </span>
                                    </div>
                                    
                                    <div class="space-y-2 mb-4">
                                        <p class="text-sm text-gray-600"><strong>Email:</strong> {{ $user->email }}</p>
                                        <p class="text-sm text-gray-600">
                                            <strong>Tanggal Lahir:</strong> 
                                            {{ $user->tanggal_lahir ? $user->tanggal_lahir->format('d F Y') : 'Belum diisi' }}
                                        </p>
                                        <p class="text-sm text-gray-600">
                                            <strong>Alamat:</strong> 
                                            {{ $user->alamat ? Str::limit($user->alamat, 50) : 'Belum diisi' }}
                                        </p>
                                        <p class="text-sm text-gray-600"><strong>Mendaftar:</strong> {{ $user->created_at->diffForHumans() }}</p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-2 mb-4">
                                        @if($user->pas_foto)
                                            <div>
                                                <p class="text-xs text-gray-500 mb-1">Pas Foto:</p>
                                                <img src="{{ Storage::url($user->pas_foto) }}" alt="Pas Foto" class="w-full h-24 object-cover rounded border">
                                            </div>
                                        @else
                                            <div>
                                                <p class="text-xs text-gray-500 mb-1">Pas Foto:</p>
                                                <div class="w-full h-24 bg-gray-100 rounded border flex items-center justify-center">
                                                    <span class="text-xs text-gray-400">Belum upload</span>
                                                </div>
                                            </div>
                                        @endif
                                        
                                        @if($user->kartu_keluarga)
                                            <div>
                                                <p class="text-xs text-gray-500 mb-1">Kartu Keluarga:</p>
                                                <img src="{{ Storage::url($user->kartu_keluarga) }}" alt="KK" class="w-full h-24 object-cover rounded border">
                                            </div>
                                        @else
                                            <div>
                                                <p class="text-xs text-gray-500 mb-1">Kartu Keluarga:</p>
                                                <div class="w-full h-24 bg-gray-100 rounded border flex items-center justify-center">
                                                    <span class="text-xs text-gray-400">Belum upload</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.users.show', $user) }}" 
                                           class="flex-1 bg-blue-500 hover:bg-blue-700 text-white text-center py-2 px-3 rounded text-sm font-medium transition-colors">
                                            Detail
                                        </a>
                                        
                                        <form action="{{ route('admin.users.approve', $user) }}" method="POST" class="flex-1">
                                            @csrf
                                            <button type="submit" 
                                                    class="w-full bg-green-500 hover:bg-green-700 text-white py-2 px-3 rounded text-sm font-medium transition-colors"
                                                    onclick="return confirm('Setujui pendaftaran user ini?')">
                                                Setujui
                                            </button>
                                        </form>
                                        
                                        <form action="{{ route('admin.users.reject', $user) }}" method="POST" class="flex-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="w-full bg-red-500 hover:bg-red-700 text-white py-2 px-3 rounded text-sm font-medium transition-colors"
                                                    onclick="return confirm('Tolak dan hapus pendaftaran user ini?')">
                                                Tolak
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                        <div class="mt-6">
                            {{ $users->links() }}
                        </div>
                    @else
                        <div class="text-center py-12">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900">Tidak ada pendaftaran pending</h3>
                            <p class="mt-1 text-sm text-gray-500">Semua pendaftaran sudah diverifikasi.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>