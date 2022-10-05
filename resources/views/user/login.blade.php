<!doctype html>
<html>
    @include('components.head')
    <body>
        <div class="w-full h-screen bg-no-repeat bg-cover"
            style="background-image: url(/imgs/bg.png)">
            <div class="bg-mainclr bg-opacity-30">
                <div class="w-full h-screen bg-no-repeat bg-cover bg-transparent bg-opacity-5"
                style="background-image: url(/imgs/hiasan.png)">
                    <div class="absolute top-6 right-7 w-36">
                        <img src="/imgs/pln.png" alt="">
                    </div>
                    <div class="absolute bottom-6 left-7 w-36">
                        <img src="/imgs/bumn.png" alt="">
                    </div>
                    <div class="flex items-center justify-center h-screen">
                        <p class="text-black absolute top-36 text-3xl font-extrabold">Employee Task Management System</p>
                        <div class=" bg-white rounded-xl shadow-md p-9" >
                        <h1 class="text-center font-extrabold text-3xl text-black">LOGIN</h1>
                            <form action="{{ route('postlogin')}}" method="post" class="mt-6">
                                @csrf
                                <div class="pb-4">
                                    <label for="nip">
                                        <input
                                        name="nip"
                                        type="nip"
                                        id="nip"
                                        placeholder="NIP"
                                        class="px-7 py-2 border shadow rounded-lg w-80 block bg-transparent text-black border-mainclr focus:outline-none focus:ring-2 focus:ring-mainclr focus:border-mainclr" required/>
                                    </label>
                                </div>
                                <div class="pb-1">
                                <label for="password">
                                    <input
                                    name="password"
                                    type="password"
                                    id="password"
                                    placeholder="Password"
                                    class="px-7 py-2 border shadow rounded-lg w-80 block bg-transparent text-black border-mainclr focus:outline-none focus:ring-2 focus:ring-mainclr focus:border-mainclr" required/>
                                </label>
                                </div>
                                <div>
                                    @if (session()->has('failed'))
                                    <div id="alert-2" class="flex p-4 mt-2 bg-red-100 rounded-lg dark:bg-red-200 alert-del" role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Info</span>
                                        <div class="ml-3 w-40 text-xs font-medium text-red-700 dark:text-red-800">
                                            {{ session('failed') }} <a href="#" class="font-semibold underline hover:text-red-800 dark:hover:text-red-900">
                                        </div>
                                        <button type="button" class="ml-16 -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert-2" aria-label="Close">
                                          <span class="sr-only">Close</span>
                                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </button>
                                      </div>

                                      <script>
                                      var alert_del = document.querySelectorAll('.alert-del');
                                        alert_del.forEach((x) =>
                                          x.addEventListener('click', function () {
                                            x.parentElement.classList.add('hidden');
                                          })
                                        );</script>
                                    
                                @endif
                                </div>
                                <div class="pt-6">
                                <button type="submit" class="py-2 rounded-full w-full block font-extrabold text-white bg-mainclr bg-opacity-90 hover:bg-teal-600 shadow-lg">
                                        Sign In
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>