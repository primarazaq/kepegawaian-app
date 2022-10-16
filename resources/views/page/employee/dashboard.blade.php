@extends('home')

@section('content')
<div class="flex items-center justify-end">
    <p class="text-black font-medium pt-4">
        Home /
    </p>
    <a href="" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 underline hover:text-teal-600">
        Dashboard
    </a>
</div>
<div class="flex pt-5 pl-12 pb-8">
    <div class="flex-1 p-5 mr-7 max-w-sm h-44 bg-mainclr bg-opacity-40 rounded-lg border border-gray-200 shadow-md">
        <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 ml-10 absolute fill-white" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 128c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32zM307.8 275.8l-128 128c-10.9 10.9-28.7 10.9-39.6 0l-64-64c-10.9-10.9-10.9-28.7 0-39.6s28.7-10.9 39.6 0L160 344.4 268.2 236.2c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6z"/></svg>
            <h5 class="text-2xl font-extrabold text-white mx-auto dark:text-grey">Completed Task</h5>
        </div>
        <div class="font-extrabold text-5xl mt-9 p-4 text-center text-green-400 dark:text-gray-400">
            <p>3 Task</p>
        </div>
    </div>
    <div class="flex-1 p-5 mr-7 max-w-sm h-44 bg-mainclr bg-opacity-60 rounded-lg border border-gray-200 shadow-md">
        <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 ml-8 absolute fill-white" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg>
            <h5 class="text-2xl font-extrabold text-white mx-auto dark:text-grey">Uncompleted Task</h5>
        </div>
        <div class="font-extrabold text-5xl mt-9 p-4 text-center text-red-600 dark:text-gray-400">
            <p>1 Task</p>
        </div>
        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
        </div>
    </div>
    <div class="flex-1 p-5 mr-7 max-w-sm h-44 bg-mainclr bg-opacity-80 rounded-lg border border-gray-200 shadow-md">
        <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 mr-3 fill-white" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M75 75L41 41C25.9 25.9 0 36.6 0 57.9V168c0 13.3 10.7 24 24 24H134.1c21.4 0 32.1-25.9 17-41l-30.8-30.8C155 85.5 203 64 256 64c106 0 192 86 192 192s-86 192-192 192c-40.8 0-78.6-12.7-109.7-34.4c-14.5-10.1-34.4-6.6-44.6 7.9s-6.6 34.4 7.9 44.6C151.2 495 201.7 512 256 512c141.4 0 256-114.6 256-256S397.4 0 256 0C185.3 0 121.3 28.7 75 75zm181 53c-13.3 0-24 10.7-24 24V256c0 6.4 2.5 12.5 7 17l72 72c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-65-65V152c0-13.3-10.7-24-24-24z"/></svg>
            <h5 class="text-2xl font-extrabold text-white dark:text-grey">Deadline</h5>
        </div>
        <div class="flex font-bold text-xl mt-4 text-white dark:text-gray-400">
            <p>Case 1:</p>
            <div class="inline-flex font-bold text-xl text-red-600 ml-2">
                3 min left
            </div>
        </div>
        <div class="flex font-bold text-xl text-white dark:text-gray-400">
            <p>Case 2:</p>
            <div class="inline-flex font-bold text-xl text-red-600 ml-2">
                10 min left
            </div>
        </div>
        <div class="flex font-bold text-xl text-white dark:text-gray-400">
            <p>Case 3:</p>
            <div class="inline-flex font-bold text-xl text-red-600 ml-2">
                1 hour left
            </div>
        </div>
    </div>
</div>
<div class="flex">
    <div class="w-fit ml-12 h-fit border-2 rounded-xl shadow-md border-t-mainclr">
        <div class="flex"> 
            <div class="flex font-extrabold text-black text-left pt-14 pb-14">
                <div class="pl-16 pr-24 border-r-4 border-black">
                    <p class="text-5xl">
                        3
                    </p>
                    <p class="text-lg text-gray-400 font-semibold">
                        Active task
                    </p>
                </div>
                <div class="pl-16 pr-24 border-r-4 border-black text-center">
                    <p class="text-5xl">
                        20
                    </p>
                    <p class="text-lg text-gray-400 font-semibold">
                        Progress
                    </p>
                </div>
                <div class="pl-16 pr-24">
                    <p class="text-5xl">
                        23
                    </p>
                    <p class="text-lg text-gray-400 font-semibold">
                        Task total(month)
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-fit h-fit">
        <img src="../../imgs/hiasan2.png" alt="">
    </div>
</div>
 
@endsection

{{-- ini utk button completed --}}
{{-- <td class="py-4 px-6">
    <div class="bg-mainclr w-20 h-6 mx-auto rounded-2xl text-white">
        <div class="text-center">
            <p>Completed</p>
        </div>
    </div>
</td> --}}

 {{-- ini utk button uncompleted --}}
{{-- <td class="py-4 px-6">
    <div class="bg-red-600 w-24 h-6 mx-auto rounded-2xl text-white">
        <div class="text-center">
            <p>Uncompleted</p>
        </div>
    </div>
</td> --}}