<x-blehout>
    <x-slot:heading>
        Meld tyveri
    </x-slot:heading>

    <!-- Theft form at http://whee-laravel.test/thefts/{id}/edit  -->
    <form method="POST" action="/thefts/edit" enctype="multipart/form-data">
        @method("PATCH")
        @csrf
        <div class="space-y-12">    
            
            <h2 class="text-lg font-semibold">1. Ta bilder av åstedet</h2>

            <p>Ta bilder av hvor sykkelen sto, rester av lås eller annet som ligger igjen, brutt dørlås eller annet som kan virke relevant.</p>




            
            <div>
                <!-- <label for="photos">photos</label> -->
                <br />
                <input 
                    type="hidden" 
                    id="salary" 
                    name="salary" 
                    value="photos_taken" 
                />
                
            </div>        
                @error("salary")
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                
                <button 
                    type="submit" 
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-emerald-800 bg-white border-2 border-emerald-800 shadow-lg dark:shadow-lg dark:shadow-emerald-700 leading-5 rounded-md hover:bg-yellow-400 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-emerald-800 transition ease-in-out duration-150 dark:bg-yellow-100 dark:border-emerald-800 dark:text-emerald-800 dark:focus:border-blue-700 dark:active:bg-yellow-100 dark:active:text-emerald-800"
                >
                    Jeg har tatt bilder
                </button>                
                
                
            </div>
            <div>
                

                <br />

                <br />
                <a 
                    class="block text-center text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
                    href="/thefts/2-find"
                >
                    Hopp over
                </a>
            </div>
            

            
            <p>2. Sjekk hvor sykkelen er</p>

            <p>3. Varsle og anmelde</p>
        </div>    
    </form>    
</x-blehout>