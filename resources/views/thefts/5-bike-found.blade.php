<p>Sykkeltyv jakt 🦾👮 -> 🚴‍♀️🦹‍♀️</p>
<p>Trinn 5 av 5</p>
<h2>5. Sykkelen vår er gjenfunnet 🥳</h2>
<form method="POST" action="/thefts/5-bike-found">
    
    @method('PATCH')
    @csrf



        <div>
            <!-- <label for="bike_found">bike_found </label> -->
            <br />
            <input 
                type="hidden" 
                id="salary" 
                name="salary" 
                value="bike_found" 
            />
            
        </div>        
        <div>
            @error("bike_found")
                <p>{{ $message }}</p>
            @enderror
        </div>             
        <div>
            <button type="submit">
                Sykkelen er gjenfunnet 🥳
            </button>
            <br />
            <a href="/">Tilbake til hjem</a>
        </div>  


</form> 