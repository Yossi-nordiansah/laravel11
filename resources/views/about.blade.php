<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Hero Section -->
    <section class="relative">
        <img src="https://source.unsplash.com/1600x600/?office,work" alt="Random Office" class="w-full h-64 object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <h2 class="text-4xl font-bold text-white">Get in Touch</h2>
        </div>
    </section>

    <!-- Contact Content -->
    <main class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-10">

        <!-- Contact Info -->
        <div>
            <h3 class="text-2xl font-bold mb-4">Contact Information</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero incidunt deleniti fuga
                molestias.</p>
            <ul class="space-y-4">
                <li><span class="font-semibold">📍 Address:</span> 123 Random Street, Wonderland</li>
                <li><span class="font-semibold">📞 Phone:</span> +62 812 3456 7890</li>
                <li><span class="font-semibold">✉️ Email:</span> contact@mycompany.com</li>
            </ul>
            <img src="https://source.unsplash.com/500x300/?team,people" alt="Random Team"
                class="mt-6 rounded-lg shadow-md">
        </div>

        <!-- Contact Form -->
        <div>
            <h3 class="text-2xl font-bold mb-4">Send Us a Message</h3>
            <form action="#" class="space-y-4 bg-white p-6 rounded-lg shadow-md">
                <div>
                    <label class="block font-semibold mb-1">Your Name</label>
                    <input type="text"
                        class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-indigo-200"
                        placeholder="Enter your name">
                </div>
                <div>
                    <label class="block font-semibold mb-1">Email Address</label>
                    <input type="email"
                        class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-indigo-200"
                        placeholder="Enter your email">
                </div>
                <div>
                    <label class="block font-semibold mb-1">Message</label>
                    <textarea rows="4" class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-indigo-200"
                        placeholder="Write your message..."></textarea>
                </div>
                <button type="submit"
                    class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                    Send Message
                </button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-12">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p>&copy; 2025 MyCompany. All rights reserved.</p>
        </div>
    </footer>
</x-layout>
