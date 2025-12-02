<p>Meld tyveri</p>
<p>Sykkeltyveri er så 💩 Nå gjelder det å handle raskt!</p>

<p>Gjør dette:</p>

    <p>Ta bilder</p>
    <p>Sjekk posisjon</p>
    <p>Ring politiet</p>

<!-- Theft form at ..../thefts/create  -->
<form method="POST" action="/thefts/{{ $theft->id }}">
    @csrf

    <div>
        <!-- <label for="bike_thief_hunt_started">I start a bike_thief_hunt</label> -->
        <br />
        <!-- placeholder="bike_thief_hunt_started"  -->
        <input 
            type="hidden" 
            id="title" 
            name="title" 
            value="bike_thief_hunt_started"
            
        />
        
    
    </div>        
        @error("title")
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <!-- <label for="bike_thief_hunt_started">I start a bike_thief_hunt</label> -->
        
        <!-- placeholder="bike_thief_hunt_started"  -->
        <input 
            type="hidden" 
            id="salary" 
            name="salary" 
            value="start"
            
        />
        
    </div>        
        @error("salary")
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <button type="submit">Start</button>
        <br />
        <!-- <a href="/thefts/{{ $theft->id }}">Hopp over</a> -->
    </div>
    
</form>
<p>Hvis det ikke får sykkelen tilbake, kobler vi på Whee! verksted og etterforsker (utløser egenandel).<p>
    
<p>2. Sjekk hvor sykkelen er</p>

<p>3. Varsle og anmelde</p>