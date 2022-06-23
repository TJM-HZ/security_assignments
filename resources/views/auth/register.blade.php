<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')"/>

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                         autofocus/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')"/>

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="new-password"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')"/>

                <x-input id="password_confirmation" class="block mt-1 w-full"
                         type="password"
                         name="password_confirmation" required/>
            </div>

            <div class="mt-4">
                Password Requirements:
                <ul class="list-disc text-red-600">
                    <li id="minChar">At least 16 characters</li>
                    <li id="lowercase">At least 1 <i>lowercase letter</i></li>
                    <li id="uppercase">At least 1 <i>UPPERCASE LETTER</i></li>
                    <li id="number">At least 1 <i>number (0 - 9)</i></li>
                    <li id="symbol">At least 1 <i>symbol (e.g., ! @ # $ % ^ & * ; : )</i></li>
                    <li id="match">Passwords must match</li>
                </ul>

            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

<script>
    var password = document.getElementById("password");
    var password_c = document.getElementById("password_confirmation");

    var li_minChar = document.getElementById("minChar");
    var li_lowercase = document.getElementById("lowercase");
    var li_uppercase = document.getElementById("uppercase");
    var li_number = document.getElementById("number");
    var li_symbol = document.getElementById("symbol");
    var li_match = document.getElementById("match");

    var clr_ok = "text-green-600";
    var clr_error = "text-red-600";

    document.addEventListener('keyup', function () {
        // Check password length
        if (password.value.length >= 16) {
            li_minChar.className = clr_ok;
        } else {
            li_minChar.className = "text-inherit";
        }

        // Check if password contains a lowercase character
        if (/[a-z]/.test(password.value)) {
            li_lowercase.className = clr_ok;
        } else {
            li_lowercase.className = "text-inherit";
        }

        // Check if password contains an UPPERCASE character
        if (/[A-Z]/.test(password.value)) {
            li_uppercase.className = clr_ok;
        } else {
            li_uppercase.className = "text-inherit";
        }

        // Check if password contains a number
        if (/\d/.test(password.value)) {
            li_number.className = clr_ok;
        } else {
            li_number.className = "text-inherit";
        }

        // Check if password contains a special character
        if (/[^a-zA-Z0-9]/.test(password.value)) {
            li_symbol.className = clr_ok;
        } else {
            li_symbol.className = "text-inherit";
        }

        // Check if passwords match
        if (password.value === password_c.va    lue) {
            li_match.className = clr_ok;
        } else {
            li_match.className = "text-inherit";
        }
    });
</script>
