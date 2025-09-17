<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="max-w-5xl mx-auto px-6 py-16">
        <h1 class="text-4xl font-extrabold text-blue-600 mb-10 text-center">
            {{ $title }}
        </h1>

        <div class="grid gap-8 md:grid-cols-2">
            @foreach ($post as $item)
                <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
                    <!-- Gambar random -->
                    <img src="https://source.unsplash.com/600x400?tech,code,programming&sig={{ $loop->index }}" 
                         alt="Thumbnail {{ $item['title'] }}" 
                         class="w-full h-48 object-cover">

                    <div class="p-6">
                        <h2 class="text-2xl font-bold mb-2 text-gray-800">
                            {{ $item['title'] }}
                        </h2>
                        <p class="text-sm text-gray-500 mb-4">
                            Oleh <a href="/authors/{{ $item->author->id }}" class="font-medium text-blue-600">{{ $item->author->name }}</a>
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            {{ Str::limit($item['body'], 200) }} 
                        </p>

                        <a href="/detail/{{ $item['slug'] }}" class="text-blue-600 font-medium hover:underline mt-4 inline-block">
                            Baca selengkapnya →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
