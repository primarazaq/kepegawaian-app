
@extends('home')

@section('content')
<div class="flex items-center justify-end">
     <p class="text-black font-medium pt-4">
        Home /
    </p>
    <a href="/admin/home/dashboard" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 hover:text-teal-600">
        Dashboard
    </a>
    <p class="-ml-3 text-black font-medium pt-4 ">
        /
    </p>
    <a href="" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 underline hover:text-teal-600">
        Detail Task
    </a>
</div>
<div class="px-6 py-3 ">
    <div>
        @if (session()->has('destroy'))
                <div id="alert-3" class="flex justify-between w-11/12 mx-auto p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                            {{ session('destroy') }}
                        </div>
                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                </div>

                              
            @elseif (session()->has('success'))

                <div id="alert-3" class="flex justify-between w-11/12 mx-auto p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            @endif
            <script>
                var alert_del = document.querySelectorAll('.alert-del');
                  alert_del.forEach((x) =>
                    x.addEventListener('click', function () {
                      x.parentElement.classList.add('hidden');
                    })
                  );</script>
    </div>
    <div class="flex justify-between">
        <div class="border-b-2 w-full">
            <div class="items-start p-4 border-b dark:border-gray-600">
                <h3 class="font-extrabold text-gray-900 ml-3 text-3xl dark:text-white">
                    No. Task : {{ $task->task_id }} - {{ $task->t_title }}
                </h3>
            </div>
            <table class="w-full text-md text-left text-gray-500 dark:text-gray-400">
                <tbody>
                        <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="w-36 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Deskripsi Tugas
                                </th>
                                <td class="w-10 text-center">
                                    :
                                </td>
                                <td class="py-2">
                                    <?php echo $task->t_body ?>
                                </td>
                        </tr>
    
                        @if ($task->t_file)
                            
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class=" w-36 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Lampiran file
                                </th>
                                <td class="w-10 text-center">
                                    :
                                </td>
                                <td class="py-2">
                                    &nbsp;<a href="{{ asset('storage/task-file/'. $task->t_file) }}" class="text-mainclr dark:text-teal-500 hover:underline">lihat file</a>
                                </td>
                            </tr>
                        @endif
    
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class=" w-36 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Deadline
                            </th>
                            <td class="w-10 text-center">
                                :
                            </td>
                            <td class="py-2">
                                &nbsp;{{ $date=date('l, d F Y, H.i A',strtotime($task->t_due_date)) }}
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class=" w-36 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Sumber Tugas
                            </th>
                            <td class="w-10 text-center">
                                :
                            </td>
                            <td class="py-2">
                                &nbsp;PIC - {{ $task->pembuat_task }}
                            </td>
                            
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class=" w-36 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Status
                            </th>
                            <td class="w-10 text-center">
                                :
                            </td>
                            <td class="py-2">
                                <?php 
                                    switch ($task->t_status) {
                                        case 'created':
                                        ?>
                                            <div class="bg-green-400 py-1 w-28 rounded-2xl text-white">
                                                <div class="text-center">
                                                    <p>Created</p>
                                                </div>
                                            </div> <?php
                                            break;
                                        case 'completed':
                                        ?>
                                            <div class="bg-mainclr py-1 w-28 rounded-2xl text-white">
                                                <div class="text-center">
                                                    <p>Completed</p>
                                                </div>
                                            </div> <?php
                                            break;
                                        case 'in progress':
                                            ?>
                                            <div class="bg-yellow-400 py-1 rounded-2xl text-white w-28">
                                            <div class="text-center">
                                                <p>In Progress</p>
                                            </div>
                                        </div> <?php
                                        break;
                                        case 'overdue':
                                            ?>
                                        <div class="bg-red-600 py-1 w-28 rounded-2xl text-white">
                                            <div class="text-center">
                                                <p>Completed</p>
                                            </div>
                                        </div> <?php
                                        break;
                                    }
                                ?>
                            </td>
                            
                        </tr>
                </tbody>
            </table>
            
        </div>
        <div class="inline-flex border-l-2 border-b-2 py-2 pr-20 pl-4">
            <div class="space-y-3">
                <h2 class="text-xl text-left font-extrabold">Contribution</h2>
                <div class="ml-1 space-y-1">
                    <?php 
                        $arrayName = $task->name; 
                        $multiname = explode(",", $arrayName);
                        ?>
                    @foreach ($multiname as $name)
                        <div class="flex rounded-lg w-fit bg-teal-200 dark:bg-mainclr items-center text-center px-2 py-1">
                            <img src="/../../../imgs/avatar.png" class="w-5 h-5" alt="profile">
                            <div class="inline-flex ml-1">
                                <p class="text-base font-bold">{{ $name }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@if (count($reply) > 0 ) 
@foreach ($reply as $data)
<div class="w-full h-fit my-4 rounded-lg shadow-md bg-white border-t-mainclr border-t-2 mb-5">
    {{-- Jika respon pengguna itu sendiri --}}
    <div class="flex justify-between">
        <div class="pl-4 h-fit w-full">
            <div class="flex justify-between">
            @foreach ($user as $item)
                @if ($item->id === $data->user_receiver_id)
                <h2 class="text-xl font-extrabold pt-3">{{ $item->name }}</h2>
                @endif
            @endforeach
            </div>
            <div id="old{{ $data->id }}">
                <p class="w-full ml-9 text-base mr-2 font-medium"><?php echo $data->response_body ?></p>
                @if ($data->response_file)
                <div class="flex ">
                    <p class="text-base mr-2 font-medium">Lampiran File :</p><br>
                     <a href="{{ asset('storage/task-file/'.$data->response_file) }}" class="text-base font-medium text-mainclr dark:text-teal-500 hover:underline">lihat file</a>
                    </div>
                     @endif
            </div>

            <?php 
            // calculate time ago
            $seconds =  time() - strtotime($data->updated_at);

            $days = floor($seconds / 86400);
            $seconds %= 86400;

            $hours = floor($seconds / 3600);
            $seconds %= 3600;

            $minutes = floor($seconds / 60);
            $seconds %= 60;
            ?>
            <div class="pb-2">
                <span class="text-mainclr ml-4 text-base font-medium inline-flex items-center rounded">
                    <svg aria-hidden="true" class="mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                    <?php
                    if ($days > 0 && $days <= 7) {
                            echo "$days days ago - ". $date = date('H.i A',strtotime($data->updated_at));
                    } elseif ($days > 7) {
                        echo $date = date('d M Y, H.i A',strtotime($data->updated_at));
                    } elseif ($hours > 0) {
                       echo "$hours hours ago" ;
                    } elseif ($minutes == 0) {
                       echo "Just now" ;
                    } else {
                        echo "$minutes minutes ago";
                    }
                ?>
                </span>
            </div>
        </div>
    </div>
</div>

@endforeach
@else
    <div class="text-center mb-24 mt-4 pt-9">
        <h5>Belum ada response...</h5>
    </div>
@endif


<script>
    //nonaktif add file trix
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });

    
</script>
@endsection
