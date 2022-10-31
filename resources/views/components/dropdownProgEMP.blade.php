<!-- Dropdown menu -->
<div id="dropdownProg-{{ $data->id }}" class="hidden z-10 w-36 bg-white rounded border-2 border-mainclr shadow dark:bg-gray-700">
    <ul class="text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownProgEMP-{{ $data->id }}">
      <li>
        <button onclick="myFunction()" type="button" class="block py-2 px-4 hover:bg-mainclr hover:bg-opacity-30 dark:hover:bg-gray-600 dark:hover:text-white">Ubah Respon</button>
      </li>
      <li>
        <a href="#" class="block py-2 px-4 hover:bg-mainclr hover:bg-opacity-30 dark:hover:bg-gray-600 dark:hover:text-white">Hapus Respon</a>
      </li>
    </ul>
</div>