@extends('home')

@section('content')
<style>
	trix-editor {
		height: 200px !important;
		max-height: 200px !important;
	  	overflow-y: auto !important;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>


<div class="flex items-center justify-end mb-8">
    <p class="text-black font-medium pt-4">
        Home /
    </p>
    <a href="" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 underline hover:text-blue-400">
        Task
    </a>
</div>

{{-- flex ke-1 --}}
<div class="flex mx-auto max-w-5xl h-fit border-4 rounded-lg border-mainclr">
    <div class="basis-1/2 bg-gray-100 rounded-l-lg p-5">
        <div class="font-extrabold text-right text-2xl">No. Task: 123412</div>
        <div>
            <form method="post" action="/pic/home/task">
                @csrf
            <div>
                <label for="t_title" class="block ml-4 text-lg font-semibold text-gray-800 dark:text-gray-300">Title Task</label>
                <input type="text" id="t_title" name="t_title" placeholder="Tuliskan Judul tugas disini..." class="block w-full text-3xl text-gray-900 bg-gray-100 border-gray-100">
            </div>
        </div>
        <div class="mb-4">
            <label for="t_body" class="ml-4 text-lg font-semibold text-gray-900 dark:text-gray-300">Description Task</label>
            <input id="t_body" type="hidden" name="t_body">
            <trix-editor input="t_body" style="overflow-y:auto"></trix-editor>
        </div>
    </div>

    {{-- flex ke-2 --}}
    <div class=" bg-white p-5">
        <div class="font-extrabold text-left text-2xl pb-3">ATTRIBUTES</div>
        <div class="flex mb-4">
            <div class="mr-14 font-extrabold text-lg ml-5 text-gray-500">
                Status
            </div>
            <div class="font-extrabold text-lg ml-5">
                <input type="text" value="in progress" name="t_status" class="block bg-white border-white" readonly>
            </div>
        </div>
        <div class="flex mb-4">
            <div class="mr-10 font-extrabold text-lg ml-5 text-gray-500">
                Priority
            </div>

            <div class="t_priority-dropdown">
				<select name="t_priority">
					<option value="">Select Priority</option>
					<option value="low">Low</option>
					<option value="medium">Medium</option>
					<option value="high">High</option>
				</select>
			</div>

            {{-- <button id="dropdownPriority" data-dropdown-toggle="dropdown" class="text-grey hover:bg-gray-400 hover:text-white font-medium rounded-lg text-sm px-4 text-center inline-flex items-center border-2" type="button">Select priority <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="hidden z-10 w-32 rounded-lg bg-white divide-y divide-gray-100 shadow dark:bg-gray-700">
                <ul class="text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownPriority">
                    <li>
                        <button class="inline-flex py-2 px-7 w-full items-center hover:bg-red-500 bg-red-300 hover:text-white text-black rounded-t-lg">
                            <img src="../../imgs/high.png" class="mr-2 w-6" alt="">
                            High
                        </button>
                    </li>
                    <li>
                        <button class="inline-flex py-2 px-4 w-full items-center hover:bg-yellow-300 bg-yellow-200 hover:text-white text-black">
                            <img src="../../imgs/medium.png" class="mr-1 w-8" alt="">
                            Medium
                        </button>
                    </li>
                    <li>
                        <button class="inline-flex py-2 px-6 w-full items-center hover:bg-green-400 bg-green-300 hover:text-white text-black rounded-b-lg">
                            <img src="../../imgs/low.png" class="mr-1 w-8" alt="">
                            Low
                        </button>
                    </li>
                </ul>
            </div> --}}
        </div>
        <div class="flex mb-4">
            <div class="mr-6 font-extrabold text-lg ml-5 text-gray-500">
                Assignee
            </div>
            
            {{-- <div class="user_receiver_id-dropdown">
				<select name="user_receiver_id">
					<option value="">Select People</option>
					<option value="2">ikhsan</option>
					<option value="3">hilman</option>
					<option value="4">dedeng</option>
				</select>
			</div> --}}

            <div class="user_receiver_id-dropdown">
				<select data-placeholder="Select People" name="user_receiver_id[]" multiple class="chosen-select form-control" style="width: 156px" multiple>
					<option></option>
					<option value="2" >Ikhsan</option>
					<option value="3">Hilman</option>
					<option value="4">Dedeng</option>
				</select>
			</div>
            <script>
                // $('.chosen-select').each(function(i,selected){
                //     var value = $(selected).val();
                // });

                // $(".chosen-select").chosen().change(function(){
                //     $(".chosen-select").chosen().val();
                //  });

                
                $(document).ready(function() {
                    $(".chosen-select").chosen();
                });
                
            </script>
            {{-- </form> --}}
            {{-- <button id="dropdownPeople" data-dropdown-toggle="dropdown2" class="text-grey hover:bg-gray-400 hover:text-white font-medium rounded-lg text-sm px-4 text-center inline-flex items-center border-2" type="button">Select people<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

            <!-- Dropdown menu -->
            <div id="dropdown2" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownPeople">
                <li>
                    <button class="inline-flex py-2 px-4 items-center w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img src="../../imgs/avatar.png" class="mr-2 w-6" alt="">
                        Riska S. E
                        <img src="../../imgs/low.png" class="mr-1 w-8" alt="">
                    </button>
                </li>
                <li>
                    <button class="inline-flex py-2 px-4 w-full items-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img src="../../imgs/avatar.png" class="mr-2 w-6" alt="">
                        Juned A
                    </button>
                </li>
                <li>
                    <button class="inline-flex py-2 px-4 w-full items-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img src="../../imgs/avatar.png" class="mr-2 w-6" alt="">
                        Udin S. D
                        <img src="../../imgs/low.png" class="mr-1 w-8" alt="">
                    </button>
                </li>
                <li>
                    <button class="inline-flex py-2 px-4 w-full items-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img src="../../imgs/avatar.png" class="mr-2 w-6" alt="">
                        Ahmad F
                    </button>
                </li>
                </ul>
            </div> --}}
        </div>
        <div class="flex mb-4">
            <div class="mr-2 font-extrabold text-lg ml-5 text-gray-500 items-center">
                End Date
            </div>
            <div date-rangepicker class="items-center ml-2">
                <div class="relative">
                    <input name="t_due_date" type="dateTime-local" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                </div>
            </div>
        </div>
        <div class="flex mb-4">
            <div class="mr-14 w-3 font-extrabold text-lg ml-5 text-gray-500">
                Assignment 
                Source
            </div>
            <div class="font-extrabold text-lg ml-16">
                PIC
            </div>
        </div>
        <div class="flex items-center justify-center">
            <button type="reset" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2 mr-4 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancel</button>
            <button type="submit" class="text-white bg-mainclr hover:bg-teal-800 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-teal-600 dark:hover:bg-teal-700">+ Create</button>
        </div>
    </form>
    </div>
</div>

@endsection