<x-layout>
    <x-slot:heading>
        Tall Tales ⛵ 
        
    
    </x-slot:heading>
    <br />
    <ul>
        @foreach ($jobs as $job)
            <li class="hover:underline ">
                <a href="/jobs/{{ $job['id'] }}">
                    {{ $job['title'] }}. 
                </a>
            </li>
        @endforeach    
</ul>
</x-layout>