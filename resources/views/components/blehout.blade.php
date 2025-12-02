<!DOCTYPE html>
<html class="h-full bg-yellow-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" 
        content="width=device-width, initial-scale=1">

    <title>Test</title>
    <link rel="icon" href="favicon.svg">
    @vite(['resources/js/app.js'])

</head>
<body>
<div class="min-h-full">
  <nav>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          
          <div class=" md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <x-nav href="/" :active="request()->is('/')">Min Whee!</x-nav>
              
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  
    <div class="right-0 mx-auto max-w-7xl  px-4 py-6 sm:px-6 flex justify-between  lg:px-8">
      <div>
        <x-button 
          class="hidden text-xl sm:text-xl md:text-3xl lg:text-5xl  px-2 py-2 rounded-xl bg-gradient-to-b from-yellow-300 to-orange-500 text-right font-bold tracking-tight text-white hover:bg-gradient-to-b hover:from-yellow-400 hover:to-orange-600" 
          href="/jobs/create"
        >
          Loot
        </x-button>
      </div>  
      <div class="underline">
        <x-nav href="/thefts/create" :active="request()->is('jobs/create')">🕵🏻‍♀️ Hjelp, sykkelen min er stjålet </x-nav>
      </div>

      


    </div>
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your slot content -->
      {{$slot}}
    </div>
  </main>
</div>

    
</body>
</html>