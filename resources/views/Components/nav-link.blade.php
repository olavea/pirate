
@props(['active' => false])

<a class="{{ $active ? 'bg-yellow-300 drop-shadow-xl font-extrabold text-black ': 'text-black font-black hover:bg-yellow-300 hover:text-black hover:font-black'}} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page': 'false' }}"
   {{ $attributes }}
>{{ $slot }}</a>