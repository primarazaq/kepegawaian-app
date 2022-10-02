@extends('home')
@section('content')
<div class="flex items-center justify-end">
    <p class="text-black font-medium pt-4">
        Home /
    </p>
    <a href="" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 underline hover:text-blue-400">
        Dashboard
    </a>
</div>
<div class="flex pt-5 pl-12">
    <div class="flex-1 p-5 mr-7 max-w-sm h-44 bg-mainclr bg-opacity-40 rounded-lg border border-gray-200 shadow-md">
        <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 ml-10 absolute fill-white" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 128c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32zM307.8 275.8l-128 128c-10.9 10.9-28.7 10.9-39.6 0l-64-64c-10.9-10.9-10.9-28.7 0-39.6s28.7-10.9 39.6 0L160 344.4 268.2 236.2c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6z"/></svg>
            <h5 class="text-2xl font-extrabold text-white mx-auto dark:text-grey">Completed Task</h5>
        </div>
        <div class="font-extrabold text-5xl p-4 text-center text-green-500 dark:text-gray-400">
            <p>3</p>
        </div>
        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
            <div class="bg-green-500 text-xs font-medium text-blue-100 text-center  leading-none rounded-full" style="width: 45%"> 45%</div>
          </div>
    </div>
    <div class="flex-1 p-5 mr-7 max-w-sm h-44 bg-mainclr bg-opacity-60 rounded-lg border border-gray-200 shadow-md">
        <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 ml-8 absolute fill-white" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg>
            <h5 class="text-2xl font-extrabold text-white mx-auto dark:text-grey">Uncompleted Task</h5>
        </div>
        <div class="font-extrabold text-5xl p-4 text-center text-red-600 dark:text-gray-400">
            <p>1</p>
        </div>
        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
            <div class="bg-red-600 text-xs font-medium text-blue-100 text-center  leading-none rounded-full" style="width: 45%"> 45%</div>
          </div>
    </div>
    <div class="flex-1 p-5 mr-7 max-w-sm h-44 bg-mainclr bg-opacity-80 rounded-lg border border-gray-200 shadow-md">
        <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 mr-5 fill-white" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 24C0 10.7 10.7 0 24 0H616c13.3 0 24 10.7 24 24s-10.7 24-24 24H24C10.7 48 0 37.3 0 24zM0 488c0-13.3 10.7-24 24-24H616c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zM211.2 160c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zM32 320c0-35.3 28.7-64 64-64h96c12.2 0 23.7 3.4 33.4 9.4c-37.2 15.1-65.6 47.2-75.8 86.6H64c-17.7 0-32-14.3-32-32zm461.6 32c-10.3-40.1-39.6-72.6-77.7-87.4c9.4-5.5 20.4-8.6 32.1-8.6h96c35.3 0 64 28.7 64 64c0 17.7-14.3 32-32 32H493.6zM391.2 290.4c32.1 7.4 58.1 30.9 68.9 61.6c3.5 10 5.5 20.8 5.5 32c0 17.7-14.3 32-32 32h-224c-17.7 0-32-14.3-32-32c0-11.2 1.9-22 5.5-32c10.5-29.7 35.3-52.8 66.1-60.9c7.8-2.1 16-3.1 24.5-3.1h96c7.4 0 14.7 .8 21.6 2.4zM563.2 160c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zM321.6 256c-44.2 0-80-35.8-80-80s35.8-80 80-80s80 35.8 80 80s-35.8 80-80 80z"/></svg>
            <h5 class="text-2xl font-extrabold text-white dark:text-grey">Employees</h5>
        </div>
        <div class="font-bold text-4xl p-4 mt-10 text-white dark:text-gray-400">
            <p>10 Person</p>
        </div>
    </div>
</div>

<div class="overflow-y-auto relative shadow-md sm:rounded-lg pt-8 pl-5 pr-5">
    <div class="bg-mainclr w-48 p-1 rounded-full text-white mb-3 flex">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white ml-3 mr-7" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
        <div class="font-extrabold">
            <p>Task List</p>
        </div>
    </div>
    <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-mainclr dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nama Pegawai
                </th>
                <th scope="col" class="py-3 px-6">
                    Nama Tugas
                </th>
                <th scope="col" class="py-3 px-6">
                    Deadline
                </th>
                <th scope="col" class="py-3 px-6">
                    NIP
                </th>
                <th scope="col" class="py-3 px-6">
                    Tanggal Mulai
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Deden Hikmah 
                </th>
                <td class="py-4 px-6">
                    Ini judul tugas
                </td>
                <td class="py-4 px-6">
                    10-02-2022
                </td>
                <td class="py-4 px-6">
                    12-2123-123
                </td>
                <td class="py-4 px-6">
                    21-06-2020
                </td>
                <td class="py-4 px-6">
                    <div class="bg-mainclr w-20 h-6 mx-auto rounded-2xl text-white">
                        <div class="text-center">
                            <p>Completed</p>
                        </div>
                    </div>
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-mainclr dark:text-mainclr hover:underline">Detail</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Deden Hikmah 
                </th>
                <td class="py-4 px-6">
                    Ini judul tugas
                </td>
                <td class="py-4 px-6">
                    10-02-2022
                </td>
                <td class="py-4 px-6">
                    12-2123-123
                </td>
                <td class="py-4 px-6">
                    21-06-2020
                </td>
                <td class="py-4 px-6">
                    <div class="bg-red-600 w-24 h-6 mx-auto rounded-2xl text-white">
                        <div class="text-center">
                            <p>Uncompleted</p>
                        </div>
                    </div>
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-mainclr dark:text-mainclr hover:underline">Detail</a>
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Deden Hikmah 
                </th>
                <td class="py-4 px-6">
                    Ini judul tugas
                </td>
                <td class="py-4 px-6">
                    10-02-2022
                </td>
                <td class="py-4 px-6">
                    12-2123-123
                </td>
                <td class="py-4 px-6">
                    21-06-2020
                </td>
                <td class="py-4 px-6">
                    <div class="bg-mainclr w-20 h-6 mx-auto rounded-2xl text-white">
                        <div class="text-center">
                            <p>Completed</p>
                        </div>
                    </div>
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-mainclr dark:text-mainclr hover:underline">Detail</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>  
@endsection