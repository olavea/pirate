
@props(['active' => false])

<a class="{{ $active ? 'bg-yellow-300 drop-shadow-xl  ': 'hover:bg-yellow-300  hover:text-white'}} font-black text-black rounded-md px-3 py-2"
   aria-current="{{ $active ? 'page': 'false' }}"
   {{ $attributes }}
>{{ $slot }}</a>