<x-blehout>
    <x-slot:heading>
        Sykkeltyveri
    </x-slot:heading>

    <div class="max-w-4xl space-y-6">
        <div class="space-y-4">
            <div class="space-y-1 text-center">
                <p class="text-4xl">📝</p>
                <h2 class="text-2xl font-semibold text-gray-900">Whee! tar over</h2>
                <p class="text-gray-600">Vi trenger litt informasjon fra deg.</p>
            </div>
            <form method="POST" action="/min-side/tyveri/whee-report" class="space-y-4">
                @method("PATCH")
                @csrf

                <input type="hidden" name="step_whee_report" value="done" />

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
                    @error("theft_description")
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="text-xs text-gray-500">Inkluder når og hvor tyveriet skjedde, og annen relevant informasjon.</p>
                </div>

                <div class="rounded-lg border-2 border-gray-200 bg-orange-50 p-6">
                    <p class="text-sm font-light text-gray-900">
                        Denne informasjonen hjelper vår etterforsker med å finne igjen sykkelen din.
                    </p>
                </div>

                @error("step_whee_report")
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror


            </form>

            <form method="POST" action="/min-side/tyveri/whee-report">
                @method("PATCH")
                @csrf

                <input type="hidden" name="step_whee_report" value="skipped" />
            </form>
            <div class="flex flex-col gap-3">
                <a
                    href="/min-side/tyveri/police-report"
                    class="w-full text-center rounded-lg bg-green-600 px-6 py-3 font-medium text-white transition-colors hover:bg-green-700"
                >
                    Gå videre
                </a>
                <a
                    href="/min-side/tyveri/police-report"
                    class="w-full text-center text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
                >
                    Hopp over
                </a>
            </div>
        </div>
    </div>
</x-blehout>
