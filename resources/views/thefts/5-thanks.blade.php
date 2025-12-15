
    <x-slot:heading>
        Min Side
    </x-slot:heading>
    <h2>Takk!</h2>

    <p>Nå har du har gjort ditt!</p>
    <!-- <label for="thanks">thanks </label> -->
    
            <input 
                type="hidden" 
                id="thanks" 
                name="thanks" 
                value="thanks" 
            />
            
        </div>
        <div>        
            @error("thanks")
                <p>{{ $message }}</p>
            @enderror
        </div>

    <p>Følg med på min side for statusoppdatering eller å melde endringer i saken.</p>

    <a href="/">Tilbake til hjem</a>
