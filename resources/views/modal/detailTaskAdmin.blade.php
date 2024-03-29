<!-- Extra Large Modal -->
<div id="modalTaskDetail-{{ $data->task_id }}" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-2/4 h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="absolute w-32 top-3 right-5">
                <img src="../../imgs/pln.png" alt="">
            </div>
            <div class="flex rounded-t dark:border-gray-600 mb-2">
                <h3 class="text-2xl mx-auto mt-14 font-bold text-gray-900 dark:text-white">
                    {{ $data->t_title }}
                </h3>
            </div>
            <!-- Modal body -->
            <div class="overflow-x-auto relative pl-3">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <tbody class="">
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 w-1/4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                No. Task
                            </th>
                            <td class="py-4 px-6 w-1">
                                :
                            </td>
                            <td class="py-4 px-6">
                                {{ $data->task_id }}
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Sumber Tugas
                            </th>
                            <td class="py-4 px-6">
                                :
                            </td>
                            <td class="py-4 px-6">
                                PIC - {{ $data->pembuat_task }}
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nama Penerima
                            </th>
                            <td class="py-4 px-6">
                                :
                            </td>
                            <td class="py-4 px-6">
                                {{ $data->name }}
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                NIP
                            </th>
                            <td class="py-4 px-6">
                                :
                            </td>
                            <td class="py-4 px-6">
                                {{ $data->multinip }}
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Deadline
                            </th>
                            <td class="py-4 px-6">
                                :
                            </td>
                            <td class="py-4 px-6">
                                {{ $date = date('l, d F Y, H.i A', strtotime($data->t_due_date)) }}</p>
                            </td>
                        </tr>
                        @if ($data->t_status == 'completed')
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Submitted
                                </th>
                                <td class="py-4 px-6">
                                    :
                                </td>
                                <td class="py-4 px-6">
                                    {{ $date = date('l, d F Y, H.i A', strtotime($data->updated_at)) }}</p>
                                </td>
                            </tr>
                        @else
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Tanggal Mulai
                                </th>
                                <td class="py-4 px-6">
                                    :
                                </td>
                                <td class="py-4 px-6">
                                    {{ $date = date('l, d F Y, H.i A', strtotime($data->created_at)) }}</p>
                                </td>
                            </tr>
                        @endif
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Detail Tugas
                            </th>
                            <td class="py-4 px-6">
                                :
                            </td>
                            <td class="py-4 px-6">
                                <?php echo $data->t_body; ?>
                            </td>
                        </tr>
                        @if ($data->t_file)
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Bukti File
                                </th>
                                <td class="py-4 px-6">
                                    :
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex">
                                        <a href="{{ asset('storage/' . $data->t_file) }}"
                                            class="text-mainclr hover:text-teal-600 underline" target="_blank">lihat
                                            file</a>
                                    </div>
                                </td>
                            </tr>
                        @endif

                        @if ($data->t_status == 'completed')
                            {{-- menampilkan multi response --}}
                            <?php
                            $multiName = explode(',', $data->name);
                            $multiRfile = explode(',', $data->response_file);
                            $multiRBody = explode(',', $data->response_body);
                            $array = ['name' => $multiName, 'response_file' => $multiRfile, 'response_body' => $multiRBody];
                            
                            $object = json_decode(json_encode($array));
                            // var_dump(count($object->name));
                            ?>
                            @if (count($multiName) > 1)
                                @if (count($object->name) == 2)
                                    @for ($i = 0; $i < 2; $i++)
                                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 text-xs">
                                            <th scope="row"
                                                class="py-4 px-6 w-1/4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Respon <?php print_r($object->name[$i]); ?>
                                                <hr>
                                            </th>
                                            <td class="py-4 px-6 w-1">

                                            </td>
                                            <td class="py-4 px-6">

                                            </td>
                                        </tr>
                                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row"
                                                class="py-4 px-6 w-1/4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Deskripsi
                                            </th>
                                            <td class="py-4 px-6 w-1">
                                                :
                                            </td>
                                            <td class="py-4 px-6">
                                                <?php print_r($object->response_body[$i]); ?>
                                            </td>
                                        </tr>
                                        @if ($data->response_file)
                                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row"
                                                    class="py-4 px-6 w-1/4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Lampiran File
                                                </th>
                                                <td class="py-4 px-6 w-1">
                                                    :
                                                </td>
                                                <td class="py-4 px-6">
                                                    <a href="{{ asset('storage/' . print_r($object->response_file[$i])) }}"
                                                        class="text-mainclr hover:text-teal-600 underline"
                                                        target="_blank">lihat
                                                        file</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endfor
                                @elseif (count($object->name) == 3)
                                    @for ($i = 0; $i < 3; $i++)
                                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 text-xs">
                                            <th scope="row"
                                                class="py-4 px-6 w-1/4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Respon <?php print_r($object->name[$i]); ?>
                                                <hr>
                                            </th>
                                            <td class="py-4 px-6 w-1">

                                            </td>
                                            <td class="py-4 px-6">

                                            </td>
                                        </tr>
                                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row"
                                                class="py-4 px-6 w-1/4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Deskripsi
                                            </th>
                                            <td class="py-4 px-6 w-1">
                                                :
                                            </td>
                                            <td class="py-4 px-6">
                                                <?php print_r($object->response_body[$i]); ?>
                                            </td>
                                        </tr>
                                        @if ($data->response_file)
                                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row"
                                                    class="py-4 px-6 w-1/4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Lampiran File
                                                </th>
                                                <td class="py-4 px-6 w-1">
                                                    :
                                                </td>
                                                <td class="py-4 px-6">
                                                    <a href="{{ asset('storage/' . print_r($object->response_file[$i])) }}"
                                                        class="text-mainclr hover:text-teal-600 underline"
                                                        target="_blank">lihat
                                                        file</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endfor
                                @elseif (count($object->name) == 4)
                                    @for ($i = 0; $i < 4; $i++)
                                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 text-xs">
                                            <th scope="row"
                                                class="py-4 px-6 w-1/4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Respon <?php print_r($object->name[$i]); ?>
                                                <hr>
                                            </th>
                                            <td class="py-4 px-6 w-1">

                                            </td>
                                            <td class="py-4 px-6">

                                            </td>
                                        </tr>
                                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row"
                                                class="py-4 px-6 w-1/4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Deskripsi
                                            </th>
                                            <td class="py-4 px-6 w-1">
                                                :
                                            </td>
                                            <td class="py-4 px-6">
                                                <?php print_r($object->response_body[$i]); ?>
                                            </td>
                                        </tr>
                                        @if ($data->response_file)
                                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row"
                                                    class="py-4 px-6 w-1/4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Lampiran File
                                                </th>
                                                <td class="py-4 px-6 w-1">
                                                    :
                                                </td>
                                                <td class="py-4 px-6">
                                                    <a href="{{ asset('storage/' . print_r($object->response_file[$i])) }}"
                                                        class="text-mainclr hover:text-teal-600 underline"
                                                        target="_blank">lihat
                                                        file</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endfor
                                @endif
                            @else
                                <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 text-xs">
                                    <th scope="row"
                                        class="py-4 px-6 w-1/4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Respon {{ $data->name }}
                                        <hr>
                                    </th>
                                    <td class="py-4 px-6 w-1">

                                    </td>
                                    <td class="py-4 px-6">

                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="py-4 px-6 w-1/4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Deskripsi
                                    </th>
                                    <td class="py-4 px-6 w-1">
                                        :
                                    </td>
                                    <td class="py-4 px-6">
                                        <?php echo $data->response_body; ?>
                                    </td>
                                </tr>
                                @if ($data->response_file)
                                    <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="py-4 px-6 w-1/4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Lampiran File
                                        </th>
                                        <td class="py-4 px-6 w-1">
                                            :
                                        </td>
                                        <td class="py-4 px-6">
                                            <a href="{{ asset('storage/' . $data->response_file) }}"
                                                class="text-mainclr hover:text-teal-600 underline"
                                                target="_blank">lihat file</a>
                                        </td>
                                    </tr>
                                @endif
                            @endif
                        @endif



                    </tbody>
                </table>
                @switch($data->t_status)
                    @case('completed')
                        <div class="py-4">
                            <img src="../../imgs/done.png" class="w-16 mx-auto" alt="">
                            <h3 class="text-2xl mx-auto font-bold text-gray-900 dark:text-white">
                                Task is Completed
                            </h3>
                        </div>
                    @break

                    @case('in progress')
                        <div class="py-4">
                            <img src="../../imgs/progress.png" class="w-16 mx-auto" alt="">
                            <h3 class="text-2xl mx-auto font-bold text-gray-900 dark:text-white">
                                Task in progress
                            </h3>
                        </div>
                    @break

                    @case('uncompleted')
                        <div class="py-4">
                            <img src="../../imgs/undone.png" class="w-16 mx-auto" alt="">
                            <h3 class="text-2xl mx-auto font-bold text-gray-900 dark:text-white">
                                Task Incompleted
                            </h3>
                        </div>
                    @break
                @endswitch
            </div>
            <!-- Modal footer -->
            <div class="flex items-center pt-1 pb-1 space-x-2 rounded-b border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="modalTaskDetail-{{ $data->task_id }}" type="button"
                    class=" mx-auto text-black font-bold bg-white hover:bg-gray-100 rounded-full border border-black text-sm px-14 py-2 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Back</button>
            </div>
            <div class="w-32 pb-4 pl-4">
                <img src="../../imgs/bumn.png" alt="">
            </div>
        </div>
    </div>
</div>
