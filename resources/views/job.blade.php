<x-layout>
    <x-slot:heading>
        Tale
    </x-slot:heading>

    <h2 class="font-bold text-2xl">{{ $job['title'] }}</h2>

    <p>
        {{ $job['salary'] }}
    </p>
</x-layout>