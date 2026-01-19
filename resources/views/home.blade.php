<x-blehout>
    <x-slot:heading>
        Test
    </x-slot:heading>
    <br />

    <div class="flex flex-col justify-center text-center py-3">
        <a 
            href="/thefts/create"
            class="rounded-lg bg-red-600 px-6 py-3 font-medium text-white transition-colors hover:bg-green-700"
        >
            Hjelp, sykkelen min er stjålet
        </a>
    </div>
    <div class="flex flex-col justify-center text-center py-3">
        <a 
            href="/thefts/funnet"
            class="rounded-lg bg-green-600 px-6 py-3 font-medium text-white transition-colors hover:bg-green-700"
        >
            Sykkel funnet
        </a>
    </div>
    <div class="flex flex-col justify-center text-center py-3">
        <a 
            href="/min-side/tyveri/opprett"
            class="rounded-lg bg-red-600 px-6 py-3 font-medium text-white transition-colors hover:bg-green-700"
        >
            Sykkeltyveri og jeg er kunde av Whee!
        </a>
    </div>
    <div class="flex flex-col justify-center text-center py-3">
        <a 
            href="/min-side/tyveri/funnet"
            class="rounded-lg bg-green-600 px-6 py-3 font-medium text-white transition-colors hover:bg-green-700"
        >
            Sykkel funnet
        </a>
    </div>

    <div class="flex flex-col justify-center text-center py-3">
        <a 
            href="/sykkel/lengde"
            class="rounded-lg bg-yellow-300 px-6 py-3 font-medium font-black text-black transition-colors hover:bg-yellow-500 hover:drop-shadow-xl"
        >
          Velg sykkellengde og bestill
        </a>
    </div>
    <!-- <div class="right-0 mx-auto max-w-7xl  px-4 py-6 sm:px-6 flex justify-between lg:px-8">
      <div class="underline">
        <x-nav href="/sykkel/lengde" :active="request()->is('sykkel/lengde')">🚴‍♀️ Velg sykkellengde og bestill </x-nav>      
      </div>
    </div>
    <div class="right-0 mx-auto max-w-7xl  px-4 py-6 sm:px-6 flex justify-between  lg:px-8">

      <div class="underline">
        <x-nav href="/thefts/create" :active="request()->is('jobs/create')">🕵🏻‍♀️ Hjelp, sykkelen min er stjålet </x-nav>
      </div> -->
      
      


    </div>
    
</x-blehout>