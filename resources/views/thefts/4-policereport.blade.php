<x-blehout>
    <x-slot:heading>
        Min Side
    </x-slot:heading>
    <p>Trinn 4 av 4</p>
    <h2>4. Politianmeldelse</h2>

    <p>Sykkeltyverier skal politianmeldes, 
    og som kunde har du info om tyveriet.</p>

    <a 
        href="#"
        class="underline text-orange-600"
    >
        Anmeld på politi.no
    </a>

    <p>Husk!</p> 
    <p>Anmeld på vegne av Whee! org: 825 018 662</p>
    <p>Kryss av for at anmeldelsen deles med oss.</p>



    <form method="POST" action="/thefts/4-policereport">
        @csrf
        @method('PATCH')
            <div>
            <!-- <label for="police_report">Anmeldelse med org nr levert og delt med Whee! </label> -->
            <br />
                <input 
                    type="hidden" 
                    id="salary" 
                    name="salary" 
                    value="police_report" 
                />
                
            </div>
            <div>        
                @error("police_report")
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div> 

            <!-- redirects to /thefts/5-thanks -->

            <button 
                type="submit" 
                class="w-full bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition-colors"
            >
                Anmeldelse levert
            </button>
        </div> 
    </form>
    <div class="text-center">   
<a
href="#"
class="w-full text-center text-sm font-medium text-gray-600 transition-colors hover:text-gray-900"
    >
                    Gjør dette senere
</a>
</div> 
</x-blehout>