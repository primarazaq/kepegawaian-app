<nav class="bg-white border-gray-200">
    <div class="p-4 bg-white shadow-lg md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
      <div class="flex items-center text-black font-extrabold text-2xl w-full">
                Hello, {{ auth()->user()->name }}
            @include('modal.notification')
      </div>
    </div>
  </nav>
  