
  <!-- Main modal -->
  <div id="ModalEditTaskPIC" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
      <div class="relative p-4 w-full max-w-7xl h-full md:h-auto">
        
          <!-- Modal content -->
              {{-- flex ke-1 --}}
            <div class="flex mx-auto max-w-fit h-fit border-4 rounded-lg border-mainclr">
                <div class="basis-1/2 bg-gray-100 rounded-l-lg p-5">
                    
                    <div class="font-extrabold text-right text-2xl">No. Task: {{-- count($totalTask)+1 --}}</div>
                
                        {{-- <form method="post" action="/pic/home/task/{{ $data->task_id }}" enctype="multipart/form-data">
                            @method('put') --}}
                             @csrf
                        <div>
                            <label for="t_title" class="block ml-4 text-lg font-semibold text-gray-800 dark:text-gray-300">Title Task</label>
                            <input type="text" id="t_title" name="t_title" placeholder="Tuliskan Judul tugas disini..." class="block w-full text-3xl text-gray-900 bg-gray-100 border-gray-100 :focus-visible" autofocus required value="{{ old('name', $data->t_title) }}">
                        </div>
                        <div class="mb-2">
                            
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Upload file</label>
                            <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="t_file_help" id="t_file" name="t_file" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="t_file_help">*jpeg , jpg, png, docx, doc, pptx, ppt, xlsx, xls, pdf, zip, rar (MAX FILE 10MB).</p>

                        </div>
                        <div class="mb-4">
                            <label for="t_body" class="ml-4 text-lg font-semibold text-gray-900 dark:text-gray-300">Description Task</label>
                            <input id="t_body" type="hidden" name="t_body" required value="{{ old('name', $data->t_body) }}">
                            @error('t_body')
                                <p>{{-- $message --}}</p>
                            @enderror
                            <trix-editor input="t_body" style="overflow-y:auto"></trix-editor>
                        </div>
                    
                </div>

                {{-- flex ke-2 --}}
                <div class=" bg-white p-5 rounded-r-lg">
                    <button type="button" class="text-gray-400 bg-transparent text-right hover:bg-gray-200 hover:text-mainclr rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="ModalEditTaskPIC-{{ $data->task_id }}">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="font-extrabold text-left text-2xl pb-3">ATTRIBUTES</div>
                    <div class="flex mb-4">
                        <div class="mr-14 font-extrabold text-lg ml-5 text-gray-500">
                            Status
                        </div>
                        <div class="font-extrabold text-lg ml-5">
                            <input type="text" name="t_status" class="block bg-white border-white" readonly value="{{ old('name', $data->t_status) }}">
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
                                {{-- @foreach ($priority as $item)
                                    <option value="{{ $item }}" @if ($data->t_priority == $item) selected ="selected" @endif>  {{ $item }}</option>
                                @endforeach --}}

                            </select>
                        </div>

                    </div>
                    <div class="flex mb-4">
                        <div class="mr-6 font-extrabold text-lg ml-5 text-gray-500">
                            Assignee
                        </div>
                        
                        <div class="user_receiver_id-dropdown">
                            <select id="drp" data-placeholder="Select People" name="user_receiver_id" multiple class="chosen-select form-control" style="width: 156px" multiple>
                                <option></option>
                                @foreach ($pegawai as $item)
                                    <option value="{{ $item['id'] }}" >{{ $item['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <script>
                           
                        </script>
                    </div>
                    <div class="flex mb-4">
                        <div class="mr-2 font-extrabold text-lg ml-5 text-gray-500 items-center">
                            End Date
                        </div>
                        <div date-rangepicker class="items-center ml-2">
                            <div class="relative">
                                <input name="t_due_date" type="dateTime-local" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end" required>
                            </div>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="mr-14 w-3 font-extrabold text-lg ml-5 text-gray-500">
                            Assignment 
                            Source
                        </div>
                        <div class="font-extrabold text-lg ml-16">
                            {{-- PIC <br> {{ auth()->user()->name }} --}}
                        </div>
                    </div>
                        {{-- @if (session()->has('success')) --}}

                                    <div id="alert-3" class="flex justify-between p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Info</span>
                                        <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                                            {{-- {{ session('success') }} <a href="#" class="font-semibold underline hover:text-green-800 dark:hover:text-green-900"> --}}
                                        </div>
                                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </button>
                                    </div>
                                {{-- @endif --}}
                                {{-- <script>
                                    var alert_del = document.querySelectorAll('.alert-del');
                                    alert_del.forEach((x) =>
                                        x.addEventListener('click', function () {
                                        x.parentElement.classList.add('hidden');
                                        })
                                    );</script> --}}
                    <div class="flex items-center justify-center mt-28">
                        <button type="reset" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2 mr-4 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600">Cancel</button>
                        <button type="submit" class="text-white bg-mainclr hover:bg-teal-800 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-teal-600 dark:hover:bg-teal-700">+ Create</button>
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
      </div>
  </div>