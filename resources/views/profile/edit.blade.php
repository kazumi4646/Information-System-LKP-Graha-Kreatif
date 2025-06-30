<x-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit User: ') . $user->name }}
            </h2>
            <a href="{{ route('admin.users') }}" 
               class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Back to Users
            </a>
        </div>
    </x-slot>

    @php
        $readonly = auth()->user()->role !== 'admin' ? 'readonly' : '';
        $disabled = auth()->user()->role !== 'admin' ? 'disabled' : '';
        $isAdmin = auth()->user()->role === 'admin';
    @endphp

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.users.update', $user) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <!-- Kolom Kiri - Editable Fields for All -->
                            <div>
                                <!-- Email -->
                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" 
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('email') border-red-500 @enderror">
                                    @error('email')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Alamat -->
                                <div class="mb-4">
                                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                                    <textarea name="alamat" id="alamat" rows="3"
                                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('alamat') border-red-500 @enderror">{{ old('alamat', $user->alamat) }}</textarea>
                                    @error('alamat')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="mb-4">
                                    <label for="password" class="block text-sm font-medium text-gray-700">Password Baru</label>
                                    <input type="password" name="password" id="password" 
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('password') border-red-500 @enderror">
                                    <p class="mt-1 text-sm text-gray-600">Kosongkan jika tidak ingin mengubah password</p>
                                    @error('password')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Konfirmasi Password -->
                                <div class="mb-4">
                                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                </div>
                            </div>

                            <!-- Kolom Kanan - Readonly or Admin-only Fields -->
                            <div>
                                <!-- Name -->
                                <div class="mb-4">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" 
                                           {{ $readonly }}
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 @error('name') border-red-500 @enderror">
                                    @error('name')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Tanggal Lahir -->
                                <div class="mb-4">
                                    <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" 
                                           value="{{ old('tanggal_lahir', $user->tanggal_lahir->format('Y-m-d')) }}" 
                                           {{ $readonly }}
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 @error('tanggal_lahir') border-red-500 @enderror">
                                    @error('tanggal_lahir')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Role -->
                                <div class="mb-4">
                                    <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                                    <select name="role" id="role" {{ $disabled }}
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 @error('role') border-red-500 @enderror">
                                        <option value="user" {{ old('role', $user->role) === 'user' ? 'selected' : '' }}>User</option>
                                        <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>Admin</option>
                                    </select>
                                    @if(!$isAdmin)
                                        <input type="hidden" name="role" value="{{ $user->role }}">
                                    @endif
                                    @error('role')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Pas Foto -->
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-gray-700">Pas Foto Saat Ini</label>
                                    @if($user->pas_foto)
                                        <img src="{{ Storage::url($user->pas_foto) }}" alt="Pas Foto" class="mt-1 w-32 h-40 object-cover border border-gray-200 rounded">
                                    @else
                                        <p class="mt-1 text-sm text-gray-500">Belum ada pas foto</p>
                                    @endif
                                </div>

                                @if($isAdmin)
                                <!-- Upload Pas Foto -->
                                <div class="mb-4">
                                    <label for="pas_foto" class="block text-sm font-medium text-gray-700">Upload Pas Foto Baru</label>
                                    <input type="file" name="pas_foto" id="pas_foto" accept="image/*"
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                </div>
                                @endif

                                <!-- KK -->
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-gray-700">Kartu Keluarga Saat Ini</label>
                                    @if($user->kartu_keluarga)
                                        <img src="{{ Storage::url($user->kartu_keluarga) }}" alt="KK" class="mt-1 w-full max-w-xs h-auto object-cover border border-gray-200 rounded">
                                    @else
                                        <p class="mt-1 text-sm text-gray-500">Belum ada kartu keluarga</p>
                                    @endif
                                </div>

                                @if($isAdmin)
                                <!-- Upload KK -->
                                <div class="mb-4">
                                    <label for="kartu_keluarga" class="block text-sm font-medium text-gray-700">Upload KK Baru</label>
                                    <input type="file" name="kartu_keluarga" id="kartu_keluarga" accept="image/*"
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                </div>
                                @endif
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6 flex justify-end">
                            <button type="submit" 
                                    class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-6 rounded">
                                Update User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
