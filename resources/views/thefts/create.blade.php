<x-blehout>
    <x-slot:heading>
        Tyveri
    </x-slot:heading>
    <div class="max-w-4xl space-y-6">
        <div class="space-y-4">
            <div class="space-y-1 text-center">
                <p class="text-4xl">💩</p>
                <h2 class="text-2xl font-semibold text-gray-900">Sykkeltyveri er kjipt!</h2>
                <p class="text-gray-600">Men vi hjelper deg gjennom dette.</p>
            </div>
            <p>Nå gjelder det å handle raskt!</p>

            
            <p>1. Ta bilder</p>
            <p>2. Sjekk posisjon</p>
            <p>3. Ring politiet</p>
            <p>Hvis dette ikke får sykkelen tilbake, kjører vi plan B.<p>
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
                    <button 
                        type="submit" 
                        class="w-full rounded-lg bg-green-600 px-6 py-3 text-lg font-medium text-white transition-colors hover:bg-green-700"
                    >
                        Start
                    </button>
                    <br />
                    
                </div>
                
            </form>
            <a
                href="/"
                class="block text-center text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
            >
                Avbryt
            </a>

                
        </div>
    </div>
</x-blehout>