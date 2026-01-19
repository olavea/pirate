<x-blehout>
    <x-slot:heading>
        Sykkeltyveri
    </x-slot:heading>
    <div class="max-w-4xl space-y-6">
        <div class="space-y-4">
            <div class="space-y-1 text-center">
                <p class="text-4xl">📞</p>
                <h2 class="text-2xl font-semibold text-gray-900">Ring politiet</h2>
                <p class="text-gray-600">Jo raskere, jo bedre.</p>
            </div>
            <div class="space-y-4 rounded-lg border-2 border-gray-200 bg-white p-6">
                <p class="font-medium text-gray-900">
                    <a                        
                        href="tel:1881"
                        class="inline-flex items-center gap-2 rounded-md border border-gray-200 bg-gray-50 px-2 py-1 text-gray-700 transition-colors hover:border-gray-300 hover:bg-gray-100"
                    >
                    📞
                        Ring politiet (1881)
                    </a>
                    og si:
                </p>
                <p class="text-xl leading-relaxed text-gray-600 italic">
                    Jeg er kunde hos Whee! og elsykkelen min verdt mange titusener er stjålet og jeg vet hvor den er,
                    kan dere hjelpe?
                </p>
            </div>

    <form method="POST" action="/thefts/3-callcops" class="space-y-6">
            @csrf
            @method('PATCH')
            <!-- href="tel:02800" -->
            <div class="flex flex-col gap-3">
                <a
                    href="/min-side/tyveri/waiting-police"
                    class="text-center rounded-lg bg-green-600 px-6 py-3 font-medium text-white transition-colors hover:bg-green-700"
                >
                    Politiet hjelper meg!    
                </a>
                <a     
                    href="/min-side/tyveri/whee-intro" 
                    class="text-center rounded-lg border-2 border-gray-200 px-6 py-3 font-medium text-gray-600 transition-colors hover:border-gray-400 hover:text-gray-900">
                    Politiet kunne ikke hjelpe
                </a>
                <a
                    href="/min-side/tyveri/whee-intro"
                    class="py-2 text-center text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
                >
                    Hopp over - jeg vil ikke ringe
                </a>
            </div>
    </form>       
    </div>
    </div>
</x-blehout>