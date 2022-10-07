@extends('home')

@section('content')
<div class="flex items-center justify-end">
    <p class="text-black font-medium pt-4">
        Home /
    </p>
    <a href="" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 underline hover:text-blue-400">
        My Task
    </a>
</div>
<div class="flex">
    <div class="w-3/5 mt-6 h-fit mr-5 mb-2">
        <div class="ml-2 text-4xl font-semibold mb-3">
            <p>"Kini kita belajar kepahlawanan,</p>
        </div>
        <div class="flex pl-40 ml-3.5 mb-3">
            <p class="text-4xl font-semibold mr-2">melalui</p>
            <p class="inline-flex text-4xl font-semibold text-mainclr underline">kerja keras
                <p class="inline-flex text-4xl font-semibold">,</p>
            </p>
        </div>
        <div class="flex pl-16 ml-3 mb-3">
            <p class="text-4xl font-semibold mr-2">kepemimpinan dan</p>
            <p class="inline-flex text-4xl font-semibold text-mainclr underline">keteladanan
                <p class="inline-flex text-4xl font-semibold">."</p>
            </p>
        </div>
        <div>
            <p class="text-4xl font-extrabold text-right">-Najwa Shihab,-</p>
        </div>
    </div>
    <img src="../../imgs/hiasan3.png" class="w-80" alt="">
</div>
<div class="mx-auto w-11/12 border-2 shadow-md border-t-mainclr rounded-2xl">
    {{-- flex 1 --}}
    <div class="flex border-b-2 border-black">
        <div class="basis-4/5">
            <p class="font-extrabold text-2xl ml-4 mt-3">Task 1</p>
            <p class="font-medium text-md ml-8">Memperbaiki dokumen penyalaan pada pelanggan A</p>
            <div class="flex mb-8 ">
                <div class="w-56 bg-gray-300 rounded-full h-2.5 ml-8 mt-2.5 dark:bg-gray-700">
                    <div class="bg-mainclr h-2.5 rounded-full" style="width: 45%"></div>
                </div>
                <p class="inline-flex ml-1 mt-1">45%</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-5 inline-flex" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M152 64H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H104V24C104 10.75 114.7 0 128 0C141.3 0 152 10.75 152 24V64zM48 448C48 456.8 55.16 464 64 464H384C392.8 464 400 456.8 400 448V192H48V448z"/></svg>
                <p class="inline-flex ml-4 text-gray-400 mt-1">Due in 10 days</p>
            </div>
        </div>
        {{-- flex 2 --}}
        @include('modal.mytask')
    </div>
    {{-- flex 1 --}}
    <div class="flex border-b-2 border-black">
        <div class="basis-4/5">
            <p class="font-extrabold text-2xl ml-4 mt-3">Task 2</p>
            <p class="font-medium text-md ml-8">Memperbaiki dokumen penyalaan pada pelanggan A</p>
            <div class="flex mb-8 ">
                <div class="w-56 bg-gray-300 rounded-full h-2.5 ml-8 mt-2.5 dark:bg-gray-700">
                    <div class="bg-mainclr h-2.5 rounded-full" style="width: 45%"></div>
                </div>
                <p class="inline-flex ml-1 mt-1">45%</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-5 inline-flex" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M152 64H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H104V24C104 10.75 114.7 0 128 0C141.3 0 152 10.75 152 24V64zM48 448C48 456.8 55.16 464 64 464H384C392.8 464 400 456.8 400 448V192H48V448z"/></svg>
                <p class="inline-flex ml-4 text-gray-400 mt-1">Due in 10 days</p>
            </div>
        </div>
        {{-- flex 2 --}}
        @include('modal.mytask')
    </div>
    {{-- flex 1 --}}
    <div class="flex">
        <div class="basis-4/5">
            <p class="font-extrabold text-2xl ml-4 mt-3">Task 3</p>
            <p class="font-medium text-md ml-8">Memperbaiki dokumen penyalaan pada pelanggan A</p>
            <div class="flex mb-8 ">
                <div class="w-56 bg-gray-300 rounded-full h-2.5 ml-8 mt-2.5 dark:bg-gray-700">
                    <div class="bg-mainclr h-2.5 rounded-full" style="width: 45%"></div>
                </div>
                <p class="inline-flex ml-1 mt-1">45%</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-5 inline-flex" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M152 64H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H104V24C104 10.75 114.7 0 128 0C141.3 0 152 10.75 152 24V64zM48 448C48 456.8 55.16 464 64 464H384C392.8 464 400 456.8 400 448V192H48V448z"/></svg>
                <p class="inline-flex ml-4 text-gray-400 mt-1">Due in 10 days</p>
            </div>
        </div>
        {{-- flex 2 --}}
        @include('modal.mytask')
    </div>
</div>
@endsection