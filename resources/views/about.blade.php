<x-app-layout>
  <x-slot name="header">
      <h2 class="font-bold text-2xl text-white leading-tight tracking-wider">
          {{ __('About Diagnose') }}
      </h2>
  </x-slot>

  <section class="py-10 px-3 lg:px-6">
      <div class="bg-white overflow-hidden shadow-md px-4 py-8 sm:rounded-lg">
          <div class="flex flex-col items-center">
            <img class="h-24 w-auto" src="https://as1.ftcdn.net/v2/jpg/01/21/19/68/1000_F_121196831_WUEMcYEfnxDwtn0lj96D7SfT4V0bF4ac.jpg" alt="Diagnose Logo">
            <p class="mt-8 text-center text-lg sm:max-w-lg md:text-xl">
              {{ __('Diagnose is an expert system for early detection of anxiety disorders.') }}
            </p>
            <span class="mt-12 text-center sm:text-lg">
              {{ __("Thank's for") }}
            </span>
            <div class="flex flex-row justify-center mt-6 space-x-6">
              <address class="not-italic text-center w-4/12">
                <p class="font-bold text-xl">
                  Politeknik Harapan Bersama Tegal
                </p>
                <a href="https://poltekharber.ac.id/" target="_blank" rel="noopener noreferrer" class="mt-2 inline-flex">
                  <img src="https://th.bing.com/th/id/OIP.2TUgUAMIZO6WIJADkfqm_gHaFj?w=200&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Personal Growth Logo" class="h-10 w-auto">
                </a>
                <p class="font-bold mt-3">
                  {{ __('Address') }} :
                </p>
                <a href="https://www.bing.com/maps?osid=eb535765-4ade-4b3f-a113-2cbc7cc0bd1a&cp=-6.874066~109.110889&lvl=16&pi=0&imgid=776fccb6-a49d-4518-a223-7665fcaa7ea4&v=2&sV=2&form=S00027" target="_blank" rel="noopener noreferrer" class="mt-2 inline-flex hover:text-greeen-700">
                Jl. Dewi Sartika 71 Pesurungan Kidul, Kota Tegal 52117 Tegal Jawa Tengah
                  </a>
                <p class="font-bold mt-3">
                  {{ __('Telephone') }} :
                </p>
                <a href="tel:+62 877-2211-2002" class="mt-2 inline-flex hover:text-greeen-700">
                  +62 877-2211-2002
                </a>
              </address>
              <address class="not-italic text-center w-4/12">
                <p class="font-bold text-xl">
                  Personal Growth
                </p>
                <a href="https://www.personalgrowth.co.id/" target="_blank" rel="noopener noreferrer" class="mt-2 inline-flex">
                  <img src="https://www.virtuesforlife.com/wp-content/uploads/2015/01/personal-growth1.jpg" alt="Personal Growth Logo" class="h-10 w-auto">
                </a>
                <p class="font-bold mt-3">
                  {{ __('Address') }} :
                </p>
                <a href="https://maps.app.goo.gl/3awyFFp4ML2TzvJx8" target="_blank" rel="noopener noreferrer" class="mt-2 inline-flex hover:text-greeen-700">
                Jl. Nasional No.1, Grinting, Bulakamba, Kabupaten Brebes, Jawa Tengah 52253, Indonesia                </a>
                <p class="font-bold mt-3">
                  {{ __('Telephone') }} :
                </p>
                <a href="tel:+62 851-7988-3340" class="mt-2 inline-flex hover:text-greeen-700">
                +62 851-7988-3340
                </a>
              </address>
            </div>
          </div>
      </div>
  </section>
</x-app-layout>
