<x-blehout>
    <x-slot:heading>
        Min Side
    </x-slot:heading>
    <p>Trinn 2 av 3</p>

    <h2>2. Airtag hjelp</h2>

    <p>Brukte du rett telefon til å</p> 
    <a 
        href="#"
        class="underline text-orange-600"
    >
        Åpne: Hvor er/find my → objekter. 
    </a>

    <p>Velg Whee! - ditt navn</p>

    <!-- Theft form at http://whee-laravel.test/thefts/{id}/2-find-not  -->
    <form 
        method="POST" 
        action="/thefts/2-find-not" 
        class="flex flex-col gap-4"
    >
        @method('PATCH')
        @csrf
        
        <div>
            <!-- <label for="find_my_activated">find_my_activated</label> -->
            <br />
            <input 
                type="hidden" 
                id="salary" 
                name="salary" 
                value="find_my_activated" 
            />
            
        </div>        
            @error("salary")
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="ml-10">
        
            <button 
                type="submit" 
                class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-emerald-800 bg-white border-2 border-emerald-800 shadow-lg dark:shadow-lg dark:shadow-emerald-700 leading-5 rounded-md hover:bg-yellow-400 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-emerald-800 transition ease-in-out duration-150 dark:bg-yellow-100 dark:border-emerald-800 dark:text-emerald-800 dark:focus:border-blue-700 dark:active:bg-yellow-100 dark:active:text-emerald-800"
            >
                Det funker nå!
            </button>
            <a
                href="/thefts/3-wheereport"
                class="rounded-lg border-2 border-gray-200 px-6 py-3 font-medium text-gray-700 transition-colors hover:border-gray-400 hover:bg-gray-50"
            >
                AirTag er koblet til Whee! verksted
            </a>
            <a
                href="/thefts/3-wheereport"
                class="text-center text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
            >
                Jeg gir opp - gå videre
            </a>
        </div>    
        
    </form>
</x-blehout>