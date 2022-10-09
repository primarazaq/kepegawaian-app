
<!-- Modal toggle -->
<div class="mx-auto items-center">
    <button type="button" class="text-white text-2xl bg-mainclr hover:bg-teal-700 font-medium rounded-full px-16 py-1 mr-2 mt-11" type="button" data-modal-toggle="ModalMyTaskEMP">Detail</button>
</div>
  <!-- Main modal -->
  <div id="ModalMyTaskEMP" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
      <div class="relative w-8/12 h-fit md:h-auto">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                  <h3 class="font-semibold text-gray-900 ml-3 text-3xl dark:text-white">
                      Judul Tugas
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="ModalMyTaskEMP">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
                <div class="p-6 space-y-2 text-base">
                    {{-- ini Deskripsi tugas --}}
                    <div class="pr-32 pl-32">
                        <p class="leading-relaxed text-gray-500 pl-6 dark:text-gray-400">
                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                            totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, e
                            xplicabo. Nemo enim ipsam volup
                        </p>
                    </div>
                    <div class="pl-4">
                        <div class="flex pr-32 mb-2">
                            <div class="basis-1/5">
                                <p class="leading-relaxed text-gray-500 dark:text-gray-400">
                                No Tugas
                                </p>  
                            </div>
                            <p class="inline-flex leading-relaxed text-gray-500 dark:text-gray-400">
                                : 12412
                                </p>
                        </div>
                        <div class="flex pr-32 mb-2">
                            <div class="basis-1/5">
                                <p class="leading-relaxed text-gray-500 dark:text-gray-400">
                                    Deadline
                                </p>  
                            </div>
                            <p class="inline-flex leading-relaxed text-gray-500 dark:text-gray-400">
                                : 26 September 2022, 10.00 A.M.
                                </p>
                        </div>
                        <div class="flex pr-32 mb-2">
                            <div class="basis-1/5">
                                <p class="leading-relaxed text-gray-500 dark:text-gray-400">
                                    Terakhir Diubah
                                </p>  
                            </div>
                            <p class="inline-flex leading-relaxed text-gray-500 dark:text-gray-400">
                                : 24 September 2022, 16.30 P.M.
                                </p>
                        </div>
                        <div class="flex pr-32 mb-2">
                            <div class="basis-1/5">
                                <p class="leading-relaxed text-gray-500 dark:text-gray-400">
                                    Sumber Tugas
                                </p>  
                            </div>
                            <p class="inline-flex leading-relaxed text-gray-500 dark:text-gray-400">
                                : PIC
                            </p>
                        </div>
                        <div class="flex pr-32">
                            <div class="basis-1/5">
                                <p class="leading-relaxed text-gray-500 dark:text-gray-400">
                                    Attachtment
                                </p>  
                            </div>
                            <div class="mb-4">
                                <label for="editor" class="ml-4 text-lg font-semibold text-gray-900 dark:text-gray-300"></label>
                                <input id="editor" class="w-5/6" type="hidden" name="editor">
                                <trix-editor input="editor"></trix-editor>
                            </div>
                        </div>
                        <div class="flex pr-32 mb-2">
                            <div class="basis-1/5">
                                <p class="leading-relaxed text-gray-500 dark:text-gray-400 mt-1">
                                    Deskripsi
                                </p>  
                            </div>
                            <p class="inline-flex leading-relaxed text-gray-500 dark:text-gray-400 mr-2 mt-1">
                                : 
                            </p>
                            <div class="flex-1">
                                <label for="small-input" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                <input type="text" id="small-input" class=" p-2 w-11/12 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500" placeholder="Masukkan deskripsi bukti progress kerja dengan lengkap...">
                            </div>
                        </div>
                        
                    </div>
                </div>
              <!-- Modal footer -->
              <div class="flex items-center p-6 space-x-2 justify-center rounded-b border-t border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="ModalMyTaskEMP" type="button" class="text-gray-500 bg-white hover:bg-gray-100 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Cancel</button>
                  <button data-modal-toggle="ModalMyTaskEMP" type="button" class="text-white bg-mainclr hover:bg-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-teal-600 dark:hover:bg-teal-700">Submit</button>
              </div>
          </div>
      </div>
  </div>
  