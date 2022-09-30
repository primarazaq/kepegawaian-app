<nav class="bg-white border-gray-200">
    <div class="p-4 bg-white shadow-lg md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
      <div class="flex items-center text-black font-extrabold text-2xl w-full">
                Hello, {{ auth()->user()->name }}
            <button data-collapse-toggle="navbar-default" type="button" class="absolute right-4 top-3 p-2 ml-3 text-sm" aria-controls="navbar-default" aria-expanded="false">
                {{-- icon ketika muncul notifikasi --}}
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" class="absolute w-4" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 451.827 451.827" style="enable-background:new 0 0 451.827 451.827;" xml:space="preserve"><g><g><path style="fill:#e20606;" d="M225.922,0C101.351,0,0.004,101.347,0.004,225.917s101.347,225.909,225.917,225.909c124.554,0,225.901-101.347,225.901-225.909C451.823,101.347,350.476,0,225.922,0z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                <p class="absolute text-white ml-1 text-xs">4</p>
                {{-- tanda akhir icon ketika muncul notifikasi --}}
                
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-8 items-center"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/></svg>
            </button>
              <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                
              </div>
      </div>
    </div>
  </nav>
  