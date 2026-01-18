<x-blehout>
    <x-slot:heading>
        Sykkeltyveri
    </x-slot:heading>
    
    <div class="max-w-4xl space-y-6">
        <div class="space-y-4">
            <div class="space-y-1 text-center">
                <p class="text-4xl">🚴‍♂️</p>
                <h2 class="text-2xl font-semibold text-gray-900">Tid for å involvere sjefen din!</h2>
                <p class="text-gray-600">La henne hjelpe deg med å registrere sykkeltyveriet.</p>
            </div>


            <div class="space-y-4 rounded-lg border-2 border-gray-200 bg-white p-6">
                <p class="font-medium text-gray-900">For at sjefen din skal kunne ta over ansvaret for sykkeltyveriet må du:</p>

                <ol class="list-inside list-decimal space-y-2 text-gray-700">
                    
                    <li>Dele posisjon med sjefen!</li>
                
                    <li>Beskrive hvor og når det skjedde</li>
                    
                    <li>Levere politianmeldelse</li>
                </ol>
            </div>


    <form 
        method="POST" 
        action="/thefts/3-wheereport"
    >
        @csrf
        @method('PATCH')
    </form>   
    <div class="text-center">   
        <a
            href="/thefts/3-wheereport" 
            class="w-full rounded-lg bg-orange-600 px-6 py-3 font-medium text-white transition-colors hover:bg-orange-700"
        >
            Jeg forstår - involver sjefen
        </a>      
    </div>
    <div class="text-center">   
        <a
            href="/"
            class="w-full text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
        >
            Avbryt - tilbake til forsiden
        </a>
    </div>
    </div>
    </div>
</x-blehout>    


