<button type="button" class="text-white text-xl bg-mainclr hover:bg-teal-700 font-medium rounded-full px-10 py-1 mr-2 mt-5" type="button" data-modal-toggle="popup-validationTask">Detail</button>
  
  <div id="popup-validationTask" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
      <div class="relative p-4 w-full max-w-xl h-fit md:h-auto">
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-validationTask">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Close modal</span>
              </button>
              <div class="p-6 text-center">
                <div class="flex rounded-t dark:border-gray-600">
                    <h3 class="text-2xl mx-auto font-bold text-gray-900 dark:text-white">
                        Task 1
                    </h3>
                </div>
                <div class="p-6">
                    <div class="flex">
                        <div class="basis-2/5 text-sm space-y-3 text-left leading-relaxed text-gray-500 dark:text-gray-400">
                            <p>NO Tugas</p>
                            <p>Nama Pengirim</p>
                            <p>Deadline</p>
                            <p>Sumber Tugas</p>
                            <p>Detail Tugas</p>
                        </div>
                        <div class="text-sm space-y-3 text-left leading-relaxed">
                            <p>: 12832</p>
                            <p>: Hilman Ahmad Fathoni</p>
                            <p>: 26 September 2022, 10.00 A.M.</p>
                            <p>: PIC</p>
                            <p>: Tugas Memperbaiki dokumen Penyalaan pada Pelaggan A</p>
                        </div>
                    </div>
                </div>
                  <button data-modal-toggle="popup-validationTask" type="button" class="text-white bg-mainclr hover:bg-teal-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2 text-center mr-2">
                      Terima Tugas
                  </button>
                  <button data-modal-toggle="popup-validationTask" type="button" class="text-gray-500 bg-white hover:bg-gray-100 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tolak Tugas</button>
              </div>
          </div>
      </div>
  </div>