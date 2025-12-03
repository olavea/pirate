<x-blehout>
    <p>Min Side</p>
    <p>Trinn 2 av 3</p>

    <h2>2. Airtag hjelp</h2>

    <p>Brukte du rett telefon til å</p> 
    <a href="#">Åpne: Hvor er/find my → objekter. </a>

    <p>Velg Whee! - ditt navn</p>

    <!-- Theft form at http://whee-laravel.test/thefts/{id}/2-find-not  -->
    <form method="POST" action="/thefts/2-find-not" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        
        <div>
            <!-- <label for="find_my_activated">find_my_activated</label> -->
            <br />
            <input 
                type="hidden" 
                id="salary" 
                name="salary" 
                value="find_my_activated" 
            />
            
        </div>        
            @error("salary")
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <h3>Whee! Hjalp meg å aktivere min find my</h3>
            <p>Jeg ser sykkelen i find my appen</p>
            <br />
            <button type="submit" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-emerald-800 bg-white border-2 border-emerald-800 shadow-lg dark:shadow-lg dark:shadow-emerald-700 leading-5 rounded-md hover:bg-yellow-400 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-emerald-800 transition ease-in-out duration-150 dark:bg-yellow-100 dark:border-emerald-800 dark:text-emerald-800 dark:focus:border-blue-700 dark:active:bg-yellow-100 dark:active:text-emerald-800">Varsle politiet</button>
            <br />
            <!-- These 2 buttons below
            have "columns" that
            are not yet migrated -->
            <br />
            <!-- please_help_me_activate_my_find_my_sweet_whee -->
            <!-- <button>Whee! Hjelp meg å aktivere min find my</button> -->
            <br />

            <h3>Jeg har ikke iPhone</h3>
            
            <!-- whee_must_activate_their_find_my -->
            <!-- <button>Whee! må aktivere sin egen find my</button> -->
            <p>Whee! må aktivere sin egen find my</p>
            
            <p>Og ringe politiet FOR meg</p>
            
            <br />
            
            <br />
            <a href="/thefts/2-find">Tilbake</a>
            <br />
            <br />
            <!-- 
            <div>
                <label for="find_my_not_working">find_my_not_working </label>
                <br />
                <input 
                    type="string" 
                    id="find_my_not_working" 
                    name="find_my_not_working" 
                    value="find_my_not_working" 
                />
            </div> 
                
            <div>        
                @error("find_my_not_working")
                    <p>{{ $message }}</p>
                @enderror
            </div>
            
            -->
            <p>Det går ikke / find_my_not_working</p>
        </div>
    </form>
</x-blehout>