<style>
    [x-cloak] { 
        display: none !important;
     }
  </style>
<div x-data="{ disableTask: false }">
    <button type="button" @click="disableTask =!disableTask" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete Task</button>

    <div x-show="disableTask" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
            <div x-cloak @click="disableTask = false" x-show="disableTask" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" 
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-800 bg-opacity-60" aria-hidden="true"
            ></div>

            <div x-cloak x-show="disableTask" 
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
                        <button @click="disableTask = false" type="button" class="text-gray-50 mr-8 bg-gray-400 hover:bg-gray-100 rounded-3xl border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">
                            No, cancel
                        </button>
                        <form action="/pic/home/dashboard/{{ $task->task_id }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="inline-flex border-0 text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-3xl text-sm items-center px-5 py-2.5 text-center mr-2">
                              Yes, I'm sure
                            </button>
                        </form>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

