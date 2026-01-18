<x-blehout>
    <x-slot:heading>
        Min Side
    </x-slot:heading>
    
    <p>Trinn 2 av 3</p>
    <h2>2. Sjekk hvor sykkelen  er</h2>

    <a 
       href="#"
       class="underline"
    >
        Åpne: Hvor er/find my → objekter. 
    </a>

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
        <div>
            
            <br />
            <div class="flex flex-col gap-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                
                <button 
                    type="submit" 
                    class="rounded-lg bg-green-600 px-6 py-3 font-medium text-white transition-colors hover:bg-green-700"
                >
                    Jeg ser sykkelen i appen
                </button>                
                <a 
                    class="text-center text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
                    href="/thefts/2-find-not"
                >
                    Det funker ikke / jeg ser den ikke

                </a>
                
            </div>

  
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
    
    
</x-blehout>