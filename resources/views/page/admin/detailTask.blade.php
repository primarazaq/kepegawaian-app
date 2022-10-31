<style>
    trix-editor {
            height: 150px !important;
            max-height: 150px !important;
            overflow-y: auto !important;
            font-size: 11px !important;
        }
</style>
@extends('home')

@section('content')
<div class="flex items-center justify-end">
     <p class="text-black font-medium pt-4">
        Home /
    </p>
    <a href="/pic/home/dashboard" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 hover:text-teal-600">
        Employee
    </a>
    <p class="-ml-3 text-black font-medium pt-4 ">
        /
    </p>
    <a href="" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 underline hover:text-teal-600">
        Detail Task
    </a>
</div>
<div class="px-6 py-3">
    <div class="border-b-2 border-black mb-3">
        <div class="items-start p-4 border-b dark:border-gray-600">
            <h3 class="font-extrabold text-gray-900 ml-3 text-3xl dark:text-white">
                No. Task : 4 - Ini judul Tugas
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
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat aspernatur, quo quis ratione eligendi veritatis? Eveniet pariatur enim nisi modi blanditiis veritatis facere praesentium aut, eligendi amet sapiente mollitia eos!{{-- $data->name --}}
                            </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class=" w-36 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Lampiran file
                        </th>
                        <td class="w-10 text-center">
                            :
                        </td>
                        <td class="py-2">
                            &nbsp;<a href="{{-- asset('storage/'.$data->t_file) --}}" class="text-mainclr dark:text-teal-500 hover:underline">lihat file</a>
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class=" w-36 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Deadline
                        </th>
                        <td class="w-10 text-center">
                            :
                        </td>
                        <td class="py-2">
                            &nbsp;{{-- $date=date('l,dFY,H.iA',strtotime($data->t_due_date)) --}}
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
                            PIC - {{-- $data->pembuat_task --}}
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
</div>
<div class="w-full h-fit my-4 pl-4 rounded-lg shadow-md bg-white border-t-mainclr border-t-2 mb-5">
    <div class="flex">
        <div>
            <h2 class="text-xl font-extrabold pt-3">Hilman</h2>
            <p class="text-base ml-9 mr-2 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            &nbsp;<a href="{{-- asset('storage/'.$data->t_file) --}}" class="text-base ml-9 mr-20 font-medium text-mainclr dark:text-teal-500 hover:underline">lihat file</a>
            <div class="flex pb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-grey ml-6" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zM329 305c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-95 95-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L329 305z"/></svg>
                <p class="text-base ml-3 font-medium opacity-50 inline-flex mt-1">2 jam yang lalu</p>
            </div>
        </div>
    </div>

    
</div>
<div class="w-full h-fit pl-4 rounded-lg shadow-md bg-white border-t-mainclr border-t-2">
    <div class="flex">
        <div>
            <h2 class="text-xl font-extrabold pt-3">Dedeng</h2>
            <p class="text-base ml-9 mr-2 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe pariatur fugit laboriosam, nisi expedita, dolor accusamus aliquid perspiciatis repudiandae placeat consequatur ad sunt cumque eveniet cupiditate fuga cum, iure impedit?</p>
            &nbsp;<a href="{{-- asset('storage/'.$data->t_file) --}}" class="text-base ml-9 mr-20 font-medium text-mainclr dark:text-teal-500 hover:underline">lihat file</a>
            <div class="flex pb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-grey ml-6" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zM329 305c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-95 95-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L329 305z"/></svg>
                <p class="text-base ml-3 font-medium opacity-50 inline-flex mt-1">2 jam yang lalu</p>
            </div>
        </div>
    </div>
</div>
@endsection