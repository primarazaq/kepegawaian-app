
<!-- Extra Large Modal -->
<div id="modalTaskComplt-{{ $data->t_id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-3/5 max-w-7xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="absolute w-32 top-3 right-5">
                <img src="../../imgs/pln.png" alt="">
            </div>
            <div class="flex rounded-t dark:border-gray-600">
                <h3 class="text-2xl mx-auto mt-14 font-bold text-gray-900 dark:text-white">
                    {{ $data->t_title }}
                </h3>
            </div>
            <!-- Modal body -->
            <div class="p-6">
                <div class="flex">
                    <div class="basis-3/4 text-base space-y-5 text-left leading-relaxed text-gray-500 dark:text-gray-400">
                        <p>No. Tugas</p>
                        <p>Sumber Tugas</p>
                        <p>Nama Penerima</p>
                        <p>Deadline</p>
                        <p>Terakhir Diubah</p>
                        <p>Deskripsi</p>
                        <p>Your Response</p>
                        <p>Your Submission</p>
                    </div>
                    <div class="text-base mb-5 space-y-5 text-left leading-relaxed">
                        <p>:&nbsp;{{ $data->t_id }}</p>
                        <p>: PIC - {{ $data->sender_name }}</p>
                        <p>: </p>
                        <p>:&nbsp;{{ $date = date('l, d F Y, H.i A',strtotime($data->t_due_date)) }}</p>
                        <p>:&nbsp;{{ $date = date('l, d F Y, H.i A',strtotime($data->updated_at)) }}</p>
                        <p>:&nbsp;<?php echo ($data->t_body) ?></p>
                        <p>:&nbsp;<?php echo ($data->response_body) ?></p>
                        <p>:&nbsp; <a href="{{ asset('storage/' . $data->response_file) }}" class="text-mainclr dark:text-teal-500 hover:underline">lihat file</a></p>
                    </div>
                </div>
                <img src="../../imgs/done.png" class="w-16 mx-auto" alt="">
                <h3 class="text-2xl mx-auto font-bold text-gray-900 dark:text-white">
                    Your Task is Complete
                </h3>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center pt-1 pb-1 space-x-2 rounded-b border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="modalTaskComplt-{{ $data->t_id }}" type="button" class=" mx-auto text-black font-bold bg-white hover:bg-gray-100 rounded-full border border-black text-sm px-14 py-2 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Back</button>
            </div>
            <div class="w-32 pb-4 pl-4">
                <img src="../../imgs/bumn.png" alt="">
            </div>
        </div>
    </div>
</div>