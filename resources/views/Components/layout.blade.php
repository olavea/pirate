<!DOCTYPE html>
<html class="h-full" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" 
        content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
    <title>pirate uploads</title>
</head>
<body class="h-full p-4 bg-emerald-400 font-black">
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
  <nav class="rounded-t-2xl bg-gradient-to-b from-orange-400 to-yellow-300">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-1 ">
            <img class="size-96 drop-shadow-lg" src="https://ouch-cdn2.icons8.com/5iRXIex6ENAJfhSm6GxYntqBKoM2lSzRffmJl3YSyws/rs:fit:368:368/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNTEz/L2ExMTRiYjEzLWUz/ZjktNGVlZS1hMTcy/LTgzYmM4OWE5MDQ1/YS5wbmc.png" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="rounded-md drop-shadow-lg bg-gradient-to-b shadow from-orange-500 to-yellow-300 px-3 py-2 font-black text-white" aria-current="page">Upload</a>
              <x-nav href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-700 hover:text-white">Pirate</x-nav>
              <x-nav href="/pirate" class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-700 hover:text-white">Tales   </x-nav>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" class="drop-shadow-lg relative flex max-w-xs items-center rounded-full bg-yellow-300 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-300 focus:ring-offset-2 focus:ring-offset-orange-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="size-14 rounded-full" src="https://img.icons8.com/?size=128&id=faGuEfKHrWow&format=png" alt="">
                </button>
              </div>

              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="block rounded-md bg-gradient-to-b from-orange-300 to-yellow-500 px-3 py-2 text-base font-bold text-white" aria-current="page">Upload</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-bold text-gray-900 hover:bg-orange-500 hover:text-white">Pirate</a>
        <a href="/pirate" class="block rounded-md px-3 py-2 text-base font-bold text-gray-900 hover:bg-orange-500 hover:text-white">Tales </a>
       
      </div>
      <div class="border-t border-orange-500 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img class="size-16 rounded-full" src="https://img.icons8.com/?size=128&id=faGuEfKHrWow&format=png" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-black text-black">Cap. Hook</div>
            <div class="text-sm font-black text-black">hook@captain.com</div>
          </div>
        </div>
        
      </div>
    </div>
  </nav>

  <header class="rounded-b-2xl bg-gradient-to-b from-yellow-300 to-orange-400 shadow">
    <div class="right-0 mx-auto max-w-7xl  px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-6xl px-1 py-2 rounded-2xl bg-gradient-to-b from-yellow-300 to-orange-500 text-right font-bold tracking-tighter text-white">{{ $heading }}</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your slot content -->
      {{$slot}}
    </div>
  </main>
</div>

    
</body>
</html>