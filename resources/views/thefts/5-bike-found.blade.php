<x-blehout>
    <x-slot:heading>
        Sykkeltyveri
    </x-slot:heading>
    <h2>5. Sykkelen vår er gjenfunnet 🥳</h2>
    <form method="POST" action="/thefts/5-bike-found">
    
    @method('PATCH')
    @csrf



        <div>
            <!-- <label for="bike_found">bike_found </label> -->
            <br />
            <input 
                type="hidden" 
                id="salary" 
                name="salary" 
                value="bike_found" 
            />
            
        </div>        
        <div>
            @error("bike_found")
                <p>{{ $message }}</p>
            @enderror
        </div>             
        <div>
            <button type="submit" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-emerald-800 bg-white border-2 border-emerald-800 shadow-lg dark:shadow-lg dark:shadow-emerald-700 leading-5 rounded-md hover:bg-yellow-400 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-emerald-800 transition ease-in-out duration-150 dark:bg-yellow-100 dark:border-emerald-800 dark:text-emerald-800 dark:focus:border-blue-700 dark:active:bg-yellow-100 dark:active:text-emerald-800">
                Sykkelen er gjenfunnet 🥳
            </button>
            <br />
            <a href="/">Tilbake til hjem</a>
        </div>  

    </x-blehout>
</form> 