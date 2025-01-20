<x-layout>
    <x-slot:heading>
        ⛵ Tall Tales
        
    
    </x-slot:heading>
    <ul>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}">
                {{ $job['title'] }} {{ $job['salary'] }}. 
            </a>
        </li>
    @endforeach    
</ul>
</x-layout>