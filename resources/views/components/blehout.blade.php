<!DOCTYPE html>
<html class="h-full" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" 
        content="width=device-width, initial-scale=1">

    <title>Test</title>
    <link rel="icon" href="favicon.svg">
    @vite(['resources/js/app.js'])

</head>
<body>
<body class="bg-cream-40 text-black-40 h-full font-medium">
  <!-- Above is base.blade.php in whee-laravel minus lang, csrf token title app.css  -->
  <!-- No changes to nav -->
  <div class="min-h-full">
    <nav class="py-12">
      <div class="mx-auto flex max-w-4xl items-center justify-between px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-x-4">
          <a href="/" class="flex items-center gap-x-2 hover:underline">
            <span class="text-2xl font-bold">Min</span>
            <x-whee-logo />
          </a>

          <!-- Page Title -->
          <div class="flex items-center gap-x-2">
              <span class="text-gray-500">/</span>
              <span class="font-medium text-gray-700">{{ $heading }}</span>
          </div>        
        </div>

        <!-- Profile dropdown -->
      </div>
    </nav>
  
    <div class="py-6">
      <main>
        <div class="mx-auto max-w-4xl px-4 py-4 sm:px-6 lg:px-8">
          <!-- My slot content -->
          {{$slot}}
        </div>
      </main>
    </div>
  </div>

  </div>
</body>
</html>