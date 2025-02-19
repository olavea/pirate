<x-layout>
    <x-slot:heading>
                 
    <span
        class="font-black text-transparent
            bg-clip-text bg-gradient-to-r
            from-pink-300 to-orange-600
            dark:from-pink-400 dark:to-orange-600"
        >
          Re  
        </span> 
        <span
        class="font-black text-transparent
            bg-clip-text bg-gradient-to-r
            from-yellow-400 to-green-500 text-8xl
            dark:from-yellow-400 dark:to-green-500"
        >
            gis
        </span>
        <span
        class="font-black text-transparent
            bg-clip-text bg-gradient-to-r
            from-blue-300 to-purple-600
            dark:from-blue-400 dark:to-purple-500"
        >
            ter 
        </span>
    

    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="first_name">First Name</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="first_name" id="first_name" required/>

                            <x-form-error name="first_name" />
                        </div>
                    </x-form-field>

                    
                    <x-form-field>
                        <x-form-label for="last_name">Last Name</x-form-label>

                    <div class="mt-2">
                            <x-form-input name="last_name" id="last_name" required />

                            <x-form-error name="last_name" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email" required />

                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password" >Password</x-form-label>
                        <div class="mt-2">
                        <x-form-input name="password" id="password" type="password" required />

                        <x-form-error name="password" />
                        </div>
                    </x-form-field>
                    

                    <x-form-field>
                        <x-form-label for="password_confirmation" >confirm Password</x-form-label>
                        <div class="mt-2">
                        <x-form-input name="password_confirmation" id="password_confirmation" type="password_confirmation" required />

                        <x-form-error name="password_confirmation" />
                        </div>
                    </x-form-field>
                    
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>