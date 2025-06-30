<x-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Kolom Kiri -->
                            <div>
                                <!-- Nama -->
                                <div class="mb-4">
                                    <x-input-label for="name" :value="__('Nama Lengkap')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email -->
                                <div class="mb-4">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Tanggal Lahir -->
                                <div class="mb-4">
                                    <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
                                    <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date"
                                        name="tanggal_lahir" :value="old('tanggal_lahir')" required />
                                    <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
                                </div>

                                <!-- Alamat -->
                                <div class="mb-4">
                                    <x-input-label for="alamat" :value="__('Alamat')" />
                                    <textarea id="alamat" name="alamat"
                                        class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        rows="3" required>{{ old('alamat') }}</textarea>
                                    <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mb-4">
                                    <x-input-label for="password" :value="__('Password')" />
                                    <x-text-input id="password" class="block mt-1 w-full" type="password"
                                        name="password" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Konfirmasi Password -->
                                <div class="mb-4">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div>
                                <!-- Program yang Ingin Diikuti -->
                                <div class="mb-4">
                                    <x-input-label for="program" :value="__('Program yang Ingin Diikuti')" />
                                    
                                    <select id="program" name="program" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                        <option value="" disabled selected>Pilih program</option>
                                        <option value="excel">Pelatihan Excel</option>
                                        <option value="programming">Pelatihan Pemrograman</option>
                                        <option value="desain">Pelatihan Desain Grafis</option>
                                    </select>

                                    <x-input-error :messages="$errors->get('program')" class="mt-2" />
                                </div>
                                <!-- Pas Foto -->
                                <div class="mb-4">
                                    <x-input-label for="pas_foto" :value="__('Pas Foto')" />
                                    <input id="pas_foto"
                                        class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        type="file" name="pas_foto" accept="image/*" required />
                                    <p class="text-sm text-gray-600 mt-1">Format: JPG, PNG, maksimal 2MB</p>
                                    <x-input-error :messages="$errors->get('pas_foto')" class="mt-2" />
                                </div>

                                <!-- Kartu Keluarga -->
                                <div class="mb-4">
                                    <x-input-label for="kartu_keluarga" :value="__('Kartu Keluarga')" />
                                    <input id="kartu_keluarga"
                                        class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        type="file" name="kartu_keluarga" accept="image/*" required />
                                    <p class="text-sm text-gray-600 mt-1">Format: JPG, PNG, maksimal 2MB</p>
                                    <x-input-error :messages="$errors->get('kartu_keluarga')" class="mt-2" />
                                </div>

                                <div class="mt-10 flex items-center justify-between">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('login') }}">
                                        {{ __('Sudah punya akun?') }}
                                    </a>

                                    <x-primary-button class="ml-4">
                                        {{ __('Register') }}
                                    </x-primary-button>
                                </div>

                                <div class="mt-4 p-4 bg-yellow-50 border border-yellow-200 rounded-md">
                                    <p class="text-sm text-yellow-800">
                                        <strong>Catatan:</strong> Setelah mendaftar, akun Anda perlu disetujui oleh admin sebelum dapat login.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
