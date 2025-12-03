<x-blehout>
    <p>Meld tyveri</p>
    <p>Sykkeltyveri er så 💩 Nå gjelder det å handle raskt!</p>

    <p>Gjør dette:</p>

        <p>Ta bilder</p>
        <p>Sjekk posisjon</p>
        <p>Ring politiet</p>

    <!-- Theft form at ..../thefts/create  -->
    <form method="POST" action="/thefts">
        @csrf

        <div>
            <!-- <label for="bike_thief_hunt_started">I start a bike_thief_hunt</label> -->
            <br />
            <!-- placeholder="bike_thief_hunt_started"  -->
            <input 
                type="hidden" 
                id="title" 
                name="title" 
                value="bike_thief_hunt_started"
                
            />
            
        
        </div>        
            @error("title")
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <!-- <label for="bike_thief_hunt_started">I start a bike_thief_hunt</label> -->
            
            <!-- placeholder="bike_thief_hunt_started"  -->
            <input 
                type="hidden" 
                id="salary" 
                name="salary" 
                value="start"
                
            />
            
        </div>        
            @error("salary")
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-emerald-800 bg-white border-2 border-emerald-800 shadow-lg dark:shadow-lg dark:shadow-emerald-700 leading-5 rounded-md hover:bg-yellow-400 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-emerald-800 transition ease-in-out duration-150 dark:bg-yellow-100 dark:border-emerald-800 dark:text-emerald-800 dark:focus:border-blue-700 dark:active:bg-yellow-100 dark:active:text-emerald-800">Start</button>
            <br />
            
        </div>
        
    </form>
    <p>Hvis det ikke får sykkelen tilbake, kobler vi på Whee! verksted og etterforsker (utløser egenandel).<p>
        
    <p>2. Sjekk hvor sykkelen er</p>

    <p>3. Varsle og anmelde</p>
</x-blehout>