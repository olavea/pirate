<p>Min Side</p>
<p>Trinn 3 av 4</p>
<h2>3. Varsle Whee!</h2>

<p>Hvis politiet ikke kan og/eller ikke sykkelen er funnet innen 24 timer, gjør følgende:</p>

<!-- <a href="#">Åpne: Hvor er app / Find My</a> -->
<p>Gå til Hvor er/Find my: </p>
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
        <button type="submit">
            Meld tyveri til Whee!
        </button>
    </div>               
         
</form>       

<ul>
    <li>Tyveri setter i gang etterforskning og utløser egenandel på 5000 kr</li>
    <li>Hvis vi ikke finner sykkelen kan du velge om du vil avslutte leieforholdet eller ha erstatningssykkel</li>
</ul>