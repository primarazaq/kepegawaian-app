@extends('home')

@section('content')
    <div class="flex items-center justify-end">
        <p class="text-black font-medium pt-4">
            Home /
        </p>
        <a href="/pic/home/dashboard" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 hover:text-teal-600">
            Dashboard
        </a>
        <p class="-ml-3 text-black font-medium pt-4 ">
            /
        </p>
        <a href="" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 underline hover:text-teal-600">
            Progress Task
        </a>
    </div>
    <div class="px-6 py-3 ">
        <div class="flex justify-between">
            <div class="border-b-2 w-full">
                <div class="items-start p-4 border-b dark:border-gray-600">
                    <h3 class="font-extrabold text-gray-900 ml-3 text-3xl dark:text-white">
                        No. Task : {{-- $task->task_id --}} - {{-- $task->t_title --}}
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
                                {{-- <?php echo $task->t_body; ?> --}}
                            </td>
                        </tr>

                        {{-- @if ($task->t_file) --}}

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class=" w-36 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Lampiran file
                            </th>
                            <td class="w-10 text-center">
                                :
                            </td>
                            <td class="py-2">
                                &nbsp;<a href="{{-- asset('storage/task-file/'.$task->t_file) --}}"
                                    class="text-mainclr dark:text-teal-500 hover:underline">lihat file</a>
                            </td>
                        </tr>
                        {{-- @endif --}}

                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class=" w-36 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Deadline
                            </th>
                            <td class="w-10 text-center">
                                :
                            </td>
                            <td class="py-2">
                                &nbsp;{{-- $date=date('l,dFY,H.iA',strtotime($task->t_due_date)) --}}
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
                                &nbsp;PIC - {{-- $task->pembuat_task --}}
                            </td>
                            {{-- <form method="post" action="/employee/home/mytask/{{ $data->t_id }}" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="hidden">
                                        <input type="hidden" name="user_sender_id" value="{{ $data->sender_id }}" hidden>
                                        <input type="hidden" name="submit" value="1" hidden>
                                </div>
                            </form> --}}
                        </tr>
                    </tbody>
                </table>
                <a href="">
                    <button type="button"
                        class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Tandai
                        selesai!</button>
                </a>
            </div>
            <div class="inline-flex border-l-2 border-b-2 py-2 pr-20 pl-4">
                <div class="space-y-3">
                    <h2 class="text-xl text-left font-extrabold">Contribution</h2>
                    <div class="ml-1 space-y-1">
                        <div class="flex rounded-lg w-fit bg-teal-200 dark:bg-mainclr items-center text-center px-2 py-1">
                            <img src="/../../../imgs/avatar.png" class="w-5 h-5" alt="profile">
                            <div class="inline-flex ml-1">
                                <p class="text-base font-bold">Hilman</p>
                            </div>
                        </div>
                        <div class="flex rounded-lg w-fit bg-teal-200 dark:bg-mainclr items-center text-center px-2 py-1">
                            <img src="/../../../imgs/avatar.png" class="w-5 h-5" alt="profile">
                            <div class="inline-flex ml-1">
                                <p class="text-base font-bold">Hilman</p>
                            </div>
                        </div>
                        <div class="flex rounded-lg w-fit bg-teal-200 dark:bg-mainclr items-center text-center px-2 py-1">
                            <img src="/../../../imgs/avatar.png" class="w-5 h-5" alt="profile">
                            <div class="inline-flex ml-1">
                                <p class="text-base font-bold">Hilman</p>
                            </div>
                        </div>
                        <div class="flex rounded-lg w-fit bg-teal-200 dark:bg-mainclr items-center text-center px-2 py-1">
                            <img src="/../../../imgs/avatar.png" class="w-5 h-5" alt="profile">
                            <div class="inline-flex ml-1">
                                <p class="text-base font-bold">Hilman</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- @endif

                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class=" w-36 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Deadline
                        </th>
                        <td class="w-10 text-center">
                            :
                        </td>
                        <td class="py-2 text-red-600">
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
                            //switch ($task->t_status) {
                            //case 'completed':
                            ?>
                                            <div class="bg-mainclr py-1 w-28 rounded-2xl text-white">
                                                <div class="text-center">
                                                    <p>Completed</p>
                                                </div>
                                            </div> <?php
                                            //break;
                                            //case 'in progress':
                                            ?>
                                            <div class="bg-yellow-400 py-1 rounded-2xl text-white w-28">
                                            <div class="text-center">
                                                <p>In Progress</p>
                                            </div>
                                        </div> <?php
                                        //break;
                                        //case 'uncompleted':
                                        ?>
                                        <div class="bg-red-600 py-1 w-28 rounded-2xl text-white">
                                            <div class="text-center">
                                                <p>Uncompleted</p>
                                            </div>
                                        </div> <?php
                                        //break;
                                        //}
                                        ?>
                        </td>
                    </tr>
            </tbody>
        </table>
