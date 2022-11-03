@extends('home')

@section('content')
<div class="flex items-center justify-end">
    <p class="text-black font-medium pt-4">
        Home /
    </p>
    <a href="" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 underline hover:text-teal-600">
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

<div class="flex-auto">
    <div class="bg-mainclr w-52 p-1 ml-16 mb-4 rounded-full text-white flex">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white ml-3 mr-7" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
        <div class="font-extrabold">
            <p>Task Completed</p>
        </div>
    </div>
</div>
<div class=" text-gray-900 tracking-wider">
	<!--Container-->
	<div class="container w-full md:w-4/5 xl:w-11/12 mx-auto px-2">

		<!--Card-->
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded-lg shadow-lg bg-white border-2 border-mainclr">
			<table id="TBtaskComplt" class="stripe hover text-center" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">No.</th>
						<th data-priority="1">Judul Tugas</th>
						{{-- <th data-priority="2">Deadline</th> --}}
						<th data-priority="2">Terselesaikan</th>
                        <th data-priority="3">Sumber Tugas</th>
						{{-- <th data-priority="4">No. Tugas</th> --}}
						<th data-priority="4">Status</th>
						
                        <th data-priority="5">Action</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($taskList as $data)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $data->t_title }}</td>
						{{-- <td class="text-red-600">{{ $date = date('d M Y, H.i A',strtotime($data->t_due_date)) }}</td> --}}
						
                            @if ($data->t_status == "uncompleted")
                            <td class="text-red-600">
                            {{ $date = date('d M Y, H.i A',strtotime($data->t_due_date)) }}
                            @else
                            <td class="text-mainclr">
                            {{ $date = date('d M Y, H.i A',strtotime($data->updated_at)) }}
                            @endif
                        
                        </td>
						{{-- <td>{{ $data->t_id }}</td> --}}
                        <td>{{ $data->sender_name }}</td>
                        <td>
                            <?php 
                                    switch ($data->t_status) {
                                        case 'completed':
                                        ?>
                                            <div class="bg-mainclr py-1 mx-auto rounded-2xl text-white">
                                                <div class="text-center">
                                                    <p>Completed</p>
                                                </div>
                                            </div> <?php
                                            break;
                                        case 'in progress':
                                            ?>
                                            <div class="bg-yellow-400 py-1 mx-auto rounded-2xl text-white">
                                            <div class="text-center">
                                                <p>In Progress</p>
                                            </div>
                                        </div> <?php
                                        break;
                                        case 'uncompleted':
                                            ?>
                                        <div class="bg-red-600 py-1 mx-auto rounded-2xl text-white">
                                            <div class="text-center">
                                                <p>Uncompleted</p>
                                            </div>
                                        </div> <?php
                                        break;
                                    }
                                ?>
						</td>
						<form action="/employee/home/taskcompleted/{{ $data->t_id }}">
                            <td class="py-4 px-6">
                                <button class="block w-full md:w-auto rounded-lg text-lg mx-auto text-center font-medium text-mainclr dark:text-teal-500 hover:underline" type="submit">
                                    Detail
                                    </button> 
                                {{-- @include('modal.taskcompleted') --}}
                            </td>
                        </form>
					</tr>
                    @endforeach
				</tbody>
			</table>
		</div>
		<!--/Card-->
	</div>
</div>
	<!--/container-->


    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#TBtaskComplt').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
@endsection
