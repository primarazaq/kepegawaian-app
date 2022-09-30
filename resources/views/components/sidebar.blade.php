@if (auth()->user()->level=="admin")
<aside class="w-56 rounded" aria-label="Sidebar">
   <div class="overflow-y-auto py-4 px-3 bg-[#00A2BA] rounded-tr-lg rounded-br-lg dark:bg-gray-800 h-screen">
      <div href="/home" class="flex items-center pl-2.5 mb-6 mt-2 w-10">
         <img src="imgs/logopln.png" alt="">
         <span class="self-center text-xl font-extrabold whitespace-nowrap dark:text-white ml-5">ETM System</span>
      </div>
      <div class="border-b-4 mb-4"></div>
      <ul class="space-y-2">
         <li>
            <a href="/admin/home/dashboard" class="{{ Request::is('/home/dashboard') ? 'active':'' }} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
               <img src="imgs/Vector.png" alt="" class="w-5">
               <span class="flex-1 ml-3 whitespace-nowrap text-white">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="/admin/home/employees" class="{{ Request::is('/home/employees') ? 'active':'' }} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
               <img src="imgs/Payroll.png" alt="" class="w-6">
               <span class="flex-1 ml-3 whitespace-nowrap text-white">Employees</span>
            </a>
         </li>
         <li>
            <a href="/admin/home/profile" class="{{ Request::is('/home/profile') ? 'active':'' }} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
               <img src="imgs/Male User.png" alt="" class="w-6">
               <span class="flex-1 ml-3 whitespace-nowrap text-white">Profile</span>
            </a>
         </li>
         <li>
            <a href="{{ route('logout')}}" class="flex absolute bottom-4 items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
               <img src="imgs/logout.png" alt="" class="w-6 absolute ml-11">
               <span class="flex-1 ml-20 whitespace-nowrap text-center text-white">Logout</span>
            </a>
         </li>
</ul>
</div>
</aside>
@endif

@if (auth()->user()->level=="pic")
<aside class="w-56 rounded" aria-label="Sidebar">
   <div class="overflow-y-auto py-4 px-3 bg-[#00A2BA] rounded-tr-lg rounded-br-lg dark:bg-gray-800 h-screen">
      <div href="/home" class="flex items-center pl-2.5 mb-6 mt-2 w-10">
         <img src="imgs/logopln.png" alt="">
         <span class="self-center text-xl font-extrabold whitespace-nowrap dark:text-white ml-5">ETM System</span>
      </div>
      <div class="border-b-4 mb-4"></div>
      <ul class="space-y-2">
<li>
   <a href="/pic/home/dashboard" class="{{ Request::is('/home/dashboard') ? 'active':'' }} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
      <img src="imgs/Vector.png" alt="" class="w-5">
      <span class="flex-1 ml-3 whitespace-nowrap text-white">Dashboard</span>
   </a>
</li>
<li>
   <a href="/pic/home/task" class="{{ Request::is('/home/task') ? 'active':'' }}flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
     <img src="imgs/Brief.png" alt="" class="w-6">
      <span class="flex-1 ml-2 whitespace-nowrap text-white">Task</span>
      <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
   </a>
</li>
<li>
   <a href="/pic/home/profile" class="{{ Request::is('/home/profile') ? 'active':'' }} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
      <img src="imgs/Male User.png" alt="" class="w-6">
      <span class="flex-1 ml-3 whitespace-nowrap text-white">Profile</span>
   </a>
</li>
<li>
   <a href="{{ route('logout')}}" class="flex absolute bottom-4 items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
      <img src="imgs/logout.png" alt="" class="w-6 absolute ml-11">
      <span class="flex-1 ml-20 whitespace-nowrap text-center text-white">Logout</span>
   </a>
</li>
</ul>
</div>
</aside>
@endif

@if (auth()->user()->level=="employee")
<aside class="w-56 rounded" aria-label="Sidebar">
   <div class="overflow-y-auto py-4 px-3 bg-[#00A2BA] rounded-tr-lg rounded-br-lg dark:bg-gray-800 h-screen">
      <div href="/home" class="flex items-center pl-2.5 mb-6 mt-2 w-10">
         <img src="imgs/logopln.png" alt="">
         <span class="self-center text-xl font-extrabold whitespace-nowrap dark:text-white ml-5">ETM System</span>
      </div>
      <div class="border-b-4 mb-4"></div>
      <ul class="space-y-2">
<li>
   <a href="/employee/home/dashboard" class="{{ Request::is('/home/dashboard') ? 'active':'' }} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
       <img src="imgs/Vector.png" alt="" class="w-5">
       <span class="flex-1 ml-3 whitespace-nowrap text-white">Dashboard</span>
   </a>
</li>
<li>
  <a href="/employee/home/mytask" class="{{ Request::is('/home/mytask') ? 'active':'' }}flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
   <img src="imgs/Brief.png" alt="" class="w-6">
     <span class="flex-1 ml-3 whitespace-nowrap text-white">My Task</span>
     <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
  </a>
</li>
<li>
   <a href="/employee/home/taskcompleted" class="{{ Request::is('/home/taskcompleted') ? 'active':'' }}flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
      <img src="imgs/Task Completed.png" alt="" class="w-6">
      <span class="flex-1 ml-3 whitespace-nowrap text-white">Task Completed</span>
      <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
   </a>
 </li>
<li>
   <a href="/employee/home/profile" class="{{ Request::is('/home/profile') ? 'active':'' }} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
       <img src="imgs/Male User.png" alt="" class="w-6">
      <span class="flex-1 ml-3 whitespace-nowrap text-white">Profile</span>
   </a>
</li>
<li>
   <a href="{{ route('logout')}}" class="flex absolute bottom-4 items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
      <img src="imgs/logout.png" alt="" class="w-6 absolute ml-11">
      <span class="flex-1 ml-20 whitespace-nowrap text-center text-white">Logout</span>
   </a>
</ul>
</div>
</aside>
@endif
        
      
 
 {{-- untuk mengaktifkan sidebar {{ Request::is('/home/dashboard') ? 'active':'' }}  --}}