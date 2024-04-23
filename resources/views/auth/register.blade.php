<x-guest-layout>
    <div class="flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white md:border md:rounded-lg md:p-6 md:shadow-lg">
            <div>
                <div class="flex justify-center align-center">
                    <a href="{{ route('welcome') }}" class="inline-block">
                        <img class="mx-auto h-12 w-auto" src="https://as1.ftcdn.net/v2/jpg/01/21/19/68/1000_F_121196831_WUEMcYEfnxDwtn0lj96D7SfT4V0bF4ac.jpg" alt="Diagnose Logo">
                    </a>
                </div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900 px-3">
                    {{ __("Register to Diagnose")}}
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    {{ __("Already have an account ?") }}
                    <a href="{{ route('login') }}" class="font-bold text-green-600 hover:text-green-500">
                    {{ __('Sign In') }}
                    </a>
                </p>
            </div>

            <x-jet-validation-errors class="my-4" />

            @if (session('status'))
                <div class="my-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
                @csrf
                <input type="hidden" name="remember" value="true">

                <div class="rounded-md shadow-sm -space-y-px">
                    <!-- name field -->
                    <label for="name" class="sr-only">{{ __('Fullname') }}</label>
                    <input id="name" name="name" type="text" autocomplete="name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm" placeholder="{{ __('Full Name') }}" value="{{old('name')}}" autofocus>

                    <!-- email field -->
                    <label for="email-address" class="sr-only">{{ __('Email address') }}</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required
                    class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm" placeholder="{{ __('Email address') }}" value="{{old('email')}}">

                    <!-- gender field -->
                    <label for="gender" class="sr-only">{{ __('Gender') }}</label>
                    @php
                        $gender = collect(['male', 'female']);
                    @endphp
                    <select name="gender" id="gender" class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm" required>
                        @foreach ($gender as $item)
                            <option value="{{ $item }}" {{ old('gender') == $item ? 'selected' : '' }}>
                                {{ $item === 'male' ? 'Laki-Laki' : 'Perempuan' }}
                            </option>
                        @endforeach
                    </select>

                    <!-- age field -->
                    <label for="age" class="sr-only">{{ __('Age') }}</label>
                    <input id="age" name="age" type="number" autocomplete="age" min="17" max="70" required
                    class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm" placeholder="{{ __('Age') }}" value="{{old('age')}}">

                    <!-- password field -->
                    <label for="password" class="sr-only">{{ __('Password') }}</label>
                    <input id="password" name="password" type="password" autocomplete="new-password" required class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm" placeholder="{{ __('Password') }}">

                    <!-- password confirmation field -->
                    <label for="password_confirmation" class="sr-only">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm" placeholder="{{ __('Password Confirmation') }}">
                </div>

                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 mb-3 border border-transparent text-sm font-bold rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    {{ __('Sign Up') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
