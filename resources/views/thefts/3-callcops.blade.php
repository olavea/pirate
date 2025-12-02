<p>Min Side</p>
<p>Trinn 3 av 3</p>
<h2>3. Varsle politiet</h2>

<p>1. Ring politiet og hør om de kan hjelpe:</p>
<p>Forslag til hva du kan si:</p>
<p><p>Jeg er kunde hos Whee! og elsykkelen min verdt mange titusener er stjålet og jeg vet hvor den er, kan dere hjelpe?</p></p>
<!-- <a href="#">Ring 02800</a> -->
<br />
<br />
<form method="POST" action="/thefts/{{ $theft->id }}/3-callcops">
        @csrf
        @method('PATCH')
        
        <div>
            <!-- <label for="police_say_no">police_say_no </label> -->
            <!-- Should be 
            police_say_no -->
            <br />
            <input 
                type="hidden" 
                id="salary" 
                name="salary" 
                value="police_say_no" 
            />
            
        </div>        
        <div>
            @error("called_police")
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit">
                Ring 02800
            </button>
        </div> 
         <!-- The link below
        has "columns" that
        are not yet migrated -->
        <br />
        <!-- <p>Politiet jakter på sykkeltyven!</p> -->
        <!-- police_is_hunting -->
        
        <!-- <a href="/thefts/{{ $theft->id }}/4-policereport">Politiet sa ja til sykkeltyvjakt 🥳</a>
        <br />
         <br />
        <a href="/thefts/{{ $theft->id }}/5-bike-found">Politiet fant sykkelen</a>
        <br /> -->
</form>       
