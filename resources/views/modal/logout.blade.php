{{-- <div class="mx-auto text-center">
    <button class="blok absolute bottom-4 right-14 left-14 p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white" type="button" data-modal-toggle="logoutModal">
    
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        class="w-6 absolute fill-white" viewBox="0 0 96.943 96.943" style="enable-background:new 0 0 96.943 96.943;"
        xml:space="preserve">
        <g>
        <g>
        <path d="M61.168,83.92H11.364V13.025H61.17c1.104,0,2-0.896,2-2V3.66c0-1.104-0.896-2-2-2H2c-1.104,0-2,0.896-2,2v89.623
        c0,1.104,0.896,2,2,2h59.168c1.105,0,2-0.896,2-2V85.92C63.168,84.814,62.274,83.92,61.168,83.92z"/>
        <path d="M96.355,47.058l-26.922-26.92c-0.75-0.751-2.078-0.75-2.828,0l-6.387,6.388c-0.781,0.781-0.781,2.047,0,2.828
        l12.16,12.162H19.737c-1.104,0-2,0.896-2,2v9.912c0,1.104,0.896,2,2,2h52.644L60.221,67.59c-0.781,0.781-0.781,2.047,0,2.828
        l6.387,6.389c0.375,0.375,0.885,0.586,1.414,0.586c0.531,0,1.039-0.211,1.414-0.586l26.922-26.92
        c0.375-0.375,0.586-0.885,0.586-1.414C96.943,47.941,96.73,47.433,96.355,47.058z"/>
        </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
        {{-- <img src="imgs/logout.png" alt="" class="w-6 absolute ml-11"> 
        <span class="inline-block whitespace-nowrap ml-10 text-white">Logout</span>
    </button>
</div> --}}
{{-- <button class="block text-white bg-red-600 p-2 rounded-lg font-medium text-sm py-2 text-center" >
    <svg version="1.1" class="w-5 fill-white" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 177.055 177.055" style="enable-background:new 0 0 177.055 177.055;" xml:space="preserve">
                        <path d="M0.001,88.527c0,48.814,39.713,88.527,88.527,88.527c48.813,0,88.526-39.713,88.526-88.527S137.341,0,88.528,0
                            C39.714,0,0.001,39.713,0.001,88.527z M88.528,24.304c35.413,0,64.224,28.811,64.224,64.224c0,13.324-4.081,25.712-11.055,35.983
                            L52.544,35.359C62.816,28.385,75.204,24.304,88.528,24.304z M124.511,141.696c-10.272,6.974-22.659,11.055-35.983,11.055
                            c-35.413,0-64.223-28.811-64.223-64.224c0-13.324,4.081-25.711,11.054-35.983L124.511,141.696z"/>
                            <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
  </button> --}}
<div id="logoutModal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="p-6 text-center">
                <img src="../../../../imgs/logoutImg.png" class="w-24 mx-auto" alt="">
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin keluar dari sistem?</h3>
                  <div class="flex justify-center">
                    <button data-modal-toggle="logoutModal" type="button" class="text-gray-50 mr-8 bg-gray-400 hover:bg-gray-100 rounded-3xl border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">
                        Cancel
                    </button>
                    <a href="{{ route('logout') }}" class="inline-flex border-0 text-white bg-mainclr hover:bg-teal-800 font-medium rounded-3xl text-sm items-center px-5 py-2.5 text-center mr-2">
                        Logout
                    </a>
                  </div>
            </div>
        </div>
    </div>
</div>