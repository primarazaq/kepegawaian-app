@extends('home')

@section('content')
<div class="flex items-center justify-end">
    <p class="text-black font-medium pt-4">
        Home /
    </p>
    <a href="" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 underline hover:text-blue-400">
        Task Complete
    </a>
</div>
<div class="flex">
    <div class="w-3/5 mt-6 h-fit mr-5 mb-2">
        <div class="ml-2 text-4xl flex font-semibold justify-center">
            <p>Terima kasih</p>
            <p class="inline-flex ml-2 text-4xl font-extrabold">USER</p>
            <p>, sudah</p>
        </div>
        <div class="ml-2 text-4xl flex font-semibold justify-center mb-14">
            <p>menyelesaikan tugas dengan baik.</p>
        </div>
        <div class="flex ml-40">
            <p class="text-4xl font-semibold mr-2">Were are proud of your</p>
            <p class="inline-flex text-4xl font-semibold text-mainclr underline">performance
                <p class="inline-flex text-4xl font-semibold">!</p>
            </p>
        </div>
    </div>
    <img src="../../imgs/hiasan4.png" class="w-80" alt="">
</div>
<table id="TaskCompltEMP" class="table">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
@endsection

@push('scripts')
    <script>
        $(document).ready( function () {
            $('#TaskCompltEMP').DataTable();
                } );    
    </script>    
@endpush