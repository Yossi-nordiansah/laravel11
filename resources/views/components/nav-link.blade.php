@props(['active' => false])

<a {{ $attributes }} class="hover:text-blue-600 {{ $active ? 'bg-green-400' : '' }} px-4 py-5">{{ $slot }}</a>