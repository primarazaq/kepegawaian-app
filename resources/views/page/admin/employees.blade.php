@extends('home')
@section('content')
<div class="flex items-center justify-end">
    <p class="text-black font-medium pt-4">
        Home /
    </p>
    <a href="" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 underline hover:text-blue-400">
        Employees
    </a>
</div>
<div class="overflow-y-auto relative shadow-lg sm:rounded-lg pt-8 pl-5 pr-5">
    <div class="flex">
        <div class="bg-mainclr w-48 p-1 rounded-full text-white mb-3 mr-4 flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white ml-3 mr-7" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
            <div class="font-extrabold">
                <p>Employees</p>
            </div>
        </div>
        @include('modal.createEmployees')
    </div>
    <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-mainclr dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nama Pegawai
                </th>
                <th scope="col" class="py-3 px-6">
                    Tanggal Lahir
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
                    10-02-2001
                </td>
                <td class="py-4 px-6">
                    12-2123-123
                </td>
                <td class="py-4 px-6">
                    21-06-2020
                </td>
                <td class="py-4 px-6">
                    Pegawai
                </td>
                <td class="py-4 ">
                    <div class="flex mx-auto justify-center">
                        @include('modal.editEmployees')
                        @include('modal.disableEmployees')
                    </div>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Deden Hikmah 
                </th>
                <td class="py-4 px-6">
                    10-02-2001
                </td>
                <td class="py-4 px-6">
                    12-2123-123
                </td>
                <td class="py-4 px-6">
                    21-06-2020
                </td>
                <td class="py-4 px-6">
                    PIC
                </td>
                <td class="py-4 ">
                    <div class="flex mx-auto justify-center">
                        @include('modal.editEmployees')
                        @include('modal.disableEmployees')
                    </div>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Deden Hikmah 
                </th>
                <td class="py-4 px-6">
                    10-02-2001
                </td>
                <td class="py-4 px-6">
                    12-2123-123
                </td>
                <td class="py-4 px-6">
                    21-06-2020
                </td>
                <td class="py-4 px-6">
                    Pegawai
                </td>
                <td class="py-4 ">
                    <div class="flex mx-auto justify-center">
                        @include('modal.editEmployees')
                        @include('modal.disableEmployees')
                    </div>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Deden Hikmah 
                </th>
                <td class="py-4 px-6">
                    10-02-2001
                </td>
                <td class="py-4 px-6">
                    12-2123-123
                </td>
                <td class="py-4 px-6">
                    21-06-2020
                </td>
                <td class="py-4 px-6">
                    Pegawai
                </td>
                <td class="py-4 ">
                    <div class="flex mx-auto justify-center">
                        @include('modal.editEmployees')
                        @include('modal.disableEmployees')
                    </div>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Deden Hikmah 
                </th>
                <td class="py-4 px-6">
                    10-02-2001
                </td>
                <td class="py-4 px-6">
                    12-2123-123
                </td>
                <td class="py-4 px-6">
                    21-06-2020
                </td>
                <td class="py-4 px-6">
                    PIC
                </td>
                <td class="py-4 ">
                    <div class="flex mx-auto justify-center">
                        @include('modal.editEmployees')
                        @include('modal.disableEmployees')
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection