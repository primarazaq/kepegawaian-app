<div class="flex justify-center p-12">
    <!-- Dropdown -->
    <div x-data="{ open: false }" class="relative">
        <button id="dropdownProgEMP" x-on:click="open = true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-mainclr hover:fill-teal-600" viewBox="0 0 448 512">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d="M384 480c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0zM224 352c-6.7 0-13-2.8-17.6-7.7l-104-112c-6.5-7-8.2-17.2-4.4-25.9s12.5-14.4 22-14.4l208 0c9.5 0 18.2 5.7 22 14.4s2.1 18.9-4.4 25.9l-104 112c-4.5 4.9-10.9 7.7-17.6 7.7z" />
            </svg>
        </button>
        <!-- Dropdown Body -->
        <div x-show.transition="open" x-on:click.away="open = false"
            class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl">
            <button @click="open=false" id="hide{{ $data->id }}"
                class="transition-colors duration-200 block w-full py-2 px-4 hover:bg-mainclr hover:bg-opacity-30 dark:hover:bg-gray-600 dark:hover:text-white">Ubah
                Respon</button>
            <div class="py-2">
                <hr>
                </hr>
            </div>
            @include('modal.validateDelComentEMP')
        </div>
        <!-- // Dropdown Body -->
    </div>
    <!-- // Dropdown -->
</div>
