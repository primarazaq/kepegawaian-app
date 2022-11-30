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
            Detail Task
        </a>
    </div>
    <div class="px-6 py-3 ">
        <div>
            @if (session()->has('destroy'))
                <div id="alert-3"
                    class="flex justify-between w-full mx-auto p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200"
                    role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                        {{ session('destroy') }}
                    </div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                        data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            @elseif (session()->has('success'))
                <div id="alert-3"
                    class="flex justify-between w-full mx-auto p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200"
                    role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                        {{ session('success') }}
                    </div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                        data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            @endif
            <script>
                var alert_del = document.querySelectorAll('.alert-del');
                alert_del.forEach((x) =>
                    x.addEventListener('click', function() {
                        x.parentElement.classList.add('hidden');
                    })
                );
            </script>
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
                                <?php echo $task->t_body; ?>
                            </td>
                        </tr>

                        @if ($task->t_file)
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class=" w-36 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Lampiran file
                                </th>
                                <td class="w-10 text-center">
                                    :
                                </td>
                                <td class="py-2">
                                    &nbsp;<a href="{{ asset('storage/task-file/' . $task->t_file) }}"
                                        class="text-mainclr dark:text-teal-500 hover:underline" target="_blank">lihat
                                        file</a>
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
                                &nbsp;{{ $date = date('l, d F Y, H.i A', strtotime($task->t_due_date)) }}
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
                                <div class="bg-yellow-400 py-1 rounded-2xl text-white w-32">
                                    <div class="text-center">
                                        <p>In Progress</p>
                                    </div>
                                </div> <?php
                                        break;
                                        case 'overdue':
                                            ?>
                                <div class="flex">
                                    <div class="bg-red-600 py-1 w-32 rounded-2xl text-white">
                                        <div class="text-center">
                                            <p>Completed</p>
                                        </div>
                                    </div>
                                    <div class="text-red-600 ml-2 mt-1">
                                        <p>*Overdue</p>
                                    </div>
                                </div> <?php
                                        break;
                                    }
                                ?>
                            </td>

                        </tr>
                    </tbody>
                </table>
                <div class="flex">
                    <a href="/pic/home/dashboard/{{ $task->task_id }}/edit">
                        <button type="button"
                            class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit
                            Task</button>
                    </a>
                    @include('modal.deleteTaskDetailPIC')
                </div>
            </div>
            <div class="inline-flex border-l-2 border-b-2 w-80 py-2 pl-4">
                <div class="space-y-3">
                    <h2 class="text-xl text-left font-extrabold">Contribution</h2>
                    <div class="ml-1 space-y-1">
                        <?php
                        $arrayName = $task->name;
                        $multiname = explode(',', $arrayName);
                        ?>
                        @foreach ($multiname as $name)
                            <div
                                class="flex rounded-lg w-fit bg-teal-200 dark:bg-mainclr items-center text-center px-2 py-1">
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

        {{-- Jika respon pengguna itu sendiri --}}
        @if (count($reply) > 0)
            @foreach ($reply as $data)
                <div class="w-full h-fit my-4 rounded-lg shadow-md bg-white border-t-mainclr border-t-2 mb-5">
                    <div class="flex justify-between">
                        <div class="px-4 h-fit w-full">
                            <div class="flex justify-between">
                                @foreach ($user as $item)
                                    @if ($item->id === $data->user_receiver_id)
                                        <h2 class="text-xl font-extrabold pt-3">{{ $item->name }}</h2>
                                        @if ($data->user_receiver_id === auth()->user()->id)
                                            <div class="inline-flex -my-9 h-0 -mr-10">
                                                @include('components.dropdownProgPIC')
                                            </div>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                            <div class="ml-7" id="old{{ $data->id }}">
                                <p class="w-full text-base mr-2 font-medium"><?php echo $data->response_body; ?></p>
                                @if ($data->response_file)
                                    <div class="flex">
                                        <svg version="1.1" id="Layer_1" class="w-5 h-5 fill-mainclr"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px" y="0px" viewBox="0 0 512 512"
                                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M256,0c-54.013,0-97.955,43.943-97.955,97.955v338.981c0,41.39,33.674,75.064,75.064,75.064
                               c41.39,0,75.064-33.674,75.064-75.064V122.511c0-28.327-23.046-51.375-51.375-51.375c-28.327,0-51.374,23.047-51.374,51.375
                               v296.911h31.347V122.511c0-11.042,8.984-20.028,20.028-20.028s20.028,8.985,20.028,20.028v314.424
                               c0,24.106-19.612,43.717-43.718,43.717c-24.106,0-43.717-19.612-43.717-43.717V97.955c0-36.727,29.88-66.608,66.608-66.608
                               s66.608,29.881,66.608,66.608v321.467h31.347V97.955C353.955,43.943,310.013,0,256,0z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <a href="{{ asset('storage/task-file/' . $data->response_file) }}"
                                            class="text-base font-medium text-mainclr dark:text-teal-500 hover:underline"
                                            target="_blank">
                                            lihat file</a>
                                    </div>
                                @endif
                            </div>

                            <div id="new{{ $data->id }}" class="animate-fade" hidden>
                                <form method="post" action="/pic/home/dashboard/{{ $data->id }}"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <input type="hidden" value="{{ $data->task_id }}" name="task_id" hidden>
                                    <input id="response_body-{{ $data->id }}" class="inline-block w-5/6"
                                        type="hidden" name="response_body"
                                        value="{{ old('response_body', $data->response_body) }}" required>
                                    @error('response_body')
                                        <p>{{ $message }}</p>
                                    @enderror
                                    <trix-editor input="response_body-{{ $data->id }}"
                                        style="height:10px !important;overflow-y:auto"></trix-editor>
                                    @if ($data->response_file)
                                        <div id="ubahfile-{{ $data->id }}" class="flex pt-3 pb-3">
                                            <input type="hidden" name="old_file" value="{{ $data->response_file }}">
                                            <button id="ubah-{{ $data->id }}" type="button"
                                                class="ml-5 fill-mainclr flex items-center">
                                                <svg version="1.1" id="Capa_1" x="0px" y="0px"
                                                    width="15px" height="15px" viewBox="0 0 494.936 494.936"
                                                    style="enable-background:new 0 0 494.936 494.936;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M389.844,182.85c-6.743,0-12.21,5.467-12.21,12.21v222.968c0,23.562-19.174,42.735-42.736,42.735H67.157
                                                       c-23.562,0-42.736-19.174-42.736-42.735V150.285c0-23.562,19.174-42.735,42.736-42.735h267.741c6.743,0,12.21-5.467,12.21-12.21
                                                       s-5.467-12.21-12.21-12.21H67.157C30.126,83.13,0,113.255,0,150.285v267.743c0,37.029,30.126,67.155,67.157,67.155h267.741
                                                       c37.03,0,67.156-30.126,67.156-67.155V195.061C402.054,188.318,396.587,182.85,389.844,182.85z" />
                                                            <path
                                                                d="M483.876,20.791c-14.72-14.72-38.669-14.714-53.377,0L221.352,229.944c-0.28,0.28-3.434,3.559-4.251,5.396l-28.963,65.069
                                                       c-2.057,4.619-1.056,10.027,2.521,13.6c2.337,2.336,5.461,3.576,8.639,3.576c1.675,0,3.362-0.346,4.96-1.057l65.07-28.963
                                                       c1.83-0.815,5.114-3.97,5.396-4.25L483.876,74.169c7.131-7.131,11.06-16.61,11.06-26.692
                                                       C494.936,37.396,491.007,27.915,483.876,20.791z M466.61,56.897L257.457,266.05c-0.035,0.036-0.055,0.078-0.089,0.107
                                                       l-33.989,15.131L238.51,247.3c0.03-0.036,0.071-0.055,0.107-0.09L447.765,38.058c5.038-5.039,13.819-5.033,18.846,0.005
                                                       c2.518,2.51,3.905,5.855,3.905,9.414C470.516,51.036,469.127,54.38,466.61,56.897z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p
                                                    class="text-base text-center inline-flex text-mainclr hover:underline ml-1">
                                                    ubah file</p>
                                            </button>
                                        </div>
                                        <div id="filefield-{{ $data->id }}" hidden>
                                            <input
                                                class="block w-full text-sm mt-3 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                aria-describedby="response_file_help" id="response_file_edit"
                                                name="response_file" type="file"
                                                value="{{ old('response_file', $data->response_file) }}">
                                            <p class="mt-1 mb-3 text-sm text-gray-500 dark:text-gray-300"
                                                id="response_file_help">*jpeg , jpg, png, docx, doc, pptx, ppt, xlsx, xls,
                                                pdf, zip, rar (MAX FILE 10MB).</p>
                                        </div>
                                        <script>
                                            $(document).ready(function() {
                                                $("#ubah-{{ $data->id }}").click(function() {
                                                    $("#ubahfile-{{ $data->id }}").hide();
                                                    $("#filefield-{{ $data->id }}").show();
                                                });
                                            });
                                        </script>
                                    @else
                                        <div id="ubahfile-{{ $data->id }}" class="flex pt-3 pb-3">
                                            <input type="hidden" name="old_file" value="{{ $data->response_file }}">
                                            <button id="ubah-{{ $data->id }}" type="button"
                                                class="ml-5 fill-mainclr flex items-center">
                                                <svg version="1.1" id="Capa_1" x="0px" y="0px"
                                                    width="15px" height="15px" viewBox="0 0 494.936 494.936"
                                                    style="enable-background:new 0 0 494.936 494.936;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M389.844,182.85c-6.743,0-12.21,5.467-12.21,12.21v222.968c0,23.562-19.174,42.735-42.736,42.735H67.157
                                                           c-23.562,0-42.736-19.174-42.736-42.735V150.285c0-23.562,19.174-42.735,42.736-42.735h267.741c6.743,0,12.21-5.467,12.21-12.21
                                                           s-5.467-12.21-12.21-12.21H67.157C30.126,83.13,0,113.255,0,150.285v267.743c0,37.029,30.126,67.155,67.157,67.155h267.741
                                                           c37.03,0,67.156-30.126,67.156-67.155V195.061C402.054,188.318,396.587,182.85,389.844,182.85z" />
                                                            <path
                                                                d="M483.876,20.791c-14.72-14.72-38.669-14.714-53.377,0L221.352,229.944c-0.28,0.28-3.434,3.559-4.251,5.396l-28.963,65.069
                                                           c-2.057,4.619-1.056,10.027,2.521,13.6c2.337,2.336,5.461,3.576,8.639,3.576c1.675,0,3.362-0.346,4.96-1.057l65.07-28.963
                                                           c1.83-0.815,5.114-3.97,5.396-4.25L483.876,74.169c7.131-7.131,11.06-16.61,11.06-26.692
                                                           C494.936,37.396,491.007,27.915,483.876,20.791z M466.61,56.897L257.457,266.05c-0.035,0.036-0.055,0.078-0.089,0.107
                                                           l-33.989,15.131L238.51,247.3c0.03-0.036,0.071-0.055,0.107-0.09L447.765,38.058c5.038-5.039,13.819-5.033,18.846,0.005
                                                           c2.518,2.51,3.905,5.855,3.905,9.414C470.516,51.036,469.127,54.38,466.61,56.897z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p
                                                    class="text-base text-center inline-flex text-mainclr hover:underline ml-1">
                                                    Tambah file</p>
                                            </button>
                                        </div>
                                        <div id="filefield-{{ $data->id }}" hidden>
                                            <input
                                                class="block w-full text-sm mt-3 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                aria-describedby="response_file_help" id="response_file_edit"
                                                name="response_file" type="file"
                                                value="{{ old('response_file', $data->response_file) }}">
                                            <p class="mt-1 mb-3 text-sm text-gray-500 dark:text-gray-300"
                                                id="response_file_help">*jpeg , jpg, png, docx, doc, pptx, ppt, xlsx, xls,
                                                pdf, zip, rar (MAX FILE 10MB).</p>
                                        </div>
                                        <script>
                                            $(document).ready(function() {
                                                $("#ubah-{{ $data->id }}").click(function() {
                                                    $("#ubahfile-{{ $data->id }}").hide();
                                                    $("#filefield-{{ $data->id }}").show();
                                                });
                                            });
                                        </script>
                                    @endif
                                    <div class="flex items-center justify-center mt-4">
                                        <button id="cancel{{ $data->id }}" type="button"
                                            class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600">Cancel</button>
                                        <button type="submit"
                                            class="text-white bg-mainclr hover:bg-teal-800 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-teal-600 dark:hover:bg-teal-700">Edit</button>
                                    </div>
                                </form>
                            </div>

                            <?php
                            // calculate time ago
                            $seconds = time() - strtotime($data->updated_at);
                            
                            $days = floor($seconds / 86400);
                            $seconds %= 86400;
                            
                            $hours = floor($seconds / 3600);
                            $seconds %= 3600;
                            
                            $minutes = floor($seconds / 60);
                            $seconds %= 60;
                            ?>
                            <div class="pb-2">
                                <span class="text-mainclr ml-4 text-base font-medium inline-flex items-center rounded">
                                    <svg aria-hidden="true" class="mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <?php
                                    if ($days > 0 && $days <= 7) {
                                        echo "$days days ago - " . ($date = date('H.i A', strtotime($data->updated_at)));
                                    } elseif ($days > 7) {
                                        echo $date = date('d M Y, H.i A', strtotime($data->updated_at));
                                    } elseif ($hours > 0) {
                                        echo "$hours hours ago";
                                    } elseif ($minutes == 0) {
                                        echo 'Just now';
                                    } else {
                                        echo "$minutes minutes ago";
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $("#hide{{ $data->id }}").click(function() {
                            $("#old{{ $data->id }}").hide();
                            $("#new{{ $data->id }}").show();
                        });
                        $("#cancel{{ $data->id }}").click(function() {
                            $("#old{{ $data->id }}").show();
                            $("#new{{ $data->id }}").hide();
                        });
                    });
                </script>
            @endforeach
        @else
            <div>
                <h1 class="mt-5 mx-auto text-center font-bold text-lg">Belum ada respon dari pegawai...</h1>
                <img src="../../../imgs/Conversation.png" class="mx-auto w-96 py-9" alt="komentar kosong">
            </div>
        @endif

        <div class="w-full h-fit px-4 rounded-lg shadow-md bg-white border-t-mainclr border-t-2">
            <div class="flex">
                <div class="w-full mr-3">
                    <h2 class="text-xl font-extrabold pt-3">Buat Respon Baru</h2>
                    <form method="post" action="/pic/home/dashboard" enctype="multipart/form-data">
                        @csrf
                        <div class="hidden">
                            <input type="hidden" name="task_id" value="{{ $task->task_id }}" hidden>
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
                                <p class="text-red-600">{{ $message }}</p>
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
