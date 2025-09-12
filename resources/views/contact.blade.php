<x-layout>
    <x-slot:title>
    <x-header>Contact Me</x-header>
    <div class="min-h-screen bg-gray-50 flex items-center justify-center py-12 px-4">
        <div class="max-w-4xl w-full bg-white shadow-lg rounded-2xl overflow-hidden">
            <div class="grid md:grid-cols-2">
                <!-- Gambar -->
                <div class="h-64 md:h-auto">
                    <img src="https://source.unsplash.com/random/600x600/?contact,office" alt="Contact"
                        class="w-full h-full object-cover">
                </div>

                <!-- Form Kontak -->
                <div class="p-8">
                    <h2 class="text-3xl font-bold text-blue-600 mb-6">Contact Us</h2>

                    <form action="#" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-gray-700">Name</label>
                            <input type="text" name="name"
                                class="w-full border rounded-lg px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                placeholder="Your Name">
                        </div>

                        <div>
                            <label class="block text-gray-700">Email</label>
                            <input type="email" name="email"
                                class="w-full border rounded-lg px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                placeholder="you@example.com">
                        </div>

                        <div>
                            <label class="block text-gray-700">Message</label>
                            <textarea name="message" rows="4"
                                class="w-full border rounded-lg px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                placeholder="Your message..."></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
