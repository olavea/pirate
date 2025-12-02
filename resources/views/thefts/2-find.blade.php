<p>Min Side</p>
<p>Trinn 2 av 3</p>
<h2>2. Sjekk hvor sykkelen  er</h2>

<a href="#">Åpne: Hvor er/find my → objekter. </a>

<p>Velg Whee! - ditt navn</p>

<a href="/thefts/{{ $theft->id }}/edit">Tilbake</a>
<!-- Theft form at http://whee-laravel.test/thefts/{id}/2-find  -->
<form method="POST" action="/thefts/{{ $theft->id }}/2-find" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    
    <div>
        <!-- <label for="find_my_activated">find_my_activated </label> -->
        <br />
        <!-- hide type="string" -->
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
        <button type="submit">Ok, gå videre</button>
        <br />
        
        <br />
        <a href="/thefts/{{ $theft->id }}/2-find-not">Det går ikke</a>
        <!-- <div>
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
    </div>
</form>
<p>Hvis du ikke har iphone, eller ikke kan finne airtagen.</p>
