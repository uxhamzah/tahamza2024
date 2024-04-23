<x-guest-layout>
    <div class="flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white md:border md:rounded-lg md:p-6 md:shadow-lg">
            <div>
                <div class="flex justify-center align-center">
                    <a href="{{ route('welcome') }}" class="inline-block">
                        <img class="mx-auto h-12 w-auto" src="https://as1.ftcdn.net/v2/jpg/01/21/19/68/1000_F_121196831_WUEMcYEfnxDwtn0lj96D7SfT4V0bF4ac.jpg" alt="Diagnose Logo">
                    </a>
                </div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    {{ __("Please Check Your Email")}}
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </p>
            </div>

            <x-jet-validation-errors class="my-4" />

            @if (session('status') == 'verification-link-sent')
                <div class="my-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="grid grid-flow-col">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-bold rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>

                <form class="ml-4" method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="flex justify-center py-2 px-4 border border-transparent text-sm font-bold rounded-md text-black hover:text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        {{ __('Logout') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
