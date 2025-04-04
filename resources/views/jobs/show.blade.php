<x-layout>
    <x-slot:heading>
        Tale
    </x-slot:heading>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="https://pbs.twimg.com/media/GlMcr5zXMAAs92W?format=jpg&name=medium" class="img-fluid rounded-start" alt="Big Toe">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
    </div>

    <h2 class="font-bold text-2xl">{{ $job['title'] }}</h2>

    <p>
        {{ $job['salary'] }}
    </p class="mt-6">
    <x-button href="/jobs/{{ $job['id'] }}/edit">Edit Your tale</x-button>
</x-layout>