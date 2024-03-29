<style>
  [x-cloak] { 
      display: none !important;
   }
</style>
<div x-data="{ confirmDone: false }">
  <button @click="confirmDone =!confirmDone" type="button" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" data-modal-toggle="popup-modal-doneEMP">
    Tandai selesai!
</button>

  <div x-show="confirmDone" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center" aria-labelledby="modal-title" role="dialog" aria-modal="true">
      <div class="flex overflow-x-hidden fixed w-full md:inset-0 justify-center items-center">
          <div x-cloak @click="confirmDone = false" x-show="confirmDone" 
              x-transition:enter="transition ease-out duration-300 transform"
              x-transition:enter-start="opacity-0" 
              x-transition:enter-end="opacity-100"
              x-transition:leave="transition ease-in duration-200 transform"
              x-transition:leave-start="opacity-100" 
              x-transition:leave-end="opacity-0"
              class="fixed inset-0 transition-opacity bg-gray-800 bg-opacity-60" aria-hidden="true"
          ></div>

          <div x-cloak x-show="confirmDone" 
              x-transition:enter="transition ease-out duration-300 transform"
              x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
              x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
              x-transition:leave="transition ease-in duration-200 transform"
              x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
              x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
              class="inline-block p-8 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
          >

              <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-32 mx-auto" viewBox="0 0 128 128"><defs><style>.cls-1{fill:url(#linear-gradient);}.cls-2{fill:#c7cdd8;}.cls-3{fill:#ffe5c3;}.cls-4{fill:#47566a;}</style><linearGradient id="linear-gradient" x1="81.5" y1="95" x2="81.5" y2="33" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#dde1e8"/><stop offset="1" stop-color="#f3f4f5"/></linearGradient></defs><title>Sent Message</title><g id="Sent_Message" data-name="Sent Message"><path class="cls-1" d="M127,33c-2.66,16.52-9.21,57.12-10,62H36c.31-1.87-1.25,7.79,10-62Z"/><path class="cls-2" d="M127,33C86.31,65.8,88.6,64.33,85.8,65.31a12.09,12.09,0,0,1-12.89-3.19L46,33h5.62C76.33,59.74,74.81,58.6,77.94,60a12.1,12.1,0,0,0,12.43-1.66L121.8,33Z"/><path class="cls-3" d="M29,86H27a1,1,0,0,1,0-2h2A1,1,0,0,1,29,86Z"/><path class="cls-2" d="M117.65,91c-.53,3.28-.38,2.36-.65,4H36c.32-1.93.17-1,.65-4Z"/><path class="cls-4" d="M127.79,32.36c-.48-.6,4.3-.38-81.79-.38a1,1,0,0,0-.68.26C44.88,32.64,35,94.77,35,94.87a1,1,0,0,0,.58,1c.17.08,81.59.3,82.1-.16a1.15,1.15,0,0,0,.34-.6C128.66,29.1,128.23,32.89,127.79,32.36ZM116.33,92.74,90.27,63.91l35.3-28.45ZM46.67,35.23C74.78,65.64,72,62.61,72.67,63.3L37.44,92.48Zm42.06,27.3a11.08,11.08,0,0,1-15.07-1.1L48.33,34h75.78ZM74.26,64.64a13,13,0,0,0,14.33.46L114.7,94H38.83Z"/><path class="cls-4" d="M24,62H1a1,1,0,0,0,0,2H24A1,1,0,0,0,24,62Z"/><path class="cls-4" d="M37,41H19a1,1,0,0,0,0,2H37A1,1,0,0,0,37,41Z"/><path class="cls-4" d="M12,23H68a1,1,0,0,0,0-2H12A1,1,0,0,0,12,23Z"/><path class="cls-4" d="M61,105H53a1,1,0,0,0,0,2h8A1,1,0,0,0,61,105Z"/><path class="cls-4" d="M47,105H12a1,1,0,0,0,0,2H47A1,1,0,0,0,47,105Z"/><path class="cls-4" d="M20,84H7a1,1,0,0,0,0,2H20A1,1,0,0,0,20,84Z"/><path class="cls-4" d="M26,84a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z"/><path class="cls-4" d="M12,43h2a1,1,0,0,0,0-2H12A1,1,0,0,0,12,43Z"/></g></svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin menandai tugas ini selesai ?</h3>
                <div class="flex justify-center">
                  <form method="post" action="/pic/home/dashboard/{{ $task->task_id }}">
                      @method('put')
                      @csrf
                      <input type="hidden" name="selesai" value="{{ $task->task_id }}">
                      <button type="submit" class="text-white bg-mainclr hover:bg-teal-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Yes, I'm sure
                    </button>
                  </form>
                  <button  @click="confirmDone = false" type="button" class="text-gray-500 inline-flex bg-white hover:bg-gray-100 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">No, cancel</button>
                </div>
              </div>
          </div>
      </div>
  </div>
</div>