<x-blehout>
    <x-slot:heading>
        Sykkeltyveri
    </x-slot:heading>
    <div class="max-w-4xl space-y-6">
        <div class="space-y-4">
            <div class="space-y-1 text-center">
                <p class="text-4xl">🎉</p>
                <h2 class="text-2xl font-semibold text-gray-900">Gratulerer!</h2>
                <p class="text-gray-600">Så bra at du fant sykkelen!</p>
            </div>

            <div class="flex min-h-5 items-center">
                <div class="h-2 flex-1 rounded-full bg-gray-200"></div>
            </div>

            <form method="POST" action="/min-side/tyveri/funnet" class="space-y-4">
                @method("PATCH")
                @csrf

                <div class="space-y-4 rounded-lg border-2 border-gray-200 bg-white p-6">
                    <p class="font-medium text-gray-900">Beskriv hva som skjedde</p>
                    <textarea
                        id="outcome_note"
                        name="outcome_note"
                        rows="5"
                        maxlength="1000"
                        class="w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-3 text-gray-900 placeholder-gray-400 focus:border-orange-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-orange-400/20"
                        placeholder="F.eks: Fant sykkelen ved togstasjonen, eller politiet fant den og ringte meg..."
                    >{{ old('outcome_note') }}</textarea>
                    @error("outcome_note")
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="rounded-lg border-2 border-gray-200 bg-orange-50 p-6">
                    <p class="text-sm font-light text-gray-900">
                        Dette hjelper oss å forstå situasjonen bedre og forbedre tjenesten vår.
                    </p>
                </div>
                <div class="flex flex-col gap-3">
                    <a
                        href="/"
                        class="w-full rounded-lg bg-green-600 px-6 py-3 font-medium text-white transition-colors hover:bg-green-700"
                    >
                        Bekreft at sykkelen er funnet
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
