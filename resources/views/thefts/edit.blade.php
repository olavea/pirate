<x-blehout>
    <x-slot:heading>
        Sykkeltyveri
    </x-slot:heading>
    <div class="max-w-4xl space-y-6">
        <div class="space-y-4">
            <div class="space-y-1 text-center">
                <p class="text-4xl">📸</p>
                <h2 class="text-2xl font-semibold text-gray-900">Ta bilder av åstedet</h2>
                <p class="text-gray-600">Sikre bevis før de forsvinner.</p>
            </div>



            <div class="space-y-3 rounded-lg border-2 border-gray-200 bg-white p-6">
                <p class="font-medium text-gray-900">Ta bilder av:</p>
                <ul class="list-inside list-disc space-y-1 text-gray-700">
                    <li>Stedet hvor sykkelen sto</li>
                    <li>Ødelagt lås eller låsrest</li>
                    <li>Annet som kan virke relevant</li>
                </ul>
            </div>

            <div class="rounded-lg border-2 border-gray-200 bg-orange-50 p-6">
                <p class="text-sm font-light text-gray-900">
                    Ta vare på bildene – de brukes senere når du leverer politianmeldelse.
                </p>
            </div>

            <!-- Theft form at http://whee-laravel.test/thefts/{id}/edit  -->
            <form method="POST" action="/thefts/edit" enctype="multipart/form-data">
                @method("PATCH")
                @csrf
                <!-- <label for="photos">photos</label> -->
                <input 
                    type="hidden" 
                    id="salary" 
                    name="salary" 
                    value="photos_taken" 
                />
            <div class="flex flex-col gap-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                
                <button 
                    type="submit" 
                    class="rounded-lg bg-green-600 px-6 py-3 font-medium text-white transition-colors hover:bg-green-700"
                >
                    Jeg har tatt bilder
                </button>                
                <a 
                    class="text-center text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
                    href="/thefts/2-find"
                >
                    Hopp over
                </a>
            </div>
            </form>   
        </div>
    </div> 
</x-blehout>