<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="max-w-4xl mx-auto px-6 py-16">

        <!-- Heading -->
        <h1 class="text-4xl font-extrabold text-blue-600 mb-6 text-center">
            Apa itu Laravel?
        </h1>

        <!-- Card -->
        <div class="bg-white shadow-lg rounded-2xl p-8">
            <p class="text-lg leading-relaxed mb-6">
                <span class="font-semibold">Laravel</span> adalah sebuah <span class="text-blue-600 font-medium">framework
                    PHP</span>
                yang digunakan untuk pengembangan aplikasi web. Dikenal karena sintaksisnya yang elegan dan kemudahan
                penggunaan,
                Laravel memungkinkan pengembang membangun aplikasi dengan cepat dan efisien.
            </p>

            <!-- Fitur Utama -->
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Fitur Utama Laravel:</h2>
            <ul class="space-y-3">
                <li class="flex items-start">
                    <span class="text-blue-600 font-bold mr-2">✔</span>
                    <span><strong>MVC (Model-View-Controller)</strong>: Memisahkan logika aplikasi dari tampilan,
                        sehingga lebih terorganisir.</span>
                </li>
                <li class="flex items-start">
                    <span class="text-blue-600 font-bold mr-2">✔</span>
                    <span><strong>Routing yang Mudah</strong>: Sistem routing yang intuitif dan jelas.</span>
                </li>
                <li class="flex items-start">
                    <span class="text-blue-600 font-bold mr-2">✔</span>
                    <span><strong>Eloquent ORM</strong>: Interaksi database lebih mudah dengan model.</span>
                </li>
                <li class="flex items-start">
                    <span class="text-blue-600 font-bold mr-2">✔</span>
                    <span><strong>Middleware</strong>: Memfilter permintaan HTTP yang masuk.</span>
                </li>
                <li class="flex items-start">
                    <span class="text-blue-600 font-bold mr-2">✔</span>
                    <span><strong>Keamanan</strong>: Proteksi terhadap SQL injection, XSS, dan serangan umum
                        lainnya.</span>
                </li>
                <li class="flex items-start">
                    <span class="text-blue-600 font-bold mr-2">✔</span>
                    <span><strong>Komunitas & Dokumentasi</strong>: Komunitas besar dan dokumentasi lengkap.</span>
                </li>
            </ul>

            <!-- Closing -->
            <p class="mt-6 text-lg">
                Laravel banyak digunakan untuk membangun aplikasi web skala kecil hingga besar,
                termasuk <span class="font-medium text-blue-600">e-commerce, CMS, dan sistem bisnis lainnya</span>.
            </p>
        </div>
    </div>
</x-layout>
