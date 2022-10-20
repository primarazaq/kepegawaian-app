<!-- Top Right Modal -->

            <!-- Modal body -->

@if (auth()->user()->level=="employee")
<div id="modalNotification" data-modal-placement="top-right" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex pl-10 pt-3 pr-3 pb-2 rounded-t dark:border-gray-600">
                <h3 class="text-2xl font-extrabold text-gray-900 dark:text-white">
                    Notification
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-full border-2 border-black text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modalNotification">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div>
                @if (count($notif) > 0)
                <div class="flex mb-10 pl-10 pr-10">
                    <p class="text-base leading-relaxed mr-5 text-gray-500 dark:text-gray-400">
                        Halo user, ada tugas baru yang diberikan kepadamu mohon selalu diperhatikan ketentuan tugas nya, terimakasih. Selamat mengerjakan...
                    </p>
                    <img src="../../imgs/hiasan5.png" class="w-24 inline-flex" alt="">
                </div>
                {{-- {{ $notif[0]->t_title }} --}}
                
                
                <div class="pl-5 pr-5 mx-auto space-y-5">
                    

                        @foreach ($notif as $item)
                                @if ($item->user_receiver_id === auth()->user()->id)
                                    <div id="alert-{{ $item->id }}" class="bg-[#F2F2F2] w-full h-fit rounded-lg shadow-md p-4 flex role=" alert>
                                        <div  class="basis-4/5">
                                            <div class="flex justify-between">
                                                <p class="text-base leading-relaxed font-extrabold text-black">
                                                    Task {{ $item->id }}
                                                </p>
                                                <button type="button" class="ml-auto -mx-1.5 -my-4 -mr-36 bg-[#F2F2F2] text-mainclr rounded-lg focus:ring-2 focus:ring-mainclr p-1.5 hover:text-white hover:bg-teal-600 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-{{ $item->id }}" aria-label="Close">
                                                    <span class="sr-only">Close</span>
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </button>
                                            </div>
                                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                {{ $item->t_title }}
                                            </p>
                                            <p class="text-xs leading-relaxed font-extrabold text-black">
                                                Deadline : {{ $date = date('l, d F Y, H.i A',strtotime($item->t_due_date)) }}</p>
                                            </p>
                                        </div>
                                        {{-- <form method="post" action="/employee/home/dashboard/{{ $item->id }}">
                                            @method('put')
                                            @csrf --}}
                                        <div class="mx-auto items-center">
                                            <a href="/employee/home/mytask">
                                            <button type="button" class="text-white text-xl bg-mainclr hover:bg-teal-700 font-medium rounded-full px-10 py-1 mr-2 mt-5" type="button">Lihat</button>
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
                        <img src="../../imgs/hiasan5.png" class="w-24 inline-flex" alt="">
                    </div>
                    <div class="pl-5 pr-5 mx-auto space-y-5">
                    @endif
                </div>
            </div>
    <script>
        var alert_del = document.querySelectorAll('.alert-del');
          alert_del.forEach((x) =>
            x.addEventListener('click', function () {
              x.parentElement.classList.add('hidden');
            }));
    </script>
            
            <!-- Modal footer -->
            <div class="flex items-center p-6 justify-center rounded-b border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="modalNotification" type="button" class="text-white bg-mainclr hover:bg-teal-500 rounded-full text-sm font-medium px-9 py-2 focus:z-10 dark:bg-teal-700 dark:text-teal-300 dark:hover:text-white dark:hover:bg-teal-600">OK</button>
            </div>
        </div>
        </div>
        </div>

@endif

