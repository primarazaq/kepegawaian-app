<style>
    [x-cloak] { 
        display: none !important;
     }
  </style>
<div x-data="{ enableEMP: false }">
    <button @click="enableEMP =!enableEMP" class="block text-white bg-yellow-400 p-2 rounded-lg font-medium text-sm py-2 text-center" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
          </svg>
          
      </button> 

    <div x-show="enableEMP" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
            <div x-cloak @click="enableEMP = false" x-show="enableEMP" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" 
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
            ></div>

            <div x-cloak x-show="enableEMP" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block p-8 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
            >

                <div class="text-center">
                    <img src="../../imgs/info.png" class="w-40 mx-auto mb-3" alt="">
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda ingin mengaktifkan kembali 
                      data yang dipilih?</h3>
                      <div class="flex justify-center">
                        <button  @click="enableEMP = false" type="button" class="text-gray-50 mr-8 bg-gray-400 hover:bg-gray-100 rounded-3xl border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">
                            No, cancel
                        </button>
                        <form method="post" action="/admin/home/employees/{{ $user->id }}">
                            @method('put')
                            @csrf
                            <input type="hidden" name="restore" value="{{ $user->id }}" hidden>
                            <button type="submit" class="inline-flex border-0 text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-3xl text-sm items-center px-5 py-2.5 text-center mr-2">
                              Yes, I'm sure
                            </button>
                        </form>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>