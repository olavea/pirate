<!DOCTYPE html>
<html class="h-full bg-white" lang="en">
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
    <div class="mx-auto max-w-7xl px-1 sm:px-2 lg:px-3">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          
          <div class=" md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <x-nav href="/" :active="request()->is('/')">{{ $heading }}</x-nav>
              
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  
    
  <div class="py-6">
    <main>
      <div class="mx-auto max-w-4xl px-4 py-4 sm:px-6 lg:px-8">
        <!-- Your slot content -->
        {{$slot}}
      </div>
    </main>
  </div>
</div>

    
</body>
</html>