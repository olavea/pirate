<x-layout>
    <x-slot:heading>
        ⛵ Tall Tales
        
    
    </x-slot:heading>
    <ul>
    @foreach ($tales as $tale)
        <a href="/tales/{{ $tale['id'] }}">
            <li>{{ $tale['title'] }} {{ $tale['intro'] }}. </li>
        </a>
    @endforeach    
</ul>
</x-layout>