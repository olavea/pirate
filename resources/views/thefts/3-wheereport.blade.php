<x-blehout>
    <x-slot:heading>
        Tyveri
    </x-slot:heading>
    
    <div class="max-w-4xl space-y-6">
        <div class="space-y-4">
            <div class="space-y-1 text-center">
                <p class="text-4xl">🚴📝</p>
                <h2 class="text-2xl font-semibold text-gray-900">Sjefen din tar over</h2>
                <p class="text-gray-600">Hun trenger litt informasjon fra deg.</p>
            </div>




    <form 
        method="POST" 
        action="/thefts/3-wheereport"
    >
        @csrf
        @method('PATCH')
        
        <div>
            <!-- <label for="whee_report">whee_report</label> -->
            <br />
            <input 
                type="hidden" 
                id="salary" 
                name="salary" 
                value="whee_report" 
            />
            
        </div>
        
        <div class="space-y-4 rounded-lg border-2 border-gray-200 bg-white p-6">
                <p class="font-medium text-gray-900">Beskriv hva som skjedde</p>
                <textarea
                        id="theft_description"
                        name="theft_description"
                        rows="5"
                        maxlength="2000"
                        class="w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 placeholder-gray-400 focus:border-orange-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-orange-400/20"
                        placeholder="F.eks: Sykkelen ble stjålet utenfor matbutikken på Grünerløkka tirsdag 14. januar rundt kl. 18:00. Den var låst til et sykkelstativ..."
                >{{ old('theft_description', '') }}</textarea>
            </div>
        <div>        
            @error("whee_report")
                <p>{{ $message }}</p>
            @enderror
        </div>
        
        
        <button 
            type="submit" 
            class="w-full rounded-lg bg-green-600 px-6 py-3 font-medium text-white transition-colors hover:bg-green-700"
        >
            Gå videre
        </button>
                    
            
    </form>   
    
    <div class="text-center">     
        <a
            href="/thefts/4-policereport"
            class="w-full text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
        >
            Hopp over
        </a>
    </div>
    </div>
    </div>
</x-blehout>    