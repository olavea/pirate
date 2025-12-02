<p>Sykkeltyv jakt 🦾👮 -> 🚴‍♀️🦹‍♀️</p>
<p>Trinn 2 av 5</p>
<h2>2. Airtag hjelp</h2>

<p>Brukte du rett telefon til å</p> 
<a href="#">Åpne: Hvor er app / Find My</a>
<p>Velg:</p>
<p>- objekter</p>
<p>- Whee!</p>
<p>- ditt navn</p>

<!-- Theft form at http://whee-laravel.test/thefts/{id}/2-find-not  -->
<form method="POST" action="/thefts/{{ $theft->id }}/2-find-no" enctype="multipart/form-data">
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
    
        <br />
        <button type="submit">Jeg ser sykkelen i find my appen</button>
        <br />
        <!-- These 2 buttons below
        have "columns" that
        are not yet migrated -->
        <br />
         <!-- please_help_me_activate_my_find_my_sweet_whee -->
        <button>Whee! Hjelp meg å aktivere min find my</button>
        <br />

        <h3>Jeg har ikke iPhone</h3>
        <br />
         <!-- whee_must_activate_their_find_my -->
        <button>Whee! må aktivere sin egen find my</button>
        <br />
        <p>Og ringe politiet FOR meg</p>
        <!-- <a href="/thefts/{{ $theft->id }}/3-callcops">Ring politiet</a> -->
        <br />
        
        <br />
        <a href="/thefts/{{ $theft->id }}/2-find">Tilbake</a>
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
        <button>Det går ikke / find_my_not_working</button>
    </div>
</form>
