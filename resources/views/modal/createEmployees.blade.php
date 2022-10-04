<!-- Modal toggle -->
<button class="bg-mainclr w-28 p-1 rounded-full font-extrabold text-white" type="button" data-modal-toggle="ModalCreateEMP">
    <p>
        +
    </p>
</button>

<!-- Main modal -->
  <div id="ModalCreateEMP" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center ">
      <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
          <!-- Modal content -->
          <div class="relative bg-white rounded-xl border-mainclr border-4 shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                <div class="bg-mainclr w-36 p-1 rounded-full text-white mb-3 mr-4 flex">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 class="w-4 fill-white ml-2 mr-3" viewBox="0 0 45.902 45.902" style="enable-background:new 0 0 45.902 45.902;"
	 xml:space="preserve">
<g>
	<g>
		<path d="M43.162,26.681c-1.564-1.578-3.631-2.539-5.825-2.742c1.894-1.704,3.089-4.164,3.089-6.912
			c0-5.141-4.166-9.307-9.308-9.307c-4.911,0-8.932,3.804-9.281,8.625c4.369,1.89,7.435,6.244,7.435,11.299
			c0,1.846-0.42,3.65-1.201,5.287c1.125,0.588,2.162,1.348,3.066,2.26c2.318,2.334,3.635,5.561,3.61,8.851l-0.002,0.067
			l-0.002,0.057l-0.082,1.557h11.149l0.092-12.33C45.921,30.878,44.936,28.466,43.162,26.681z"/>
		<path d="M23.184,34.558c1.893-1.703,3.092-4.164,3.092-6.912c0-5.142-4.168-9.309-9.309-9.309c-5.142,0-9.309,4.167-9.309,9.309
			c0,2.743,1.194,5.202,3.084,6.906c-4.84,0.375-8.663,4.383-8.698,9.318l-0.092,1.853h14.153h15.553l0.092-1.714
			c0.018-2.514-0.968-4.926-2.741-6.711C27.443,35.719,25.377,34.761,23.184,34.558z"/>
		<path d="M6.004,11.374v3.458c0,1.432,1.164,2.595,2.597,2.595c1.435,0,2.597-1.163,2.597-2.595v-3.458h3.454
			c1.433,0,2.596-1.164,2.596-2.597c0-1.432-1.163-2.596-2.596-2.596h-3.454V2.774c0-1.433-1.162-2.595-2.597-2.595
			c-1.433,0-2.597,1.162-2.597,2.595V6.18H2.596C1.161,6.18,0,7.344,0,8.776c0,1.433,1.161,2.597,2.596,2.597H6.004z"/>
	</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                    <div class="font-extrabold">
                        <p>Employees</p>
                    </div>
                </div>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-mainclr rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="ModalCreateEMP">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
                <div class="p-5">
                    <div>
                        <label for="nama-pegawai" class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">Nama Pegawai</label>
                        <input type="text" id="nama-pegawai" class="mb-2 block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-mainclr focus:border-mainclr dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainclr dark:focus:border-mainclr">
                    </div>
                    <div class="relative">
                        <label for="tanggal-lahir" class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal Lahir</label>
                        <input datepicker datepicker-autohide type="date" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-mainclr focus:border-mainclr block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainclr dark:focus:border-mainclr" placeholder="Select date">
                    </div>
                    <div>
                        <label for="nip" class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">NIP</label>
                        <input type="text" id="nip" class="mb-2 block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-mainclr focus:border-mainclr dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainclr dark:focus:border-mainclr">
                    </div>
                    <div class="relative">
                        <label for="tanggal-mulai" class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal Mulai</label>
                        <input type="text" id="disabled-input-2" aria-label="disabled input-2" class="mb-2 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mainclr focus:border-mainclr block w-full p-2 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-mainclr dark:focus:border-mainclr" value="21/06/2020" disabled>
                    </div>
                    <div>
                        <label for="status" class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">Status</label>
                        <div class="flex">
                            <div class="flex w-full items-center pl-4 rounded border border-gray-200 dark:border-gray-700">
                                <input id="bordered-radio-createEMP1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-mainclr bg-gray-100 border-gray-300 focus:ring-mainclr dark:focus:ring-mainclr dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-createEMP1" class="py-2 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">PIC</label>
                            </div>
                            <div class="flex w-full items-center pl-4 rounded border border-gray-200 dark:border-gray-700">
                                <input checked id="bordered-radio-createEMP2" type="radio" value="" name="bordered-radio" class="w-4 h-4 bg-gray-100 text-mainclr border-gray-300 focus:ring-mainclr dark:focus:ring-mainclr dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-createEMP2" class="py-2 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Pegawai</label>
                            </div>
                        </div>
                    </div>
                </div>
              <!-- Modal footer -->
              <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200  dark:border-gray-600">
                  <button data-modal-toggle="ModalCreateEMP" type="button" class="text-white mx-auto bg-mainclr font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:bg-teal-500 focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800">+ Create</button>
              </div>
          </div>
      </div>
  </div>
  