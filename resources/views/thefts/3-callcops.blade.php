<x-blehout>
    <x-slot:heading>
        Sykkeltyveri
    </x-slot:heading>
    <p>Trinn 3 av 3</p>
    <h2>3. Varsle politiet</h2>

    <p>1. Ring politiet og hør om de kan hjelpe:</p>
    <p>Forslag til hva du kan si:</p>
    <p><p>Jeg er kunde hos Whee! og elsykkelen min verdt mange titusener er stjålet og jeg vet hvor den er, kan dere hjelpe?</p></p>
    <!-- <a href="#">Ring 02800</a> -->
    <!-- <br />
    <br /> -->
    <form method="POST" action="/thefts/3-callcops" class="space-y-6">
            @csrf
            @method('PATCH')
            
            <div class="flex flex-col gap-3">
                <a
                    href="/thefts/5-thanks"
                    class="text-center rounded-lg bg-green-600 px-6 py-3 font-medium text-white transition-colors hover:bg-green-700"
                >
                    Politiet hjelper meg!    
                </a>
                <button type="submit" class="text-center rounded-lg border-2 border-gray-200 px-6 py-3 font-medium text-gray-600 transition-colors hover:border-gray-400 hover:text-gray-900">
                    Politiet kunne ikke hjelpe
                </button>
                <a
                    href="/thefts/3-whee-intro"
                    class="py-2 text-center text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
                >
                    Hopp over - jeg vil ikke ringe
                </a>
            </div>
    </form>       
</x-blehout>