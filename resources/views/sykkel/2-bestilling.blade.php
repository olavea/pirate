<x-blehout>
    <x-slot:heading>
        <p class="text-4xl">🏠</p>   
    </x-slot:heading>
    <div class="max-w-4xl space-y-6">
        <div class="space-y-4">
            <!-- Main content -->
            <div class="space-y-1 text-center">
                <h2 class="text-2xl font-semibold text-gray-900">Bestillingsskjema</h2>
            </div>        
            <div class="space-y-3"> 
                <p>Skriv inn navn, adresse osv</p>
                <!-- <p>⚪ Jeg har lest, forstått og samtykker i Whee!</p> -->
                <p>Du får en sms med en kode du skal kopiere inn i neste side</p>
                <br />
            </div>    
            <div class="flex flex-col justify-center text-center">
                <a
                    href="/sykkel/bekreft-sms"
                    class="rounded-lg bg-green-600 px-6 py-3 font-medium text-white transition-colors hover:bg-green-700"
                >
                    Neste
                </a>
            </div>
            <br />
            <div>
                <a
                    href="/sykkel/abonnement"
                    class="text-center text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
                >
                    Tilbake
                </a>    
            </div>
        </div>
    </div>
</x-blehout>