<!-- Dropdown menu -->
<div id="dropdownProg-{{ $data->id }}" class="hidden z-10 w-36 bg-white rounded border-2 border-mainclr shadow dark:bg-gray-700">
    <ul class="text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownProgEMP-{{ $data->id }}">
      <li>
        <button id="hide{{ $data->id }}" data-dropdown-toggle="dropdownProg-{{ $data->id }}" class="block w-full border-b-2 py-2 px-4 hover:bg-mainclr hover:bg-opacity-30 dark:hover:bg-gray-600 dark:hover:text-white">Ubah Respon</button>
        {{-- @include('modal.editReply') --}}
      </li>
      <li>   
            <button type="button" data-modal-toggle="popup-Del-CommentEMP" class="block py-2 w-full px-4 hover:bg-mainclr hover:bg-opacity-30 dark:hover:bg-gray-600 dark:hover:text-white">Hapus Respon</button>   
      </li>
    </ul>
</div>
