<x-blehout>
    <x-slot:heading>
        Sykkeltyveri
    </x-slot:heading>
    <div class="max-w-4xl space-y-6">
        <div class="space-y-4">
            <div class="space-y-1 text-center">
                <p class="text-4xl">📍</p>
                <h2 class="text-2xl font-semibold text-gray-900">Sjekk hvor sykkelen er</h2>
                <p class="text-gray-600">Finn posisjonen i Find My.</p>
            </div>
            <div class="space-y-3 rounded-lg border-2 border-gray-200 bg-white p-6">
                <p class="font-medium text-gray-900">Åpne "Hvor er?" / "Find My" appen:</p>
                <ol class="list-inside list-decimal space-y-1 text-gray-700">
                    <li>
                        Velg
                        <strong>Objekter</strong>
                    </li>
                    <li>
                        Finn
                        <strong>din sykkel</strong>
                    </li>
                    <li>Se om posisjonen vises</li>
                </ol>
            </div>
            <!-- Theft form at http://whee-laravel.test/thefts/{id}/2-find  -->
            <form method="POST" action="/thefts/2-find" enctype="multipart/form-data">
                @method('PATCH')
                @csrf        
                <!-- <label for="find_my_activated">find_my_activated </label> -->            
                <!-- hide type="string" -->
                <input 
                    type="hidden"
                    id="salary" 
                    name="salary" 
                    value="find_my_activated" 
                />                            
                <div class="flex flex-col gap-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    
                    <a 
                        href="/min-side/tyveri/call-police" 
                        class="rounded-lg text-center bg-green-600 px-6 py-3 font-medium text-white transition-colors hover:bg-green-700"
                    >
                        Jeg ser sykkelen i appen
                    </a>                
                    <a 
                        href="/min-side/tyveri/find-my-help"
                        class="text-center text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"                    
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
            </form>
        </div>
    </div>    
</x-blehout>