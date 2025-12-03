<x-blehout>
    <x-slot:heading>
        Min Side
    </x-slot:heading>
    
    <p>Trinn 2 av 3</p>
    <h2>2. Sjekk hvor sykkelen  er</h2>

    <a href="#">Åpne: Hvor er/find my → objekter. </a>

    <p>Velg Whee! - ditt navn</p>
    



    <!-- Theft form at http://whee-laravel.test/thefts/{id}/2-find  -->
    <form method="POST" action="/thefts/2-find" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        
        <div>
            <!-- <label for="find_my_activated">find_my_activated </label> -->
            <br />
            <!-- hide type="string" -->
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

        <div>
            
            <br />
            <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <x-button href="/thefts/edit" :active="request()->is('/thefts/edit')">Tilbake</x-button>
                <button 
                    type="submit" 
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-emerald-800 bg-white border-2 border-emerald-800 shadow-lg dark:shadow-lg dark:shadow-emerald-700 leading-5 rounded-md hover:bg-yellow-400 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-emerald-800 transition ease-in-out duration-150 dark:bg-yellow-100 dark:border-emerald-800 dark:text-emerald-800 dark:focus:border-blue-700 dark:active:bg-yellow-100 dark:active:text-emerald-800"
                >
                    Ok, gå videre
                </button>                
                
                
            </div>



            <br />
            
            <br />
            <a href="/thefts/2-find-not">Det går ikke</a>
            <!-- <div>
                <label for="find_my_not_working">find_my_not_working </label>
                <br />
                <input 
                    type="string" 
                    id="find_my_not_working" 
                    name="find_my_not_working" 
                    value="find_my_not_working" 
                />
            </div> 
                
            <div>        
                @error("find_my_not_working")
                    <p>{{ $message }}</p>
                @enderror
            </div>
            
            -->
        </div>
    </form>
    <p>Hvis du ikke har iphone, eller ikke kan finne airtagen.</p>
</x-blehout>