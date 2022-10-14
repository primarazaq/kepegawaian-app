

@extends('home')

@section('content')
<div class="flex items-center justify-end">
    <p class="text-black font-medium pt-4">
        Home /
    </p>
    <a href="" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 underline hover:text-blue-400">
        Dashboard
    </a>
</div>
<div class="flex pt-5 pl-12 pb-8">
    <div class="flex-1 p-5 mr-7 max-w-sm h-44 bg-mainclr bg-opacity-40 rounded-lg border border-gray-200 shadow-md">
        <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 ml-10 absolute fill-white" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 128c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32zM307.8 275.8l-128 128c-10.9 10.9-28.7 10.9-39.6 0l-64-64c-10.9-10.9-10.9-28.7 0-39.6s28.7-10.9 39.6 0L160 344.4 268.2 236.2c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6z"/></svg>
            <h5 class="text-2xl font-extrabold text-white mx-auto dark:text-grey">Completed Task</h5>
        </div>
        <div class="font-extrabold text-5xl mt-9 p-4 text-center text-green-500 dark:text-gray-400">
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
    </div>
    <div class="flex-1 p-5 mr-7 max-w-sm h-44 bg-mainclr bg-opacity-80 rounded-lg border border-gray-200 shadow-md">
        <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 mr-5 fill-white" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 24C0 10.7 10.7 0 24 0H616c13.3 0 24 10.7 24 24s-10.7 24-24 24H24C10.7 48 0 37.3 0 24zM0 488c0-13.3 10.7-24 24-24H616c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zM211.2 160c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zM32 320c0-35.3 28.7-64 64-64h96c12.2 0 23.7 3.4 33.4 9.4c-37.2 15.1-65.6 47.2-75.8 86.6H64c-17.7 0-32-14.3-32-32zm461.6 32c-10.3-40.1-39.6-72.6-77.7-87.4c9.4-5.5 20.4-8.6 32.1-8.6h96c35.3 0 64 28.7 64 64c0 17.7-14.3 32-32 32H493.6zM391.2 290.4c32.1 7.4 58.1 30.9 68.9 61.6c3.5 10 5.5 20.8 5.5 32c0 17.7-14.3 32-32 32h-224c-17.7 0-32-14.3-32-32c0-11.2 1.9-22 5.5-32c10.5-29.7 35.3-52.8 66.1-60.9c7.8-2.1 16-3.1 24.5-3.1h96c7.4 0 14.7 .8 21.6 2.4zM563.2 160c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zM321.6 256c-44.2 0-80-35.8-80-80s35.8-80 80-80s80 35.8 80 80s-35.8 80-80 80z"/></svg>
            <h5 class="text-2xl font-extrabold text-white dark:text-grey">In Progress</h5>
        </div>
        <div class="font-bold text-4xl p-4 mt-10 text-white dark:text-gray-400">
            <p>2 Task</p>
        </div>
    </div>
</div>

<div class="flex pb-3 justify-between">
    <div class="bg-mainclr w-48 p-1 ml-16 rounded-full text-white flex">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white ml-3 mr-7" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
        <div class="font-extrabold">
            <p>Task List</p>
        </div>
    </div>
    <div class="inline-flex mr-16">
        <a href="">
            <button class="bg-mainclr w-48 p-1 justify-self-end rounded-full hover:bg-teal-600 text-white">
                + Buat Task Baru
            </button>
        </a>
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
						<th data-priority="1">NO</th>
						<th data-priority="2">DEADLINE</th>
						<th data-priority="3">NIP</th>
						<th data-priority="4">NAMA PEGAWAI</th>
						<th data-priority="5">JUDUL TUGAS</th>
						<th data-priority="6">TANGGAL MULAI</th>
                        <th data-priority="7">STATUS</th>
                        <th data-priority="8">LAINNYA</th>
                        <th data-priority="9">ACTION</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($taskList as $data)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="py-4 px-6 text-red-600  font-semibold">
                                <?php echo date('H:i',strtotime($data->t_due_date)) ?> WIB  <?php echo date('- d F Y',strtotime($data->t_due_date)) ?>
                            </td>
                            <td class="py-4 px-6">
                                {{ $data->nip }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $data->name }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $data->t_title }}
                            </td>
                            <td class="py-4 px-6">
                                 <?php echo date('H:i',strtotime($data->created_at)) ?> WIB <?php echo date('- d F Y',strtotime($data->created_at)) ?>
                            </td>
                            <td class="py-4 px-6">
        
                                <?php 
                                    switch ($data->t_status) {
                                        case 'completed':
                                        ?>
                                            <div class="bg-mainclr py-1 px-5 mx-auto rounded-2xl text-white">
                                                <div class="text-center">
                                                    <p>Completed</p>
                                                </div>
                                            </div> <?php
                                            break;
                                        case 'in progress':
                                            ?>
                                            <div class="bg-yellow-400 py-1 px-3 mx-auto rounded-2xl text-white">
                                            <div class="text-center">
                                                <p>In Progress</p>
                                            </div>
                                        </div> <?php
                                        break;
                                        case 'uncompleted':
                                            ?>
                                            <div class="bg-red-600 py-1 px-3 mx-auto rounded-2xl text-white">
                                            <div class="text-center">
                                                <p>Uncompleted</p>
                                            </div>
                                        </div> <?php
                                        break;
                                    }
                                ?>
                            </td>
                            <td class="py-4 px-6">
                                @include('modal.detailTaskPIC')
                                {{-- <img src="{{ asset('storage/' . $data->t_file)  }}" alt=""> --}}
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex mx-auto justify-center">
                                    <button class="block bg-mainclr p-2 mr-3 rounded-lg text-white" type="button" data-modal-toggle="ModalEditEMP">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-white" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg>
                                    </button> 
                                    {{-- @include('modal.editEmployees') --}}
                                    @include('modal.deleteTaskPIC')
                                </div>  
                            </td>
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
