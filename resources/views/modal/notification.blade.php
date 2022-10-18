<button data-modal-toggle="modalNotification" type="button" class="absolute right-4 top-3 p-2 ml-3 text-sm" aria-controls="navbar-default" aria-expanded="false">
    {{-- icon ketika muncul notifikasi --}} 
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" class="animate-ping absolute w-4" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 451.827 451.827" style="enable-background:new 0 0 451.827 451.827;" xml:space="preserve"><g><g><path style="fill:#e20606;" d="M225.922,0C101.351,0,0.004,101.347,0.004,225.917s101.347,225.909,225.917,225.909c124.554,0,225.901-101.347,225.901-225.909C451.823,101.347,350.476,0,225.922,0z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
    <p class="animate-ping absolute text-white ml-1 text-xs">4</p>
    {{-- tanda akhir icon ketika muncul notifikasi --}} 
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-8 items-center"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/></svg>
</button>

<!-- Top Right Modal -->
<div id="modalNotification" data-modal-placement="top-right" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex pl-10 pt-3 pr-3 pb-2 rounded-t dark:border-gray-600">
                <h3 class="text-2xl font-extrabold text-gray-900 dark:text-white">
                    Surat Tugas
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-full border-2 border-black text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modalNotification">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div>
                <div class="flex mb-10 pl-10 pr-10">
                    <p class="text-base leading-relaxed mr-5 text-gray-500 dark:text-gray-400">
                        Halo user, ada tugas baru yang diberikan kepadamu mohon selalu diperhatikan ketentuan tugas nya terima kasih. Selamat mengerjakan
                    </p>
                    <img src="../../imgs/hiasan5.png" class="w-24 inline-flex" alt="">
                </div>
                {{-- {{ $notif[0]->t_title }} --}}
                <div class="pl-5 pr-5 mx-auto space-y-5">
                    <div id="alert-3" class="bg-[#F2F2F2] w-full h-fit rounded-lg shadow-md p-4 flex role=" alert>
                        <div  class="basis-4/5">
                            <div class="flex justify-between">
                                <p class="text-base leading-relaxed font-extrabold text-black">
                                    Task 2
                                </p>
                                <button type="button" class="ml-auto -mx-1.5 -my-5 -mr-40 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                            </div>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                Memperbaiki dokumen penyalaan pada pelanggan A
                            </p>
                            <p class="text-xs leading-relaxed font-extrabold text-black">
                                Deadline : 01 Oktober 2022
                            </p>
                        </div>
                        <div class="mx-auto items-center">
                            {{-- @include('modal.validationtask') --}}
                        </div>
                    </div>
                </div>
    <script>
        var alert_del = document.querySelectorAll('.alert-del');
          alert_del.forEach((x) =>
            x.addEventListener('click', function () {
              x.parentElement.classList.add('hidden');
            }));
    </script>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 justify-center rounded-b border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="modalNotification" type="button" class="text-white bg-mainclr hover:bg-teal-500 rounded-full text-sm font-medium px-9 py-2 focus:z-10 dark:bg-teal-700 dark:text-teal-300 dark:hover:text-white dark:hover:bg-teal-600">OK</button>
            </div>
        </div>
    </div>
</div
