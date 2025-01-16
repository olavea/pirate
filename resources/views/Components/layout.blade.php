<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" 
        content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
    <title>pirate uploads</title>
</head>
<body class="h-full p-4 bg-green-300 font-black">
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
  <nav class="bg-gradient-to-b from-orange-400 to-yellow-400">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="size-8" src="https://ouch-cdn2.icons8.com/fu_mtAUJ3rMk0dopU-ZDYz6PdZHr8w6IJhJeQEnRfuc/rs:fit:368:315/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNjc2/LzdjNjJhNWM1LTk4/NDYtNGYyYS05YzNl/LTcwYjU3NDBlNTZm/NC5wbmc.png" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <x-nav href="/" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Tall Tales</x-nav>
              <x-nav href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-700 hover:text-white">about</x-nav>
              <x-nav href="/pirate" class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-700 hover:text-white">Upload Loot</x-nav>
              
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full bg-orange-500 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              
              <svg enable-background="new 0 0 248.365 276.553" height="33" viewBox="0 0 248.365 276.553" width="32" xmlns="http://www.w3.org/2000/svg"><path d="m229.726 71.099c-29.598-58.818-101.634-82.204-160.227-51.691-56.687 29.52-79.66 99.67-51.433 157.012 16.353 33.22 46.165 55.309 79.56 63.011 10.899 2.514 20.109 9.752 25.137 19.743l.272.541c4.886 9.709 16.717 13.619 26.426 8.733l75.392-37.938c9.709-4.886 13.619-16.717 8.733-26.426l-.271-.539c-5.053-10.041-5.298-21.791-.814-32.099 13.52-31.076 13.65-67.707-2.775-100.347z" fill="#fff"/><path d="m140.64 276.561c-2.711 0-5.434-.435-8.083-1.31-6.513-2.152-11.798-6.712-14.881-12.839l-.271-.54c-4.242-8.429-11.941-14.478-21.127-16.596-36.564-8.433-67.033-32.564-83.594-66.207-14.35-29.148-16.638-62.338-6.445-93.457 10.192-31.119 31.675-56.521 60.489-71.527 29.738-15.485 63.674-18.347 95.554-8.055 31.888 10.293 57.743 32.444 72.803 62.373 16.63 33.047 17.693 71.478 2.918 105.438-3.808 8.75-3.562 18.594.671 27.008l.271.54c3.084 6.127 3.597 13.088 1.444 19.601s-6.713 11.798-12.84 14.881l-75.392 37.938c-3.633 1.828-7.563 2.752-11.517 2.752zm-16.634-264.596c-17.8 0-35.462 4.29-51.735 12.765-53.627 27.927-75.529 94.786-48.822 149.04 14.962 30.394 42.489 52.195 75.525 59.813 12.674 2.923 23.298 11.268 29.147 22.894l.271.539c1.644 3.266 4.459 5.695 7.929 6.841 3.47 1.148 7.177.874 10.441-.769l75.392-37.938c3.265-1.643 5.693-4.458 6.84-7.927 1.146-3.469.874-7.178-.769-10.441l-.271-.54c-5.841-11.607-6.189-25.162-.956-37.189 13.35-30.683 12.39-65.402-2.633-95.256-13.605-27.037-36.963-47.048-65.771-56.347-11.354-3.666-23.001-5.485-34.588-5.485z"/><path d="m135.838 165.767-1.62 28.198c-.419 7.288 7.209 12.296 13.73 9.015l25.23-12.696c6.521-3.281 7.044-12.391.942-16.398l-23.61-15.502c-6.102-4.006-14.253.095-14.672 7.383z"/><circle cx="174.254" cy="111.327" r="28.271"/><circle cx="83.899" cy="156.794" r="28.271"/><path d="m158.666 269.82c-2.195 0-4.311-1.209-5.364-3.304l-11.054-21.966c-1.49-2.96-.298-6.567 2.662-8.057 2.96-1.489 6.567-.297 8.057 2.663l11.054 21.966c1.49 2.96.298 6.567-2.662 8.057-.866.435-1.787.641-2.693.641z"/><path d="m192.27 252.911c-2.195 0-4.311-1.209-5.364-3.305l-11.053-21.966c-1.49-2.96-.298-6.567 2.662-8.057 2.962-1.489 6.567-.297 8.057 2.663l11.053 21.966c1.49 2.96.298 6.567-2.662 8.057-.866.435-1.787.642-2.693.642z"/><path d="m215.906 241.017c-2.195 0-4.311-1.209-5.364-3.304l-11.054-21.965c-1.49-2.96-.298-6.567 2.662-8.057 2.962-1.491 6.568-.297 8.057 2.662l11.054 21.965c1.49 2.96.298 6.567-2.662 8.057-.865.435-1.786.642-2.693.642z"/></svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-orange-500 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="size-10 rounded-full" src="https://ouch-cdn2.icons8.com/4xuofPQxaI9xca-6qAEKts1bBpv5Lg_ye3_UyboPZyE/rs:fit:368:368/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNzQz/L2ExMmNlMWZlLTc3/MjAtNDUyZC1hNDcx/LTA1ZTc1YmIyZjI5/Yy5wbmc.png" alt="">
                </button>
              </div>

              
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">about</a>
        <a href="/pirate" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Pirate</a>
       
      </div>
      <div class="border-t border-gray-700 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white">Tom Cook</div>
            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
          </div>
          <button type="button" class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
          </button>
        </div>
        
      </div>
    </div>
  </nav>

  <header class="bg-gradient-to-b from-yellow-400 to-orange-400 shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Tall Tales</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
      {{$slot}}
    </div>
  </main>
</div>

    
</body>
</html>