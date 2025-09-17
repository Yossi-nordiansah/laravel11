<x-layout>
    <x-slot:title>{{ $post['title'] }}</x-slot:title>

    <div class="max-w-4xl mx-auto px-6 py-12">
        <!-- Judul -->
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 leading-tight text-center">
            {{ $post['title'] }}
        </h1>

        <!-- Informasi Penulis & Tanggal -->
        <div class="flex items-center justify-center text-gray-500 text-sm mb-8">
            <span class="mr-2">✍️</span> 
            <a href="/authors/{{ $post->author->id }}" class="font-medium text-blue-600">{{ $post->author->name }}</a>
            <span class="mx-2">|</span>
            <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            <span class="mx-2">|</span>
            <span>{{ $post->updated_at->diffForHumans() }}</span>
        </div>

        <!-- Gambar Besar -->
        <div class="rounded-2xl overflow-hidden shadow-lg mb-10">
            <img src="https://source.unsplash.com/1200x600?tech,code,programming&sig={{ $post['id'] }}" 
                 alt="Thumbnail {{ $post['title'] }}" 
                 class="w-full h-[400px] object-cover">
        </div>

        <!-- Konten Artikel -->
        <article class="prose prose-lg max-w-none text-gray-800 leading-relaxed">
            {!! nl2br(e($post['body'])) !!}
        </article>

        <!-- Tombol Kembali -->
        <div class="mt-12 flex justify-center">
            <a href="/blog" 
               class="px-6 py-3 bg-blue-600 text-white font-medium rounded-xl shadow-md hover:bg-blue-700 transition">
                ← Kembali ke Blog
            </a>
        </div>
    </div>
</x-layout>
