<x-blehout>
    <x-slot:heading>
        Sykkeltyveri
    </x-slot:heading>
    <div class="max-w-4xl space-y-6">
        <div class="space-y-4">
            <div class="space-y-1 text-center">
                <p class="text-4xl">💩</p>
                <h2 class="text-2xl font-semibold text-gray-900">Sykkeltyveri er kjipt!</h2>
                <p class="text-gray-600">Men vi hjelper deg gjennom dette.</p>
            </div>
            <div class="space-y-4 rounded-lg border-2 border-gray-200 bg-white p-6">
                <p class="font-medium text-gray-900">Nå gjelder det å handle raskt!</p>
                <ol class="list-inside list-decimal space-y-2 font-semibold text-gray-900">
                    <li>Ta bilder av åstedet</li>
                    <li>Sjekk posisjon</li>
                    <li>Ring politiet</li>
                </ol>
            </div>

            <div class="rounded-lg border-2 border-gray-200 bg-orange-50 p-6">
                <p class="text-sm font-light text-gray-900">
                    Hvis dette ikke får sykkelen tilbake, kobler du på Whee! verksted og etterforsker (utløser
                    egenandel).
                </p>
            </div>
            
            <!-- Theft form at ..../thefts/create  -->
            <form method="POST" action="/thefts">
                @csrf

                <div>
                    <!-- <label for="bike_thief_hunt_started">I start a bike_thief_hunt</label> -->
                    
                    <!-- placeholder="bike_thief_hunt_started"  -->
                    <input 
                        type="hidden" 
                        id="title" 
                        name="title" 
                        value="bike_thief_hunt_started"
                        
                    />                                    
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

                <div class="flex flex-col gap-3">
                    <a 
                        href="/min-side/tyveri/photos" 
                        class="w-full text-center rounded-lg bg-green-600 px-6 py-3 text-lg font-medium text-white transition-colors hover:bg-green-700"
                    >
                        Start
                    </a>
                    <a
                        href="/"
                        class="block text-center text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
                    >
                        Avbryt
                    </a>                                        
                </div>                
            </form>                
        </div>
    </div>
</x-blehout>