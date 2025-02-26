<x-layout>
    <x-slot:heading>
    ⛵Edit Your Tale: {{ $job['title']}}
    </x-slot:heading>
    <!-- 15:43 @csrf  -->
    <form method="POST" action="/jobs/{{ $job['id'] }}">
        @csrf 
        @method('PATCH')

    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
        
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm/6 font-bold text-gray-900">Title</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input 
                                type="text" 
                                name="title" 
                                id="title" 
                                class="block min-w-0 grow py-1.5 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" 
                                placeholder="BroGrammer"
                                value="{{ $job['title'] }}"
                                required 
                            >
                        </div>
                        @error('title')
                            <p class="text-red-500 font-bold">{{ $message }}</p>
                        @enderror
                    </div>
            
                <div class="sm:col-span-4 mt-6">
                    <label for="salary" class="block text-sm/6 font-bold text-gray-900">Salary</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input 
                                type="text" 
                                name="salary" 
                                id="salary" 
                                class="block min-w-0 grow py-1.5 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" 
                                placeholder="1 million $" 
                                value="{{ $job['salary'] }}"
                                required
                            >
                        </div>
                        @error('salary')
                            <p class="text-red-500 font-bold">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        </div>



    <div class="mt-6 flex items-center justify-between gap-x-6">
        <div class="flex items-center gap-x-6">
            <div>
                <button form="delete-form" class="text-red-600 font-bold" href="">Delete</button>
            </div>
        </div>
        <div class="flex items-center gap-x-6">
            <a href="/jobs/{{ $job['id'] }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <div>
                <button 
                    href="/jobs/{{ $job['id'] }}"
                    type="submit" 
                    class="rounded-xl bg-gradient-to-b from-yellow-300 to-orange-500 px-3 py-2 text-5xl font-bold text-white shadow-sm hover:bg-gradient-to-b hover:from-yellow-400 hover:to-orange-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >
                    Update
                </button>
            </div>
        </div>    
    </div>
    </form>
    <form method="POST" action="/jobs/{{ $job['id'] }}" class="hidden" id="delete-form">
        @csrf 
        @method('DELETE')
    </form>

</x-layout>