<x-blehout>
    <x-slot:heading>
        Min Side
    </x-slot:heading>
    <p>Trinn 3 av 3</p>
    <h2>3. Varsle politiet</h2>

    <p>1. Ring politiet og hør om de kan hjelpe:</p>
    <p>Forslag til hva du kan si:</p>
    <p><p>Jeg er kunde hos Whee! og elsykkelen min verdt mange titusener er stjålet og jeg vet hvor den er, kan dere hjelpe?</p></p>
    <!-- <a href="#">Ring 02800</a> -->
    <!-- <br />
    <br /> -->
    <form method="POST" action="/thefts/3-callcops">
            @csrf
            @method('PATCH')
            
            <div>
                <!-- <label for="police_say_no">police_say_no </label> -->
                <!-- Should be 
                police_say_no -->
                <!-- <br /> -->
                <input 
                    type="hidden" 
                    id="salary" 
                    name="salary" 
                    value="police_say_no" 
                />
                
            </div>        
            <div>
                @error("police_say_no")
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-emerald-800 bg-white border-2 border-emerald-800 shadow-lg dark:shadow-lg dark:shadow-emerald-700 leading-5 rounded-md hover:bg-yellow-400 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-emerald-800 transition ease-in-out duration-150 dark:bg-yellow-100 dark:border-emerald-800 dark:text-emerald-800 dark:focus:border-blue-700 dark:active:bg-yellow-100 dark:active:text-emerald-800">
                    Ring 02800
                </button>
            </div> 
            <!-- The link below
            has "columns" that
            are not yet migrated -->
            <br />
            <!-- <p>Politiet jakter på sykkeltyven!</p> -->
            <!-- police_is_hunting -->
            
            <!-- 
            <br />
            <br />
            
            <br /> -->
    </form>       
</x-blehout>