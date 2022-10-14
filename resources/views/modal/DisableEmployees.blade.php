<div id="popup-modal-disableEMP-{{ $user->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 w-52 text-gray-400 dark:text-gray-200 stroke-red-600" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin menonaktifkan 
                  data yang dipilih?</h3>
                  <div class="flex justify-center">
                    <button data-modal-toggle="popup-modal-disableEMP-{{ $user->id }}" type="button" class="text-gray-50 mr-8 bg-gray-400 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-3xl border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        No, cancel
                    </button>
                    <form action="/admin/home/employees/{{ $user->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button data-modal-toggle="popup-modal-disableEMP-{{ $user->id }}" type="submit" class="inline-flex border-0 text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-3xl text-sm items-center px-5 py-2.5 text-center mr-2">
                          Yes, I'm sure
                        </button>
                    </form>
                  </div>
            </div>
        </div>
    </div>
</div>