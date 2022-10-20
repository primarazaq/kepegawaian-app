
<style>
    trix-editor {
            height: 150px !important;
            max-height: 150px !important;
            overflow-y: auto !important;
            font-size: 11px !important;
        }
</style>
  <!-- Main modal -->
  <div id="ModalMyTaskEMP-{{ $data->t_id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
      <div class="relative w-8/12 h-fit md:h-auto">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                  <h3 class="font-semibold text-gray-900 ml-3 text-3xl dark:text-white">
                        No. Task : {{ $data->t_id }} - {{ $data->t_title }}
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="ModalMyTaskEMP-{{ $data->t_id }}">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
                <div class="p-6 space-y-2 text-base">
                    <div class="pl-4">
                        <div class="flex pr-32 mb-2">
                            <div class="basis-1/5">
                                <p class="leading-relaxed text-gray-500 dark:text-gray-400">
                                Deskripsi Tugas
                                </p>  
                            </div>
                            <p class="inline-flex  text-justify leading-relaxed text-gray-500 dark:text-gray-400">
                                :&nbsp; <?php echo $data->t_body ?>
                                </p>
                        </div>
                        @if ($data->t_file)
                        <div class="flex pr-32 mb-2">
                            <div class="basis-1/5">
                                <p class="leading-relaxed text-gray-500 dark:text-gray-400">
                                Lampiran file
                                </p>  
                            </div>
                            <p class="inline-flex leading-relaxed text-gray-500 dark:text-gray-400">
                                :&nbsp; <a href="{{ asset('storage/' . $data->t_file) }}" class="text-mainclr dark:text-teal-500 hover:underline">   lihat file</a>
                                </p>
                        </div>
                        @endif
                        <hr>
                        <div class="flex pr-32 mt-2 mb-2">
                            <div class="basis-1/5">
                                <p class="leading-relaxed text-gray-500 dark:text-gray-400">
                                    Deadline
                                </p>  
                            </div>
                            <p class="inline-flex leading-relaxed text-gray-500 dark:text-gray-400">
                                :&nbsp;{{ $date = date('l, d F Y, H.i A',strtotime($data->t_due_date)) }}
                                </p>
                        </div>
                        {{-- <div class="flex pr-32 mb-2">
                            <div class="basis-1/5">
                                <p class="leading-relaxed text-gray-500 dark:text-gray-400">
                                    Terakhir Diubah
                                </p>  
                            </div>
                            <p class="inline-flex leading-relaxed text-gray-500 dark:text-gray-400">
                                : 24 September 2022, 16.30 P.M.
                                </p>
                        </div> --}}
                        <div class="flex pr-32 mb-2">
                            <div class="basis-1/5">
                                <p class="leading-relaxed text-gray-500 dark:text-gray-400">
                                    Sumber Tugas
                                </p>  
                            </div>
                            <p class="inline-flex leading-relaxed text-gray-500 dark:text-gray-400">
                                : PIC - {{ $data->sender_name }}
                            </p>
                        </div>
                        <form method="post" action="/employee/home/mytask/{{ $data->t_id }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="hidden">
                                    <input type="hidden" name="user_sender_id" value="{{ $data->sender_id }}" hidden>
                                    <input type="hidden" name="submit" value="1" hidden>
                            </div>
                        <div class="flex pr-32">
                            <div class="basis-1/5">
                                <p class="leading-relaxed text-gray-500 dark:text-gray-400">
                                    Response File
                                </p>  
                            </div>
                            <div class="mb-4 w-4/6">
                                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="t_file_help" id="response_file-{{ $data->t_id }}" name="response_file" type="file">
                                <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="t_file_help">*jpeg , jpg, png, docx, doc, pptx, ppt, xlsx, xls, pdf, zip, rar (MAX FILE 10MB).</p>
                            </div>
                        </div>
                        {{-- <div class="flex pr-32"> --}}
                            <div class="basis-1/5">
                                <p class="leading-relaxed text-gray-500 dark:text-gray-400">
                                    Your Response
                                </p>  
                            </div>
                            <div class="mb-4 -mt-6">
                                <label for="response_body-{{ $data->t_id }}" class="ml-4 text-lg font-semibold text-gray-900 dark:text-gray-300"></label>
                                <input id="response_body-{{ $data->t_id }}" class="inline-block w-5/6" type="hidden" name="response_body" required>
                                @error('response_body')
                                    <p>{{ $message }}</p>
                                @enderror
                                <trix-editor input="response_body-{{ $data->t_id }}" style="overflow-y:auto"></trix-editor>
                            </div>
                        {{-- </div> --}}
                        
                    </div>
                </div>
              <!-- Modal footer -->
              <div class="flex items-center p-6 space-x-2 justify-center rounded-b border-t border-gray-200 dark:border-gray-600">
                  <button type="submit" class="text-white bg-mainclr hover:bg-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-teal-600 dark:hover:bg-teal-700">Submit</button>
              </div>
            </form>
          </div>
      </div>
  </div>
  <script>
    //nonaktif add file trix
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });
//     document.addEventListener("trix-initialize", function(event) {
//   var stored = "<strong>Stored HTML</strong>";
//   event.target.editor.loadHTML(stored);
// });
</script>
  {{-- <script>
    Trix.config.blockAttributes.heading1.tagName = "h3";
        addEventListener("trix-initialize", inspectHTML);
        addEventListener("trix-change", inspectHTML);

        function inspectHTML() {
            const editorElement = document.getElementById("trix-editor");
        const outputElement = document.getElementById("output");
        outputElement.textContent = editorElement.value;
        };
  </script> --}}
  