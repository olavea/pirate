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

            <button type="submit" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-emerald-800 bg-white border-2 border-emerald-800 shadow-lg dark:shadow-lg dark:shadow-emerald-700 leading-5 rounded-md hover:bg-yellow-400 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-emerald-800 transition ease-in-out duration-150 dark:bg-yellow-100 dark:border-emerald-800 dark:text-emerald-800 dark:focus:border-blue-700 dark:active:bg-yellow-100 dark:active:text-emerald-800">
                Anmeldelse levert
            </button>
        </div> 
    </form>
</x-blehout>