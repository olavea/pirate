<p>Meld tyveri</p>
<h2>1. Ta bilder av åstedet</h2>

<p>Ta bilder av hvor sykkelen sto, rester av lås eller annet som ligger igjen, brutt dørlås eller annet som kan virke relevant.</p>



<!-- Theft form at http://whee-laravel.test/thefts/{id}/edit  -->
<form method="POST" action="/thefts/{{ $theft->id }}/edit" enctype="multipart/form-data">
    @method("PATCH")
    @csrf
    
    <div>
        <!-- <label for="photos">photos</label> -->
        <br />
        <input 
            type="hidden" 
            id="salary" 
            name="salary" 
            value="photos_taken" 
        />
        
    </div>        
        @error("salary")
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        

        <button type="submit">Ok, gå videre</button>
        <br />
        <br />
        <a href="/thefts/{{ $theft->id }}/2-find">Hopp over</a>
    </div>
    

</form>
<p>2. Sjekk hvor sykkelen er</p>

<p>3. Varsle og anmelde</p>