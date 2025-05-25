@props([
    'image',
    'alt',
    'category',
    'title',
    'description',
    'price',
    'duration',
    'link'
])

<div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform hover:-translate-y-1">
    <div class="h-48 overflow-hidden">
        <img src="{{ $image }}" alt="{{ $alt }}" class="w-full h-full object-cover"
             onerror="this.src='/api/placeholder/400/200'; this.alt='{{ $alt }} placeholder'">
    </div>
    <div class="p-6">
        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $category }}</span>
        <h3 class="text-xl font-bold text-gray-900 mt-2">{{ $title }}</h3>
        <p class="text-gray-600 mt-2">{{ $description }}</p>
        <div class="mt-4 flex justify-between items-center">
            <span class="text-blue-700 font-bold">{{ $price }}</span>
            <span class="text-gray-500 text-sm">{{ $duration }}</span>
        </div>
        <a href="{{ $link }}" class="mt-4 block text-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded-lg transition-colors">View Details</a>
    </div>
</div>
