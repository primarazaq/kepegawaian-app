
@extends('home')

@section('content')
<div class="flex items-center justify-end">
     <p class="text-black font-medium pt-4">
        Home /
    </p>
    <a href="/pic/home/dashboard" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 hover:text-teal-600">
        My Task
    </a>
    <p class="-ml-3 text-black font-medium pt-4 ">
        /
    </p>
    <a href="" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 underline hover:text-teal-600">
        Progress My Task
    </a>
</div>
<div class="px-6 py-3 ">
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
                <button type="button" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Tandai selesai!</button>
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
@foreach ($reply as $data)
<div class="w-full h-fit my-4 rounded-lg shadow-md bg-white border-t-mainclr border-t-2 mb-5">
    {{-- Jika respon pengguna itu sendiri --}}
    <div class="flex justify-between">
        <div class="pl-4 h-fit w-full">
            <div class="flex justify-between">
            @foreach ($user as $item)
                @if ($item->id === $data->user_receiver_id)
                <h2 class="text-xl font-extrabold pt-3">{{ $item->name }}</h2>
                <div class="inline-flex mr-3">
                    <button id="dropdownProgEMP" data-dropdown-toggle="dropdownProg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-mainclr hover:fill-teal-600" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 480c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0zM224 352c-6.7 0-13-2.8-17.6-7.7l-104-112c-6.5-7-8.2-17.2-4.4-25.9s12.5-14.4 22-14.4l208 0c9.5 0 18.2 5.7 22 14.4s2.1 18.9-4.4 25.9l-104 112c-4.5 4.9-10.9 7.7-17.6 7.7z"/></svg>
                    </button>
                    @include('components.dropdownProgEMP')
                </div>
            </div>
                @endif
            @endforeach
            <div class="ml-9">
                <p class="w-full ml-9 text-base mr-2 font-medium"><?php echo $data->response_body ?></p>
                @if ($data->response_file)
                    {{-- <p class="text-base ml-9 mr-2 font-medium">Lampiran File :</p><br> --}}
                     <a href="{{ asset('storage/task-file/'.$data->response_file) }}" class="text-base font-medium text-mainclr dark:text-teal-500 hover:underline">lihat file</a>
                @endif
            </div>
            <div class="pb-3">
                <span class="text-mainclr ml-4 text-base font-medium inline-flex items-center rounded">
                    <svg aria-hidden="true" class="mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                    2 menit yang lalu
                </span>
            </div>
        </div>
        {{-- @if ($data->user_receiver_id == auth()->user()->id)
        <div class=" border-l-2 w-48 text-center">
            <div class="border-b-2">
                <button class="my-5 mx-3 hover:text-mainclr">Ubah Respon</button>
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
@endforeach

<div class="w-full h-fit pl-4 rounded-lg shadow-md bg-white border-t-mainclr border-t-2">
    <div class="flex">
        <div class="w-full mr-3">
            <h2 class="text-xl font-extrabold pt-3">Buat Respon Baru</h2>
            <form method="post" action="/employee/home/mytask" enctype="multipart/form-data">
                @csrf
                <div class="hidden">
                        <input type="hidden" name="task_id" value="{{ $task->task_id }}" hidden>
                </div>
            <div class="mb-4 mt-3">
                <div class="flex pr-32">
                    <div class="mb-4 w-4/6 mt-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="t_file">Upload file</label>
                        <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="t_file_help" id="response_file-{{-- $data->t_id --}}" name="response_file" type="file">
                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="t_file_help">*jpeg , jpg, png, docx, doc, pptx, ppt, xlsx, xls, pdf, zip, rar (MAX FILE 10MB).</p>
                    </div>
                </div>
                <label for="response_body" class="ml-4 text-lg font-semibold text-gray-900 dark:text-gray-300"></label>
                <input id="response_body" class="inline-block w-5/6" type="hidden" name="response_body" required>
                @error('response_body')
                    <p>{{ $message }}</p>
                @enderror
                <trix-editor input="response_body" placeholder="Tambahkan respon baru..." style="overflow-y:auto"></trix-editor>
            </div>
        </div>
    </div>
    <div class="flex items-center p-6 space-x-2 justify-center rounded-b border-t border-gray-200 dark:border-gray-600">
        <button type="submit" class="text-white bg-mainclr hover:bg-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-teal-600 dark:hover:bg-teal-700">Submit</button>
    </div>
</form>
    {{-- --- --}}
</div>
<script>
    //nonaktif add file trix
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });
</script>
@endsection
