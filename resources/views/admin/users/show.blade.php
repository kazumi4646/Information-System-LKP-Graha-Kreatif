<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detail User: ') . $user->name }}
            </h2>
            <div class="flex space-x-2">
                @if(!$user->is_approved)
                    <a href="{{ route('admin.users.pending') }}" 
                       class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        Back to Pending
                    </a>
                @else
                    <a href="{{ route('admin.users') }}" 
                       class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        Back to Users
                    </a>
                @endif
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- User Information -->
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Pribadi</h3>
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                    <p class="mt-1 text-sm text-gray-900">{{ $user->name }}</p>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Email</label>
                                    <p class="mt-1 text-sm text-gray-900">{{ $user->email }}</p>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                                    <p class="mt-1 text-sm text-gray-900">{{ $user->tanggal_lahir->format('d F Y') }}</p>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Alamat</label>
                                    <p class="mt-1 text-sm text-gray-900">{{ $user->alamat }}</p>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Role</label>
                                    <span class="mt-1 px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                        {{ $user->role === 'admin' ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800' }}">
                                        {{ ucfirst($user->role) }}
                                    </span>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Status</label>
                                    <span class="mt-1 px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                        {{ $user->is_approved ? 'bg-green-100 text-green-800' : 'bg-orange-100 text-orange-800' }}">
                                        {{ $user->is_approved ? 'Approved' : 'Pending' }}
                                    </span>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Tanggal Mendaftar</label>
                                    <p class="mt-1 text-sm text-gray-900">{{ $user->created_at->format('d F Y H:i') }}</p>
                                </div>
                                
                                @if($user->is_approved && $user->approved_at)
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Disetujui Pada</label>
                                        <p class="mt-1 text-sm text-gray-900">{{ $user->approved_at->format('d F Y H:i') }}</p>
                                    </div>
                                    
                                    @if($user->approvedBy)
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">Disetujui Oleh</label>
                                            <p class="mt-1 text-sm text-gray-900">{{ $user->approvedBy->name }}</p>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>

                        <!-- Documents -->
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Dokumen</h3>
                            
                            <div class="space-y-6">
                                @if($user->pas_foto)
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Pas Foto</label>
                                        <img src="{{ Storage::url($user->pas_foto) }}" alt="Pas Foto" 
                                             class="w-48 h-60 object-cover border border-gray-200 rounded-lg shadow-sm">
                                        <a href="{{ Storage::url($user->pas_foto) }}" target="_blank" 
                                           class="mt-2 inline-block text-blue-600 hover:text-blue-800 text-sm">
                                            Lihat ukuran penuh
                                        </a>
                                    </div>
                                @endif
                                
                                @if($user->kartu_keluarga)
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Kartu Keluarga</label>
                                        <img src="{{ Storage::url($user->kartu_keluarga) }}" alt="Kartu Keluarga" 
                                             class="w-full max-w-md h-auto object-cover border border-gray-200 rounded-lg shadow-sm">
                                        <a href="{{ Storage::url($user->kartu_keluarga) }}" target="_blank" 
                                           class="mt-2 inline-block text-blue-600 hover:text-blue-800 text-sm">
                                            Lihat ukuran penuh
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    @if(!$user->is_approved)
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <div class="flex justify-center space-x-4">
                                <form action="{{ route('admin.users.approve', $user) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" 
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-6 rounded"
                                            onclick="return confirm('Setujui pendaftaran user ini?')">
                                        Setujui Pendaftaran
                                    </button>
                                </form>
                                
                                <form action="{{ route('admin.users.reject', $user) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-6 rounded"
                                            onclick="return confirm('Tolak dan hapus pendaftaran user ini?')">
                                        Tolak Pendaftaran
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>