@extends('home')

@section('content')
<div class="flex items-center justify-end">
    <p class="text-black font-medium pt-4">
        Home /
    </p>
    <a href="" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 underline hover:text-blue-400">
        Profile
    </a>
</div>
<div class="max-w-4xl bg-white rounded-lg border p-7 border-gray-200 shadow-lg mx-auto justify-center mt-6 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-between items-start rounded-t-lg bg-gradient-to-tl from-teal-800 to-gray-300 relative">
        <img class="rounded-t-lg opacity-30 mix-blend-overlay" src="../../imgs/bgProfile.png" alt="" />
    </div>
    <div class="flex">
        <img 
            class="w-44 ml-14 mr-5 absolute rounded-full top-64 shadow-2xl aspect-square" 
            src="../../imgs/avatar.png" 
            alt="">    
        <img
            class="w-44 absolute mt-1 top-56 right-72" 
            src="../../imgs/pln.png"
            alt="">
    </div>
    <div class="relative p-4 space-y-4">
            <div class="text-center">
                <h1 class="font-extrabold text-4xl ml-28">
                    Hilman Ahmad Fathoni
                </h1>
                <h3 class="mr-40 font-semibold text-xl text-gray-600">
                    Employee
                </h3>
            </div>        
            <div class="flex ">
                <div class="w-full text-2xl">
                    <h5 class="font-extrabold">NIP</h5>
                    <h5 class="font-extrabold text-mainclr mb-8">12.212.123</h5>
                    <h5 class="font-extrabold">Lahir</h5>
                    <h5 class="font-extrabold text-mainclr">10-02-2001</h5>
                </div>
                <div class="w-full text-2xl">
                    <div class=" text-black text-2xl mb-1">
                        <h5 class="font-extrabold">Status</h5>
                        <h5 class="font-extrabold text-mainclr mb-8">EMP</h5>
                        <h5 class="font-extrabold">Tanggal Masuk</h5>
                        <h5 class="font-extrabold text-mainclr">21-06-2020</h5>
                    </div>
                </div>
            </div>
    </div>
    {{-- <div>
        <img class="rounded-t-lg fill-gray-500" src="../../imgs/bgProfile.png" alt="" />
        <img src="../../imgs/pln.png" class="w-8" alt="">

    </div>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    </div> --}}
</div>
@endsection