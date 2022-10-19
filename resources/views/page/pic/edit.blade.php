@extends('home')

@section('content')



<div class="flex items-center justify-end mb-2">
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
        Edit-Task
    </a>
</div>
<div class="flex pb-3 justify-between pl-14 pr-32">
    <div class="bg-mainclr w-40 p-1 ml-16 rounded-full text-white flex">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white ml-3 mr-7" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
        <div class="font-extrabold">
            <p>Edit Task</p>
        </div>
    </div>

</div>
{{-- flex ke-1 --}}
<div class="flex mx-auto max-w-fit h-fit border-4 rounded-lg border-mainclr">
    
    <div class="basis-1/2 bg-gray-100 rounded-l-lg p-5">
        
        <div class="font-extrabold text-right text-2xl">No. Task: {{ $data->task_id}}</div>
       
            <form method="post" action="/pic/home/dashboard/{{ $data->task_id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
            <div>
                <label for="t_title" class="block ml-4 text-lg font-semibold text-gray-800 dark:text-gray-300">Title Task</label>
                <input type="text" id="t_title" name="t_title" placeholder="Tuliskan Judul tugas disini..." class="block w-full text-3xl text-gray-900 bg-gray-100 border-gray-100 :focus-visible" required value="{{ old('t_title', $data->t_title) }}">
            </div>
            <div class="mb-2">
                
                <div class="flex">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Upload file :</label>
                    @if ($data->t_file)
                        <div id="ubahfile" class="flex">
                        <a href="{{ asset('storage/' . $data->t_file) }}" class="text-mainclr hover:text-teal-600 underline ml-5 -mt-1">lihat file sebelumnya</a>
                        <input type="hidden" name="old_file" value="{{ $data->t_file }}">
                        <div class="flex">
                        <button id="ubah" type="button" class="ml-5 -mt-3">
                            <svg version="1.1" id="Capa_1" x="0px" y="0px"
                                 width="15px" height="15px" viewBox="0 0 494.936 494.936" style="enable-background:new 0 0 494.936 494.936;"
                                 xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M389.844,182.85c-6.743,0-12.21,5.467-12.21,12.21v222.968c0,23.562-19.174,42.735-42.736,42.735H67.157
                                        c-23.562,0-42.736-19.174-42.736-42.735V150.285c0-23.562,19.174-42.735,42.736-42.735h267.741c6.743,0,12.21-5.467,12.21-12.21
                                        s-5.467-12.21-12.21-12.21H67.157C30.126,83.13,0,113.255,0,150.285v267.743c0,37.029,30.126,67.155,67.157,67.155h267.741
                                        c37.03,0,67.156-30.126,67.156-67.155V195.061C402.054,188.318,396.587,182.85,389.844,182.85z"/>
                                    <path d="M483.876,20.791c-14.72-14.72-38.669-14.714-53.377,0L221.352,229.944c-0.28,0.28-3.434,3.559-4.251,5.396l-28.963,65.069
                                        c-2.057,4.619-1.056,10.027,2.521,13.6c2.337,2.336,5.461,3.576,8.639,3.576c1.675,0,3.362-0.346,4.96-1.057l65.07-28.963
                                        c1.83-0.815,5.114-3.97,5.396-4.25L483.876,74.169c7.131-7.131,11.06-16.61,11.06-26.692
                                        C494.936,37.396,491.007,27.915,483.876,20.791z M466.61,56.897L257.457,266.05c-0.035,0.036-0.055,0.078-0.089,0.107
                                        l-33.989,15.131L238.51,247.3c0.03-0.036,0.071-0.055,0.107-0.09L447.765,38.058c5.038-5.039,13.819-5.033,18.846,0.005
                                        c2.518,2.51,3.905,5.855,3.905,9.414C470.516,51.036,469.127,54.38,466.61,56.897z"/>
                                </g>
                            </g>
                            </svg><p class="text-xs">ubah file</p>
                        </div>
                        </button>
                        </div>
                    </div>
                    <div id="filefield"></div>
                        <script>
                            let btn = document.getElementById('ubah');
                            let grup = document.getElementById('ubahfile');
                            var element = document.getElementById('filefield');
                            btn.onclick = function(){
                                grup.classList.add('hidden');
                                element.innerHTML ='</div><input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="t_file_help" id="t_file" name="t_file" type="file" value="{{ old('t_file', $data->t_file) }}"><p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="t_file_help">*jpeg , jpg, png, docx, doc, pptx, ppt, xlsx, xls, pdf, zip, rar (MAX FILE 10MB).</p>';
                                console.log(element.innerHTML);
                            }
                        </script>
                    @else
                        </div>
                        <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="t_file_help" id="t_file" name="t_file" type="file" value="{{ old('t_file', $data->t_file) }}">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="t_file_help">*jpeg , jpg, png, docx, doc, pptx, ppt, xlsx, xls, pdf, zip, rar (MAX FILE 10MB).</p>
                    @endif

                    
            </div>
            <div class="mb-4">
                <label for="t_body" class="ml-4 text-lg font-semibold text-gray-900 dark:text-gray-300">Description Task</label>
                <input id="t_body" type="hidden" name="t_body" required value="{{ old('t_body', $data->t_body) }}">
                @error('t_body')
                    <p>{{ $message }}</p>
                @enderror
                <trix-editor input="t_body" style="overflow-y:auto"></trix-editor>
            </div>
        
    </div>

    {{-- flex ke-2 --}}
    <div class=" bg-white p-5 rounded-r-lg">
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
                <?php  $priority = ['low','medium','high']; ?>
                <select id="mydropdownlist" name="t_priority" required >
                    <option value="">Select Priority</option>
                    @foreach ($priority as $item)
                        <option value="{{ $item }}" @if ($data->t_priority == $item) selected ="selected" @endif>  {{ $item }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="flex mb-4">
            <div class="mr-6 font-extrabold text-lg ml-5 text-gray-500">
                Assignee
                <?php $arrID = explode(",", $data->multiID); ?>
            </div>
            <div class="user_receiver_id-dropdown">
				<select data-placeholder="Select People" name="user_receiver_id[]" multiple class="chosen-select form-control" style="width: 156px" multiple>
					<option></option>
                    @if (count($arrID) > 1)
                        
                        @foreach ($arrID as $id)
                                <option value="{{ $id }}" @if ($id == $pegawai[$loop->index]->id) selected ="selected" @endif> {{ $pegawai[$loop->index]->name }}</option>
                        @endforeach

                    @else
                    
                        @foreach ($arrID as $id)
                            @foreach ($pegawai as $item)
                                <option value="{{ $item['id'] }}" @if ($id == $item['id']) selected ="selected" @endif> {{ $item['name'] }}</option>
                            @endforeach
                        @endforeach

                    @endif
				</select>
			</div>
            <script>
                $(document).ready(function() {
                    $(".chosen-select").chosen();
                    $(".chosen-select").trigger("chosen:updated");
                });
            </script>
        </div>
        <div class="flex mb-4">
            <div class="mr-2 font-extrabold text-lg ml-5 text-gray-500 items-center">
                End Date
            </div>
            <div date-rangepicker class="items-center ml-2">
                <div class="relative">
                    <input name="t_due_date" type="dateTime-local" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end" required value="{{ old('t_due_date', $data->t_due_date) }}">
                </div>
            </div>
        </div>
        <div class="flex mb-4">
            <div class="mr-14 w-3 font-extrabold text-lg ml-5 text-gray-500">
                Assignment 
                Source
            </div>
            <div class="font-extrabold text-lg ml-16">
                PIC <br> {{ auth()->user()->name }}
            </div>
        </div>
            @if (session()->has('success'))

                        <div id="alert-3" class="flex justify-between p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Info</span>
                            <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                                {{ session('success') }}
                            </div>
                            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </div>
                    @endif
                    <script>
                        var alert_del = document.querySelectorAll('.alert-del');
                          alert_del.forEach((x) =>
                            x.addEventListener('click', function () {
                              x.parentElement.classList.add('hidden');
                            })
                          );</script>
        <div class="flex items-center justify-center mt-28">
            <a href="/pic/home/dashboard">
            <button type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2 mr-4 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600">Cancel</button>
            </a>
            <button type="submit" class="text-white bg-mainclr hover:bg-teal-800 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-teal-600 dark:hover:bg-teal-700">Edit</button>
        </div>
    </form>
    </div>
</div>

<script>
    //nonaktif add file trix
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });
</script>

@endsection