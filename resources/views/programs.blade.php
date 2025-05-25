<x-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Enrolled Programs Section -->
            <div class="mb-12">
                <h1 class="text-3xl font-bold text-center text-blue-700 mb-4">Program Yang Anda Ikuti</h1>
                <p class="text-center text-gray-600 mb-8">Comprehensive training programs designed to build your skills from the ground up</p>
            
                @if(isset($enrolledPrograms) && $enrolledPrograms->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($enrolledPrograms as $program)
                            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                                <img src="{{ asset($program->image_path) }}" alt="{{ $program->title }}" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <span class="inline-block bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded-md mb-2">{{ $program->category }}</span>
                                    <h2 class="text-lg font-bold mb-2">{{ $program->title }}</h2>
                                    <p class="text-gray-600 text-sm mb-4">{{ $program->description }}</p>
                                    <div class="flex justify-between items-center">
                                        <span class="font-bold">FREE</span>
                                        <span class="text-sm text-gray-500">{{ $program->duration_weeks }} weeks</span>
                                    </div>
                                </div>
                                <a href="/detail">
                                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition">
                                            Detail Program
                                        </button>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center text-gray-500 py-8">
                        <p>Anda belum mengikuti program apapun.</p>
                    </div>
                @endif
            </div>
            
            <!-- Suggested Programs Section -->
            <div>
                <h1 class="text-3xl font-bold text-center text-blue-700 mb-4">Program Lain Yang Bisa Anda Ikuti</h1>
                <p class="text-center text-gray-600 mb-8">Comprehensive training programs designed to build your skills from the ground up</p>
            
                @if(isset($suggestedPrograms) && $suggestedPrograms->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($suggestedPrograms as $program)
                            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                                <img src="{{ asset($program->image_path) }}" alt="{{ $program->title }}" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <span class="inline-block bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded-md mb-2">{{ $program->category }}</span>
                                    <h2 class="text-lg font-bold mb-2">{{ $program->title }}</h2>
                                    <p class="text-gray-600 text-sm mb-4">{{ $program->description }}</p>
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="font-bold">Rp {{ number_format($program->price, 0, ',', '.') }}</span>
                                        <span class="text-sm text-gray-500">{{ $program->duration_weeks }} weeks</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center text-gray-500 py-8">
                        <p>No suggested programs available.</p>
                    </div>
                @endif
            </div>
            
        </div>
    </div>
</x-layout>