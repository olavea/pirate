<x-layout>
    <x-slot:heading>
        Tale
    </x-slot:heading>

    <h2 class="font-bold text-2xl md:text-4xl lg:text-6xl  xl:text-8xl  2xl:text-10xl">{{ $job['title'] }}</h2>

    <p>
        {{ $job['salary'] }}
    </p>
</x-layout>