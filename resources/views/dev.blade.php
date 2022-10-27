@extends('home')

@section('content')
@foreach ($task as $data)
        <form method="post" action="/employee/home/mytask" enctype="multipart/form-data">
            @csrf
            <div class="hidden">
                    {{-- <input type="hidden" name="user_receiver_id" value="{{ auth()->user()->id }}" hidden> --}}
                    <input type="hidden" name="task_id" value="{{ $data->task_id }}" hidden>
            </div>
        <div class="flex pr-32">
            <div class="basis-1/5">
                <p class="leading-relaxed text-gray-500 dark:text-gray-400">
                    Response File
                </p>  
            </div>
            <div class="mb-4 w-4/6">
                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="t_file_help" id="response_file-{{ $data->task_id }}" name="response_file" type="file">
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
                <label for="response_body-{{ $data->task_id }}" class="ml-4 text-lg font-semibold text-gray-900 dark:text-gray-300"></label>
                <input id="response_body-{{ $data->task_id }}" class="inline-block w-5/6" type="hidden" name="response_body" required>
                @error('response_body')
                    <p>{{ $message }}</p>
                @enderror
                <trix-editor input="response_body-{{ $data->task_id }}" style="overflow-y:auto"></trix-editor>
            </div>
        {{-- </div> --}}
        
    </div>
</div>
<!-- Modal footer -->
<div class="flex items-center p-6 space-x-2 justify-center rounded-b border-t border-gray-200 dark:border-gray-600">
  <button type="submit" class="text-white bg-mainclr hover:bg-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-teal-600 dark:hover:bg-teal-700">Submit</button>
</div>
</form>
@endforeach

</div>
@endsection