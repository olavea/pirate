<x-layout>
    <x-slot:heading>
         
        <span
        class="font-black text-transparent
            bg-clip-text bg-gradient-to-r
            from-pink-300 to-orange-600
            dark:from-pink-400 dark:to-orange-600"
        >
            All  
        </span> 
        <span
        class="font-black text-transparent
            bg-clip-text bg-gradient-to-r
            from-yellow-400 to-green-500 text-9xl
            dark:from-yellow-400 dark:to-green-500"
        >
            Tall
        </span>
        <span
        class="font-black text-transparent
            bg-clip-text bg-gradient-to-r
            from-blue-300 to-purple-600
            dark:from-blue-400 dark:to-purple-500"
        >
        Tales 
        </span>
    
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