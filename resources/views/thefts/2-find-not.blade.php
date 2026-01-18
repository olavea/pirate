<x-blehout>
    <x-slot:heading>
        Sykkeltyveri
    </x-slot:heading>
    <div class="max-w-4xl space-y-6">
        <div class="space-y-4">
            <div class="space-y-1 text-center">
                <p class="text-4xl">🤔</p>
                <h2 class="text-2xl font-semibold text-gray-900">Problemer med Find My?</h2>
                <p class="text-gray-600">La oss feilsøke sammen.</p>
            </div>



            <div class="space-y-4 rounded-lg border-2 border-gray-200 bg-white p-6">
                <div class="space-y-4">
                    <div class="border-b border-gray-200 pb-4">
                        <p class="mb-2 font-semibold text-gray-900">Er AirTag'en koblet til en annen telefon?</p>
                        <p class="text-sm text-gray-700">
                            For eks. en kollegas? Sjekk Find My på den riktige telefonen.
                        </p>
                    </div>

                    <div>
                        <p class="mb-2 font-semibold text-gray-900">Er AirTagen koblet til sjefens! iPad?</p>
                        <p class="text-sm text-gray-700">
                            Hvis AirTagen er koblet til sjefens iPad, kan ikke du se den. Dette gjelder spesielt hvis du har Android. Sjefen sjekker den for deg.
                        </p>
                    </div>
                </div>
            </div>
            <form 
                method="POST" 
                action="/thefts/2-find-not" 
                class="flex flex-col gap-4"
            >
                @method('PATCH')
                @csrf
                
                <button 
                    type="submit" 
                    class="rounded-lg bg-green-600 px-6 py-3 font-medium text-white transition-colors hover:bg-green-700"
                >
                    Det funker nå!
                </button>
                <a
                    href="/thefts/3-wheereport"
                    class="text-center rounded-lg border-2 border-gray-200 px-6 py-3 font-medium text-gray-700 transition-colors hover:border-gray-400 hover:bg-gray-50"
                >
                    AirTag er koblet til sjefens iPad
                </a>
                <a
                    href="/thefts/3-wheereport"
                    class="text-center text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
                >
                    Jeg gir opp - gå videre
                </a>
            </form>
        </div>
    </div>
</x-blehout>