<x-blehout>
    <x-slot:heading>
        Sykkeltyveri
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

            <div class="flex flex-col gap-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                
                <button 
                    type="submit" 
                    class="rounded-lg bg-green-600 px-6 py-3 font-medium text-white transition-colors hover:bg-green-700"
                >
                    Jeg har tatt bilder
                </button>                
                <a 
                    class="text-center text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
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