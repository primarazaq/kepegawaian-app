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
                            <form action="/login" method="POST" class="mt-6">
                                @csrf
                                <div class="pb-4">
                                    <label for="nip">
                                        <input
                                        name="nip"
                                        type="nip"
                                        id="nip"
                                        placeholder="NIP"
                                        class="px-7 py-2 border shadow rounded-lg w-full block bg-transparent text-black border-mainclr focus:outline-none focus:ring-2 focus:ring-mainclr focus:border-mainclr"/>
                                    </label>
                                </div>
                                <div class="pb-1">
                                <label for="password">
                                    <input
                                    name="password"
                                    type="password"
                                    id="password"
                                    placeholder="Password"
                                    class="px-7 py-2 border shadow rounded-lg w-80 block bg-transparent text-black border-mainclr focus:outline-none focus:ring-2 focus:ring-mainclr focus:border-mainclr"/>
                                </label>
                                </div>
                                <div class="pt-6">
                                <button class="py-2 rounded-full w-full block font-extrabold text-white bg-mainclr bg-opacity-90 hover:bg-teal-600 shadow-lg">
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