</div>
@if (count($reply) > 0) --}}
        {{-- @foreach ($reply as $data) --}}
        <div class="w-full h-fit my-4 rounded-lg shadow-md bg-white border-t-mainclr border-t-2 mb-5">
            {{-- Jika respon pengguna itu sendiri --}}
            <div class="flex justify-between">
                <div class="pl-4 h-fit w-full">
                    <div class="flex justify-between">
                        {{-- @foreach ($user as $item)
                @if ($item->id === $data->user_receiver_id) --}}
                        <h2 class="text-xl font-extrabold pt-3">{{-- $item->name --}}</h2>
                        <div class="inline-flex mr-3">
                            <button id="dropdownProgEMP" data-dropdown-toggle="dropdownProg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-mainclr hover:fill-teal-600"
                                    viewBox="0 0 448 512">
                                    <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M384 480c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0zM224 352c-6.7 0-13-2.8-17.6-7.7l-104-112c-6.5-7-8.2-17.2-4.4-25.9s12.5-14.4 22-14.4l208 0c9.5 0 18.2 5.7 22 14.4s2.1 18.9-4.4 25.9l-104 112c-4.5 4.9-10.9 7.7-17.6 7.7z" />
                                </svg>
                            </button>
                            @include('components.dropdownProgEMP')
                        </div>
                    </div>
                    {{-- @endif
            @endforeach --}}
                    <div class="ml-9">
                        <p class="w-full ml-9 text-base mr-2 font-medium">{{-- <?php echo $data->response_body; ?> --}}</p>
                        {{-- @if ($data->response_file) --}}
                        {{-- <p class="text-base ml-9 mr-2 font-medium">Lampiran File :</p><br> --}}
                        <a href="{{-- asset('storage/task-file/'.$data->response_file) --}}"
                            class="text-base font-medium text-mainclr dark:text-teal-500 hover:underline">lihat file</a>
                        {{-- @endif --}}
                    </div>
                    <div class="pb-3">
                        <span class="text-mainclr ml-4 text-base font-medium inline-flex items-center rounded">
                            <svg aria-hidden="true" class="mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            2 menit yang lalu
                        </span>

                        {{-- ini utk edit komen
                <div id="old-{{ $data->id }}">
                    <p class="text-base ml-9 mr-2 font-medium"><?php //echo $data->response_body
                    ?></p> <br>
                </div>
                <div id="new-{{ $data->id }}" hidden>
                    <input id="response_body-{{ $data->id }}" class="inline-block w-5/6" type="hidden" name="response_body" value="{{ old('response_body', $data->response_body) }}" required>
                    @error('response_body')
                        <p>{{ $message }}</p>
                    @enderror
                    <trix-editor input="response_body-{{ $data->id }}"  style="height:10px !important;overflow-y:auto"></trix-editor>
                        @if ($data->response_file)
                                <div id="ubahfile-{{ $data->id }}" class="flex pt-6 pb-3">
                                <input type="hidden" name="old_file" value="{{ $data->response_file }}">
                                            <button id="ubah-{{ $data->id }}" type="button" class="ml-5 -mt-3 flex items-center">
                                                <svg version="1.1" id="Capa_1" x="0px" y="0px"
                                                    width="15px" height="15px" viewBox="0 0 494.936 494.936" style="enable-background:new 0 0 494.936 494.936;"
                                                    xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M389.844,182.85c-6.743,0-12.21,5.467-12.21,12.21v222.968c0,23.562-19.174,42.735-42.736,42.735H67.157
                                                            c-23.562,0-42.736-19.174-42.736-42.735V150.285c0-23.562,19.174-42.735,42.736-42.735h267.741c6.743,0,12.21-5.467,12.21-12.21
                                                            s-5.467-12.21-12.21-12.21H67.157C30.126,83.13,0,113.255,0,150.285v267.743c0,37.029,30.126,67.155,67.157,67.155h267.741
                                                            c37.03,0,67.156-30.126,67.156-67.155V195.061C402.054,188.318,396.587,182.85,389.844,182.85z"/>
                                                        <path d="M483.876,20.791c-14.72-14.72-38.669-14.714-53.377,0L221.352,229.944c-0.28,0.28-3.434,3.559-4.251,5.396l-28.963,65.069
                                                            c-2.057,4.619-1.056,10.027,2.521,13.6c2.337,2.336,5.461,3.576,8.639,3.576c1.675,0,3.362-0.346,4.96-1.057l65.07-28.963
                                                            c1.83-0.815,5.114-3.97,5.396-4.25L483.876,74.169c7.131-7.131,11.06-16.61,11.06-26.692
                                                            C494.936,37.396,491.007,27.915,483.876,20.791z M466.61,56.897L257.457,266.05c-0.035,0.036-0.055,0.078-0.089,0.107
                                                            l-33.989,15.131L238.51,247.3c0.03-0.036,0.071-0.055,0.107-0.09L447.765,38.058c5.038-5.039,13.819-5.033,18.846,0.005
                                                            c2.518,2.51,3.905,5.855,3.905,9.414C470.516,51.036,469.127,54.38,466.61,56.897z"/>
                                                    </g>
                                                </g>
                                                </svg>
                                            <p class="text-xs inline-flex ml-1">ubah file</p>
                                            </button>
                                </div>
                                <div id="filefield-{{ $data->id }}"></div>
                                <script>
                                    let btn = document.getElementById('ubah-{{ $data->id }}');
                                    let grup = document.getElementById('ubahfile-{{ $data->id }}');
                                    var element = document.getElementById('filefield-{{ $data->id }}');
                                    btn.onclick = function(){
                                        grup.classList.add('hidden');
                                        element.innerHTML ='<input class="block w-full text-sm mt-3 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="response_file_help" id="response_file_edit" name="response_file_edit" type="file" value="{{ old('response_file', $data->response_file) }}"><p class="mt-1 mb-3 text-sm text-gray-500 dark:text-gray-300" id="response_file_help">*jpeg , jpg, png, docx, doc, pptx, ppt, xlsx, xls, pdf, zip, rar (MAX FILE 10MB).</p>';
                                        console.log(element.innerHTML);
                                    }
                                </script>
                        @endif
                        <div class="flex items-right justify-end">
                            <button onclick="myFunction()" type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2 mr-4 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600">Cancel</button>
                            <button type="submit" class="text-white bg-mainclr hover:bg-teal-800 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-teal-600 dark:hover:bg-teal-700">Edit</button>
                        </div>
                </div>
                @if ($data->response_file)
                <div id="old2-{{ $data->id }}" class="flex">
                    <p class="text-base ml-9 mr-2 font-medium">Lampiran File :</p><br>
                    <a href="{{ asset('storage/task-file/'.$data->response_file) }}" class="text-base ml-3 mr-20 font-medium text-mainclr dark:text-teal-500 hover:underline">lihat file</a>
                </div>
            @endif
            <script>
                function myFunction() {
                var x = document.getElementById("old-{{ $data->id }}");
                var x2 = document.getElementById("old2-{{ $data->id }}");
                var trix = document.getElementById("new-{{ $data->id }}");
                if (x.style.display === "none") {
                    x.style.display = "block";
                    x2.style.display = "block";
                    trix.style.display = "none";
                } else {
                    x.style.display = "none";
                    x2.style.display = "none";
                    trix.style.display = "block";
                }
                }
            </script>
            
            <?php
            //calculate time ago
            //$seconds =  time() - strtotime($data->updated_at);
            
            //$days = floor($seconds / 86400);
            //$seconds %= 86400;
            
            //$hours = floor($seconds / 3600);
            //$seconds %= 3600;
            
            //$minutes = floor($seconds / 60);
            //$seconds %= 60;
            ?>
            <div class="flex pb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-grey ml-6" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zM329 305c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-95 95-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L329 305z"/></svg>
                <p class="text-base ml-3 font-medium opacity-50 inline-flex mt-1">
                    <?php
                    //if ($days > 0 && $days <= 7) {
                    //echo "$days days ago" ;
                    //} elseif ($days > 7) {
                    //echo $date = date('d M Y, H.i A',strtotime($data->updated_at));
                    //} elseif ($hours > 0) {
                    //echo "$hours hours ago" ;
                    //} else {
                    //echo "$minutes minutes ago";
                    //}
                    ?>
                </p> --}}
                    </div>
                </div>
                {{-- @if ($data->user_receiver_id == auth()->user()->id)
        <div class=" border-l-2 w-48 text-center">
            <div class="border-b-2">
                <button onclick="myFunction()" class="my-5 mx-3 hover:text-mainclr">Ubah Respon</button>
            </div>
            {{-- <div class="border-4 items-end"></div>
            <div class="border-t-2">
                <button class="my-5 mx-3 justify-center hover:text-red-600">Hapus Respon</button>
            </div>
        </div>
        @endif --}}
            </div>
            {{-- --- --}}


        </div>
        {{-- @endforeach --}}
        {{-- @else
    <div class="text-center mb-24 mt-4 pt-9">
        <h5>Belum ada response...</h5>
    </div>
@endif --}}


        <div class="w-full h-fit px-4 rounded-lg shadow-md bg-white border-t-mainclr border-t-2">
            <div class="flex">
                <div class="w-full mr-3">
                    <h2 class="text-xl font-extrabold pt-3">Buat Respon Baru</h2>
                    <form method="post" action="/employee/home/mytask" enctype="multipart/form-data">
                        @csrf
                        <div class="hidden">
                            <input type="hidden" name="task_id" value="{{-- $task->task_id --}}" hidden>
                        </div>
                        <div class="mb-4 mt-3">
                            <div class="flex pr-32">
                                <div class="mb-4 w-4/6 mt-4">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        for="response_file">Upload file</label>
                                    <input
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="response_file_help" id="response_file" name="response_file"
                                        type="file">
                                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="response_file_help">*jpeg
                                        , jpg, png, docx, doc, pptx, ppt, xlsx, xls, pdf, zip, rar (MAX FILE 10MB).</p>
                                </div>
                            </div>
                            <label for="response_body"
                                class="ml-4 text-lg font-semibold text-gray-900 dark:text-gray-300"></label>
                            <input id="response_body" class="inline-block w-5/6" type="hidden" name="response_body"
                                required>
                            @error('response_body')
                                <p>{{-- $message --}}</p>
                            @enderror
                            <trix-editor input="response_body" placeholder="Tambahkan respon baru..."
                                style="overflow-y:auto"></trix-editor>
                        </div>
                </div>
            </div>
            <div
                class="flex items-center p-6 space-x-2 justify-center rounded-b border-t-2 border-gray-200 dark:border-gray-600">
                <button type="submit"
                    class="text-white bg-mainclr hover:bg-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-teal-600 dark:hover:bg-teal-700">Submit</button>
            </div>
            </form>
            {{-- --- --}}
        </div>
        <script>
            //nonaktif add file trix
            document.addEventListener('trix-file-accept', function(e) {
                e.preventDefault();
            });
        </script>
    @endsection
