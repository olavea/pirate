<x-layout>
    <x-slot:heading>
        Tale
    </x-slot:heading>

    <h2 class="font-bold text-2xl">{{ $job['title'] }}</h2>

    <p>
        {{ $job['salary'] }}
    </p class="mt-6">
    <x-button href="/jobs/{{ $job['id'] }}/edit">Edit Your tale</x-button>
</x-layout>