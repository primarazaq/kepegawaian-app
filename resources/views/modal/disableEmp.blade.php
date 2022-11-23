<style>
    [x-cloak] { 
        display: none !important;
     }
  </style>
<div x-data="{ disableEMP: false }">
    <button @click="disableEMP =!disableEMP" class="block text-white bg-red-600 p-2 rounded-lg font-medium text-sm py-2 text-center" type="button">
        <svg version="1.1" class="w-5 fill-white" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 177.055 177.055" style="enable-background:new 0 0 177.055 177.055;" xml:space="preserve">
                            <path d="M0.001,88.527c0,48.814,39.713,88.527,88.527,88.527c48.813,0,88.526-39.713,88.526-88.527S137.341,0,88.528,0
                                C39.714,0,0.001,39.713,0.001,88.527z M88.528,24.304c35.413,0,64.224,28.811,64.224,64.224c0,13.324-4.081,25.712-11.055,35.983
                                L52.544,35.359C62.816,28.385,75.204,24.304,88.528,24.304z M124.511,141.696c-10.272,6.974-22.659,11.055-35.983,11.055
                                c-35.413,0-64.223-28.811-64.223-64.224c0-13.324,4.081-25.711,11.054-35.983L124.511,141.696z"/>
                                <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
      </button> 

    <div x-show="disableEMP" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
            <div x-cloak @click="disableEMP = false" x-show="disableEMP" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" 
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
            ></div>

            <div x-cloak x-show="disableEMP" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block p-8 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
            >

                <div class="text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 w-52 text-gray-400 dark:text-gray-200 stroke-red-600" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin menonaktifkan 
                      data yang dipilih?</h3>
                      <div class="flex justify-center">
                        <button  @click="disableEMP = false" type="button" class="text-gray-50 mr-8 bg-gray-400 hover:bg-gray-100 rounded-3xl border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">
                            No, cancel
                        </button>
                        <form action="/admin/home/employees/{{ $user->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="inline-flex border-0 text-white bg-red-600 hover:bg-red-800 font-medium rounded-3xl text-sm items-center px-5 py-2.5 text-center mr-2">
                              Yes, I'm sure
                            </button>
                        </form>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>