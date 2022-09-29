@extends('home')

@section('content')
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        
    <div class="inline-flex space-x-7 items-end justify-end" style="width: 1510px; height: 268px;">
    <div class="inline-flex flex-col space-y-2.5 items-center justify-end" style="width: 485px; height: 268px;">
        <p class="text-3xl font-medium">Your task</p>
        <div class="relative bg-green-500 bg-opacity-60 shadow rounded-3xl" style="width: 485px; height: 210px;">
            <p class="absolute text-3xl font-bold text-white" style="left: 140px; top: 20px;">Completed Task</p>
            <p class="absolute text-4xl font-bold text-green-300" style="left: 176px; top: 101px;">2 Task</p>
            <img class="w-12 h-12 absolute shadow" style="left: 73px; top: 22px;" src="https://via.placeholder.com/47x47"/>
        </div>
    </div>
    <div class="relative bg-green-500 bg-opacity-70 shadow rounded-3xl" style="width: 485px; height: 215px;">
        <p class="absolute text-3xl font-bold text-white" style="left: 120px; top: 27px;">Uncompleted Task</p>
        <p class="absolute text-4xl font-bold text-red-400" style="left: 182px; top: 107px;">8 Task</p>
        <img class="w-11 h-11 absolute shadow" style="left: 56px; top: 28px;" src="https://via.placeholder.com/44x44"/>
    </div>
    <div class="relative bg-green-400 shadow rounded-3xl" style="width: 485px; height: 215px;">
        <p class="absolute text-xl" style="left: 54px; top: 84px;">Case 1: 3 min left</p>
        
        <img class="w-11 h-11 absolute shadow" style="left: 54px; top: 28px;" src="https://via.placeholder.com/44x44"/>
    </div>
</div>
            <!-- <div class="relative bg-green-500 bg-opacity-60 shadow rounded-3xl" style="width: 485px; height: 210px;">
            <p class="absolute text-3xl font-bold text-white" style="left: 140px; top: 20px;">Completed Task</p>
            <p class="absolute text-4xl font-bold text-green-300" style="left: 176px; top: 101px;">2 Task</p>
            <img class="w-12 h-12 absolute shadow" style="left: 73px; top: 22px;" src="https://via.placeholder.com/47x47"/>
        </div> -->

    </div>


@endsection

