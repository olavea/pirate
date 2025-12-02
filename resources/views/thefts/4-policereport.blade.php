<p>Min Side</p>
<p>Trinn 4 av 4</p>
<h2>4. Politianmeldelse</h2>

<p>Sykkeltyverier skal politianmeldes, 
og som kunde har du info om tyveriet.</p>

<a href="#">Anmeld på politi.no</a>

<p>Husk!</p> 
<p>Anmeld på vegne av Whee! org: 825 018 662</p>
<p>Kryss av for at anmeldelsen deles med oss.</p>



<form method="POST" action="/thefts/{{ $theft->id }}/4-policereport">
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

        <button type='submit'>Anmeldelse levert</button>
    </div> 
</form>