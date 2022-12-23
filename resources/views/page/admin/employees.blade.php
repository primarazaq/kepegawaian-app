@extends('home')
@section('content')
<div class="flex items-center justify-end">
    <p class="text-black font-medium pt-4">
        Home /
    </p>
    <a href="" class="text-mainclr font-extrabold pt-4 ml-1 mr-4 underline hover:text-teal-600">
        Employees
    </a>
</div>



<div class="overflow-y-auto relative pt-8 pl-5 pr-5">
    <div class="flex pb-4 items-center">
        <div class="flex-auto">
            <div>
                @if (session()->has('destroy'))
                        <div id="alert-3" class="flex justify-between w-11/12 mx-auto p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                                    {{ session('destroy') }}
                                </div>
                                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                        </div>

                                      
                    @elseif (session()->has('success'))

                        <div id="alert-3" class="flex justify-between w-11/12 mx-auto p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
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
                    @elseif (session()->has('failed'))

                        <div id="alert-3" class="flex justify-between w-11/12 mx-auto p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Info</span>
                            <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                {{ session('failed') }}
                            </div>
                            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert-3" aria-label="Close">
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
            </div>
            <div class="flex pb-3 justify-between">
                <div class="bg-mainclr w-48 p-1 ml-16 rounded-full text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-white ml-3 mr-7" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
                    <div class="font-extrabold">
                        <p>Employees List</p>
                    </div>
                </div>
                <div class="inline-flex mr-16">
                    @include('modal.createEmp')
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
                                    <th data-priority="2">NAMA</th>
                                    <th data-priority="3">TANGGAL LAHIR</th>
                                    <th data-priority="4">NIP</th>
                                    <th data-priority="5">TANGGAL MULAI</th>
                                    <th data-priority="6">STATUS</th>
                                    <th data-priority="7">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $loop->iteration }}
                                    </th>
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->name }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $user->tgl_lhr }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->nip }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $date = date('d F Y, H.i A',strtotime($user->created_at)) }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->level }}
                                    </td>
                                    @if ($user->deleted_at == null)
                                    <td class="py-4 ">
                                        <div class="flex mx-auto justify-center">
                                             @include('modal.editEmpNew')
                                             
                                             @include('modal.disableEmp')
                                              
                                        </div>
                                    </td>
                                    @else
                                    <td class="py-4 ">
                                        <div class="flex mx-auto justify-center">
                                             @include('modal.enableEmp')
                                              
                                        </div>
                                    </td>
                                    @endif
                                    
                                    @endforeach
                                    
                                </tr>
                               
                               
                               
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

</div>
@endsection