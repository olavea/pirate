<x-blehout>
    <x-slot:heading>
        Min Side
    </x-slot:heading>
    <p>Trinn 3 av 4</p>
    <h2>3. Varsle Whee!</h2>

    <p>Hvis politiet ikke kan og/eller ikke sykkelen er funnet innen 24 timer, gjør følgende:</p>

    <!-- <a href="#">Åpne: Hvor er app / Find My</a> -->
    <a 
        href="#"
        class="underline text-orange-600"
    >
        Gå til Hvor er/Find my: 
    </a>
    <p>Legg +4700000000 til på Airtagen. </p>



    <form method="POST" action="/thefts/3-wheereport">
        @csrf
        @method('PATCH')
        
        <div>
            <!-- <label for="whee_report">whee_report</label> -->
            <br />
            <input 
                type="hidden" 
                id="salary" 
                name="salary" 
                value="whee_report" 
            />
            
        </div>
        <div>        
            @error("whee_report")
                <p>{{ $message }}</p>
            @enderror
        </div>
        
        <div>
            <button type="submit" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-emerald-800 bg-white border-2 border-emerald-800 shadow-lg dark:shadow-lg dark:shadow-emerald-700 leading-5 rounded-md hover:bg-yellow-400 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-emerald-800 transition ease-in-out duration-150 dark:bg-yellow-100 dark:border-emerald-800 dark:text-emerald-800 dark:focus:border-blue-700 dark:active:bg-yellow-100 dark:active:text-emerald-800">
                Meld tyveri til Whee!
            </button>
        </div>               
            
    </form>       
    <br />
    <ul>
        <li>Tyveri setter i gang etterforskning og utløser egenandel på 5000 kr</li>
        <li>Hvis vi ikke finner sykkelen kan du velge om du vil avslutte leieforholdet eller ha erstatningssykkel</li>
    </ul>

</x-blehout>    