@if (auth()->user()->level=="pic")
<div id="modalNotification" data-modal-placement="top-right" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex pl-10 pt-3 pr-3 pb-2 rounded-t dark:border-gray-600">
                <h3 class="text-2xl font-extrabold text-gray-900 dark:text-white">
                    Notification
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-full border-2 border-black text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modalNotification">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
<div>
    @if (count($notifPIC) > 0)
    <div class="flex mb-10 pl-10 pr-10">
        <p class="text-base leading-relaxed mr-5 text-gray-500 dark:text-gray-400">
            Halo {{ auth()->user()->name }}, ada beberapa pegawai yang sudah menyelesaikan tugas yang kamu berikan!
        </p>
        <img src="../../imgs/hiasan5.png" class="w-24 inline-flex" alt="">
    </div>
    {{-- {{ $notif[0]->t_title }} --}}
    
    
    <div class="pl-5 pr-5 mx-auto space-y-5">
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
                        <div id="alert-{{ $item->id }}" class="bg-[#F2F2F2] w-full h-fit rounded-lg shadow-md p-4 flex role=" alert>
                            <div  class="basis-4/5">
                                <div class="flex justify-between">
                                    <div class="flex">
                                        <img src="../../imgs/done.png" class="w-6 mx-auto mr-2" alt="">
                                    
                                        <p class="text-base leading-relaxed font-extrabold text-black">
                                            Task {{ $item->id }}
                                        </p>
                                    </div>
                                        
                                    <button type="button" class="ml-auto -mx-1.5 -my-4 -mr-36 bg-[#F2F2F2] text-mainclr rounded-lg focus:ring-2 focus:ring-mainclr p-1.5 hover:text-white hover:bg-teal-600 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-{{ $item->id }}" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
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
                                $seconds =  time() - strtotime($item->updated_at);
                
                                $days = floor($seconds / 86400);
                                $seconds %= 86400;
                
                                $hours = floor($seconds / 3600);
                                $seconds %= 3600;
                
                                $minutes = floor($seconds / 60);
                                $seconds %= 60;
                                ?>
                                <div class="flex">
                                    <svg fill="#777777" xmlns="http://www.w3.org/2000/svg" class="mr-2" style="margin-top: 0.3%" viewBox="0 0 32 32" width="16px" height="16px"><path d="M 16 4 C 9.3844239 4 4 9.3844287 4 16 C 4 22.615571 9.3844239 28 16 28 C 22.615576 28 28 22.615571 28 16 C 28 9.3844287 22.615576 4 16 4 z M 16 6 C 21.534697 6 26 10.465307 26 16 C 26 21.534693 21.534697 26 16 26 C 10.465303 26 6 21.534693 6 16 C 6 10.465307 10.465303 6 16 6 z M 15 8 L 15 17 L 22 17 L 22 15 L 17 15 L 17 8 L 15 8 z"/></svg> 
                                    <p class="text-xs leading-relaxed font-extrabold text-grey">
                                        <?php
                                        if ($days > 0) {
                                             echo "$days days ago" ;
                                        } elseif ($hours > 0) {
                                            echo "$hours hours ago" ;
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
                            <div class="mx-auto items-center">
                                <a href="/pic/home/dashboard">
                                <button type="button" class="text-white text-xl bg-mainclr hover:bg-teal-700 font-medium rounded-full px-10 py-1 mr-2 mt-5" type="button">Lihat</button>
                                </a>
                            </div>
                            {{-- </form> --}}
                        </div>
                    @endif
            @endforeach
        @else
        <div class="flex mb-10 pl-10 pr-10">
            <p class="text-base leading-relaxed mr-5 text-gray-500 dark:text-gray-400">
                Halo {{ auth()->user()->name }}, saat ini tidak ada notifikasi terbaru dari pegawai, Terimakasih.
            </p>
            <img src="../../imgs/hiasan5.png" class="w-24 inline-flex" alt="">
        </div>
        <div class="pl-5 pr-5 mx-auto space-y-5">
        @endif
    </div>
</div>
        <script>
        var alert_del = document.querySelectorAll('.alert-del');
        alert_del.forEach((x) =>
        x.addEventListener('click', function () {
        x.parentElement.classList.add('hidden');
        }));
        </script>

<!-- Modal footer -->
<div class="flex items-center p-6 justify-center rounded-b border-gray-200 dark:border-gray-600">
    <button data-modal-toggle="modalNotification" type="button" class="text-white bg-mainclr hover:bg-teal-500 rounded-full text-sm font-medium px-9 py-2 focus:z-10 dark:bg-teal-700 dark:text-teal-300 dark:hover:text-white dark:hover:bg-teal-600">OK</button>
</div>
</div>
</div>

@endif

    

