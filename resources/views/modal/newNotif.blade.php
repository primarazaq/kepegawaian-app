<!-- component -->

<style>
    [x-cloak] {
        display: none !important;
    }
</style>
<div x-data="{ notif: false }">
    {{-- icon ketika muncul notifikasi --}}
    @if (auth()->user()->level == 'pic')
        <button @click="notif =!notif" type="button" class="absolute right-4 top-3 p-2 ml-3 text-sm"
            aria-controls="navbar-default" aria-expanded="false">
            {{-- icon ketika muncul notifikasi --}}
            @if (count($notifPIC) > 0)
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" class="animate-pulse absolute w-4"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 451.827 451.827" style="enable-background:new 0 0 451.827 451.827;"
                    xml:space="preserve">
                    <g>
                        <g>
                            <path style="fill:#e20606;"
                                d="M225.922,0C101.351,0,0.004,101.347,0.004,225.917s101.347,225.909,225.917,225.909c124.554,0,225.901-101.347,225.901-225.909C451.823,101.347,350.476,0,225.922,0z" />
                        </g>
                    </g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                </svg>
            @endif
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-8 items-center">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
            </svg>
        </button>
    @elseif (auth()->user()->level == 'employee')
        <button @click="notif =!notif" type="button" class="absolute right-4 top-3 p-2 ml-3 text-sm"
            aria-controls="navbar-default" aria-expanded="false">
            {{-- icon ketika muncul notifikasi --}}
            @if (count($notif) > 0)
                @foreach ($notif as $item)
                    @if ($item->user_receiver_id === auth()->user()->id)
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            class="animate-pulse absolute w-4" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" viewBox="0 0 451.827 451.827"
                            style="enable-background:new 0 0 451.827 451.827;" xml:space="preserve">
                            <g>
                                <g>
                                    <path style="fill:#e20606;"
                                        d="M225.922,0C101.351,0,0.004,101.347,0.004,225.917s101.347,225.909,225.917,225.909c124.554,0,225.901-101.347,225.901-225.909C451.823,101.347,350.476,0,225.922,0z" />
                                </g>
                            </g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                        </svg>
                    @endif
                @endforeach
            @endif

            {{-- tanda akhir icon ketika muncul notifikasi --}}

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-8 items-center">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
            </svg>
        </button>
    @endif

    <div x-show="notif"
        class="fixed overflow-y-auto overflow-x-hidden -my-8 top-0 right-0 z-50 h-modal justify-end items-end"
        aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="relative p-4 h-full md:h-auto">
            <div x-cloak @click="notif = false" x-show="notif"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-800 bg-opacity-20" aria-hidden="true"></div>

            <div x-cloak x-show="notif" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">

                <div class="flex px-2 py-2 rounded-t dark:border-gray-600">
                    <h3 class="text-2xl font-extrabold text-gray-900 dark:text-white">
                        Notification
                    </h3>
                    <button @click="notif = false" type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-full border-2 border-black text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="modalNotification">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                @if (auth()->user()->level == 'employee')
                    <div>
                        @if (count($notif) > 0)
                            <div class="flex mb-10 px-2">
                                <p class="text-base leading-relaxed mr-5 text-gray-500 dark:text-gray-400">
                                    Halo user, ada tugas baru yang diberikan kepadamu mohon selalu diperhatikan
                                    ketentuan tugas nya, terimakasih. Selamat mengerjakan...
                                </p>
                                <img src="../../../imgs/hiasan5.png" class="w-24 inline-flex" alt="">
                            </div>
                            <div class="px-2 mx-auto space-y-5">
                                @foreach ($notif as $item)
                                    @if ($item->user_receiver_id === auth()->user()->id)
                                        <div id="alert-{{ $item->id }}"
                                            class="bg-[#F2F2F2] w-full h-fit rounded-lg shadow-md p-4 flex role=" alert>
                                            <div class="basis-4/5">
                                                <div class="flex justify-between">
                                                    <p class="text-base leading-relaxed font-extrabold text-black">
                                                        Task {{ $item->id }}
                                                    </p>
                                                    <button type="button"
                                                        class="ml-auto -mx-1.5 -my-4 -mr-36 bg-[#F2F2F2] text-mainclr rounded-lg focus:ring-2 focus:ring-mainclr p-1.5 hover:text-white hover:bg-teal-600 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                                                        data-dismiss-target="#alert-{{ $item->id }}"
                                                        aria-label="Close">
                                                        <span class="sr-only">Close</span>
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                    {{ $item->t_title }}
                                                </p>
                                                <p class="text-xs leading-relaxed font-extrabold text-black">
                                                    Deadline :
                                                    {{ $date = date('l, d F Y, H.i A', strtotime($item->t_due_date)) }}
                                                </p>
                                                </p>
                                            </div>
                                            {{-- <form method="post" action="/employee/home/dashboard/{{ $item->id }}">
                                            @method('put')
                                            @csrf --}}
                                            <div class="mx-auto my-auto items-center">
                                                <a href="/employee/home/mytask/{{ $item->id }}">
                                                    <button type="button"
                                                        class="text-white text-xl bg-mainclr hover:bg-teal-700 font-medium rounded-full px-10 py-1"
                                                        type="button">Lihat</button>
                                                </a>
                                            </div>
                                            {{-- </form> --}}
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="flex mb-10 pl-10 pr-10">
                                    <p class="text-base leading-relaxed mr-5 text-gray-500 dark:text-gray-400">
                                        Halo user, saat ini tidak ada tugas baru untuk anda, Terimakasih.
                                    </p>
                                    <img src="../../../imgs/hiasan5.png" class="w-24 inline-flex" alt="">
                                </div>
                                <div class="pl-5 pr-5 mx-auto space-y-5">
                        @endif
                    </div>
            </div>
            <script>
                var alert_del = document.querySelectorAll('.alert-del');
                alert_del.forEach((x) =>
                    x.addEventListener('click', function() {
                        x.parentElement.classList.add('hidden');
                    }));
            </script>

            <!-- Modal footer -->
            <div class="flex items-center p-6 justify-center rounded-b border-gray-200 dark:border-gray-600">
                <button @click="notif= false" type="button"
                    class="text-white bg-mainclr hover:bg-teal-500 rounded-full text-sm font-medium px-9 py-2 focus:z-10 dark:bg-teal-700 dark:text-teal-300 dark:hover:text-white dark:hover:bg-teal-600">OK</button>
            </div>


        </div>
        @endif
        @if (auth()->user()->level == 'pic')
            <div>
                @if (count($notifPIC) > 0)
                    <div class="flex mb-10 px-2">
                        <p class="text-base leading-relaxed mr-5 text-gray-500 dark:text-gray-400">
                            Halo {{ auth()->user()->name }}, ada beberapa pegawai yang sudah menyelesaikan tugas yang
                            kamu berikan!
                        </p>
                        <img src="../../../imgs/hiasan5.png" class="w-24 inline-flex" alt="">
                    </div>
                    {{-- {{ $notif[0]->t_title }} --}}


                    <div class="pl-2 pr-2 mx-auto space-y-5">
                        @foreach ($notifPIC as $item)
                            <?php
                            //calculate time left to close card notif for 24 hours
                            $seconds = strtotime($item->updated_at) - time();
                            
                            $days = floor($seconds / 86400);
                            $seconds %= 86400;
                            
                            $hours = floor($seconds / 3600);
                            $seconds %= 3600;
                            
                            $minutes = floor($seconds / 60);
                            $seconds %= 60;
                            ?>
                            @if ($item->user_sender_id === auth()->user()->id && $days == -1)
                                <div id="alert-{{ $item->id }}"
                                    class="bg-[#F2F2F2] w-full h-fit rounded-lg shadow-md p-4 flex role=" alert>
                                    <div class="basis-4/5">
                                        <div class="flex justify-between">
                                            <div class="flex">
                                                <img src="../../../imgs/done.png" class="w-6 mx-auto mr-2"
                                                    alt="">

                                                <p class="text-base leading-relaxed font-extrabold text-black">
                                                    Task {{ $item->id }}
                                                </p>
                                            </div>

                                            <button type="button"
                                                class="ml-auto -mx-1.5 -my-4 -mr-36 bg-[#F2F2F2] text-mainclr rounded-lg focus:ring-2 focus:ring-mainclr p-1.5 hover:text-white hover:bg-teal-600 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                                                data-dismiss-target="#alert-{{ $item->id }}" aria-label="Close">
                                                <span class="sr-only">Close</span>
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            {{ $item->t_title }}
                                        </p>
                                        <p class="text-xs leading-relaxed font-extrabold text-black">
                                            Nama Pegawai : {{ $item->name }}</p>
                                        </p>
                                        <?php
                                        //calculate time ago
                                        $seconds = time() - strtotime($item->updated_at);
                                        
                                        $days = floor($seconds / 86400);
                                        $seconds %= 86400;
                                        
                                        $hours = floor($seconds / 3600);
                                        $seconds %= 3600;
                                        
                                        $minutes = floor($seconds / 60);
                                        $seconds %= 60;
                                        ?>
                                        <div class="flex">
                                            <svg fill="#777777" xmlns="http://www.w3.org/2000/svg" class="mr-2"
                                                style="margin-top: 0.3%" viewBox="0 0 32 32" width="16px"
                                                height="16px">
                                                <path
                                                    d="M 16 4 C 9.3844239 4 4 9.3844287 4 16 C 4 22.615571 9.3844239 28 16 28 C 22.615576 28 28 22.615571 28 16 C 28 9.3844287 22.615576 4 16 4 z M 16 6 C 21.534697 6 26 10.465307 26 16 C 26 21.534693 21.534697 26 16 26 C 10.465303 26 6 21.534693 6 16 C 6 10.465307 10.465303 6 16 6 z M 15 8 L 15 17 L 22 17 L 22 15 L 17 15 L 17 8 L 15 8 z" />
                                            </svg>
                                            <p class="text-xs leading-relaxed font-extrabold text-grey">
                                                <?php
                                                if ($days > 0) {
                                                    echo "$days days ago";
                                                } elseif ($hours > 0) {
                                                    echo "$hours hours ago";
                                                } else {
                                                    echo "$minutes minutes ago";
                                                }
                                                ?>
                                            </p>

                                        </div>
                                    </div>
                                    {{-- <form method="post" action="/employee/home/dashboard/{{ $item->id }}">
                                            @method('put')
                                            @csrf --}}
                                    <div class="mx-auto my-auto items-center">
                                        <a href="/pic/home/dashboard/{{ $item->id }}">
                                            <button type="button"
                                                class="text-white text-xl bg-mainclr hover:bg-teal-700 font-medium rounded-full px-10 py-1"
                                                type="button">Lihat</button>
                                        </a>
                                    </div>
                                    {{-- </form> --}}
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="flex mb-10 pl-10 pr-10">
                            <p class="text-base leading-relaxed mr-5 text-gray-500 dark:text-gray-400">
                                Halo {{ auth()->user()->name }}, saat ini tidak ada notifikasi terbaru dari pegawai,
                                Terimakasih.
                            </p>
                            <img src="../../../imgs/hiasan5.png" class="w-24 inline-flex" alt="">
                        </div>
                        <div class="pl-5 pr-5 mx-auto space-y-5">
                @endif
            </div>
    </div>
    <script>
        var alert_del = document.querySelectorAll('.alert-del');
        alert_del.forEach((x) =>
            x.addEventListener('click', function() {
                x.parentElement.classList.add('hidden');
            }));
    </script>

    <!-- Modal footer -->
    <div class="flex items-center p-6 justify-center rounded-b border-gray-200 dark:border-gray-600">
        <button @click="notif = false" type="button"
            class="text-white bg-mainclr hover:bg-teal-500 rounded-full text-sm font-medium px-9 py-2 focus:z-10 dark:bg-teal-700 dark:text-teal-300 dark:hover:text-white dark:hover:bg-teal-600">OK</button>
    </div>
</div>

@endif
</div>
</div>
</div>
