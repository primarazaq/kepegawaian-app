<style>
    [x-cloak] {
        display: none !important;
    }
</style>
<div x-data="{ disableCommEMP: false }">
    <button @click="disableCommEMP =!disableCommEMP" type="button" data-modal-toggle="popup-Del-CommentEMP"
        class="block py-2 w-full px-4 hover:bg-mainclr hover:bg-opacity-30 dark:hover:bg-gray-600 dark:hover:text-white">Hapus
        Respon</button>

    <div x-show="disableCommEMP"
        class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center"
        aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div
            class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
            <div x-cloak @click="disableCommEMP = false" x-show="disableCommEMP"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

            <div x-cloak x-show="disableCommEMP" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">

                <div class="p-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        class="w-32 mx-auto" viewBox="0 0 128 128">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: url(#linear-gradient);
                                }

                                .cls-2 {
                                    fill: #c7cdd8;
                                }

                                .cls-3 {
                                    fill: url(#linear-gradient-2);
                                }

                                .cls-4 {
                                    fill: #dd4e6a;
                                }

                                .cls-5 {
                                    fill: #47566a;
                                }
                            </style>
                            <linearGradient id="linear-gradient" x1="64" y1="124.8" x2="64"
                                y2="3" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#dde1e8" />
                                <stop offset="1" stop-color="#f3f4f5" />
                            </linearGradient>
                            <linearGradient id="linear-gradient-2" x1="64" y1="88" x2="64"
                                y2="20" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#da5466" />
                                <stop offset="1" stop-color="#e87092" />
                            </linearGradient>
                        </defs>
                        <title>No Comment</title>
                        <g id="No_Comment" data-name="No Comment">
                            <path class="cls-1"
                                d="M127,19V90a16,16,0,0,1-16,16H71L49,124.8V106H17A16,16,0,0,1,1,90V19A16,16,0,0,1,17,3h94A16,16,0,0,1,127,19Z" />
                            <path class="cls-2"
                                d="M127,83v7a16,16,0,0,1-16,16H71L49,124.8V106H17A16,16,0,0,1,1,90V83A16,16,0,0,0,17,99h94A16,16,0,0,0,127,83Z" />
                            <path class="cls-3"
                                d="M64,20A34,34,0,1,0,98,54,34,34,0,0,0,64,20ZM38,54c0-21.5,24.48-33.36,41.33-21L43,69.33A25.81,25.81,0,0,1,38,54ZM64,80a25.81,25.81,0,0,1-15.33-5L85,38.67C97.36,55.52,85.49,80,64,80Z" />
                            <path class="cls-4"
                                d="M64,88A34,34,0,0,1,30,52.5,34,34,0,0,0,98,52.5,34,34,0,0,1,64,88Z" />
                            <path class="cls-5"
                                d="M111,2H17A17,17,0,0,0,0,19V90a17,17,0,0,0,17,17H48V124.8a1,1,0,0,0,1,1c.55,0-1.22,1.36,22.38-18.8H111a17,17,0,0,0,17-17V19A17,17,0,0,0,111,2Zm15,88a15,15,0,0,1-15,15H71c-.57,0,.94-1.13-21,17.61V106a1,1,0,0,0-1-1H17A15,15,0,0,1,2,90V19A15,15,0,0,1,17,4h94a15,15,0,0,1,15,15Z" />
                            <path class="cls-5"
                                d="M64,19A35,35,0,1,0,99,54,35.06,35.06,0,0,0,64,19Zm0,68A33,33,0,1,1,97,54,33,33,0,0,1,64,87Z" />
                            <path class="cls-5"
                                d="M79.93,32.19A26.72,26.72,0,0,0,64,27c-22.26,0-34.71,25.39-21.81,43a1,1,0,0,0,.82.42c.65,0-1.94,2.37,37-36.62A1,1,0,0,0,79.93,32.19ZM43.15,67.75C32.3,51.41,44,29,64,29a24.7,24.7,0,0,1,13.75,4.13Z" />
                            <path class="cls-5"
                                d="M85.07,37.65c-.73,0,1.71-2.21-37.12,36.62a1,1,0,0,0,.12,1.54C65.6,88.69,91,76.3,91,54a26.72,26.72,0,0,0-5.21-15.93A1,1,0,0,0,85.07,37.65ZM64,79a24.7,24.7,0,0,1-13.75-4.13l34.6-34.6C95.7,56.59,84,79,64,79Z" />
                        </g>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Komentarmu akan terhapus
                        secara permanen!, apakah anda yakin akan menghapus komentar anda??</h3>
                    <div class="flex justify-center">
                        <form action="/employee/home/mytask/{{ $data->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"
                                class="text-white bg-mainclr hover:bg-teal-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Yes,
                                I'm sure</button>
                        </form>
                        <button @click="disableCommEMP =!disableCommEMP" type="button"
                            class="text-gray-500 inline-flex bg-white hover:bg-gray-100 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                            cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
