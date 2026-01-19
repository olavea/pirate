<x-blehout>
    <x-slot:heading>
        Sykkeltyveri
    </x-slot:heading>
    <div class="max-w-4xl space-y-6">
        <div class="space-y-4">
            <div class="space-y-1 text-center">
                <p class="text-4xl">📋</p>
                <h2 class="text-2xl font-semibold text-gray-900">Politianmeldelse</h2>
                <p class="text-gray-600">Offisiell anmeldelse er påkrevd.</p>
            </div>
            <div class="space-y-4 rounded-lg border-2 border-gray-200 bg-white p-6">
                <p class="text-gray-700">
                    Politianmeldelse er påkrevd for at Whee! sin etterforsker skal kunne jobbe med saken.
                </p>

                <a
                    href="https://anmeldelse.politiet.no/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 text-orange-600 hover:text-orange-700 hover:underline font-medium"
                >
                    Anmeld på politi.no
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>

                <div class="pt-3 border-t border-gray-200">
                    <p class="font-semibold text-gray-900 mb-2">Husk!</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li>
                            Anmeld på vegne av <strong>Whee!</strong> org.nr:
                            <button
                                type="button"
                                onclick="navigator.clipboard.writeText('825018662').then(() => { const icon = this.querySelector('svg'); icon.classList.add('text-green-600'); setTimeout(() => { icon.classList.remove('text-green-600'); }, 2000); })"
                                class="inline-flex items-center gap-2 rounded-md border border-gray-200 bg-gray-50 px-2 py-1 font-mono font-semibold text-gray-700 transition-colors hover:border-gray-300 hover:bg-gray-100"
                            >
                                📋
                                825 018 662
                            </button>
                        </li>
                        <li>Kryss av for at anmeldelsen <strong>deles med oss</strong></li>
                    </ul>
                </div>
            </div>
            <form method="POST" action="/min-side/tyveri/police-report">
                @csrf
                @method('PATCH')            
                <!-- <label for="police_report">Anmeldelse med org nr levert og delt med Whee! </label> -->        
                <input 
                    type="hidden" 
                    id="salary" 
                    name="salary" 
                    value="police_report" 
                />                            
                <div>        
                    @error("police_report")
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-3">
                    <a 
                        href="/min-side/tyveri/waiting-whee" 
                        class="w-full text-center bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition-colors"
                    >
                        Anmeldelse levert
                    </a>
                    <a
                        href="/min-side/tyveri/waiting-whee"
                        class="w-full text-center text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
                    >
                        Gjør dette senere
                    </a>
                </div>    
            </form>    
        
        </div> 
    </div> 
</x-blehout>