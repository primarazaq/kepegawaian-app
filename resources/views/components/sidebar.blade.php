@if (auth()->user()->level=="admin")
<aside class="w-56 rounded" aria-label="Sidebar">
   <div class="overflow-y-auto py-4 px-3 bg-[#00A2BA] rounded-tr-lg rounded-br-lg dark:bg-gray-800 h-screen">
      <div href="/home" class="items-center justify-center mb-6 mt-2 flex">
         <img src="../../imgs/logopln.png" class="w-8" alt="">
         <h2 class="text-xl font-extrabold whitespace-nowrap dark:text-white ml-3">ETM System</h2>
      </div>
      <div class="border-b-4 mb-4"></div>
      <ul class="space-y-2">
         <li>
            <a href="/admin/home/dashboard" class="{{ Request::is('/home/dashboard') ? 'active':'' }} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
               <svg class="w-6 fill-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"/><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/></g></svg>
               {{-- <img src="imgs/Vector.png" alt="" class="w-5"> --}}
               <span class="flex-1 ml-3 whitespace-nowrap text-white">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="/admin/home/employees" class="{{ Request::is('/home/employees') ? 'active':'' }} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
               <svg version="1.1" id="Layer_1" class="w-6 fill-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 335.436 335.436" style="enable-background:new 0 0 335.436 335.436;" xml:space="preserve">
               <g>
               <circle cx="255.436" cy="110.304" r="44.138"/>
               <path d="M100.725,187.928C45.096,187.928,0,233.024,0,288.653h201.45C201.45,233.024,156.354,187.928,100.725,187.928z"/>
               <path d="M255.436,184.442c-20.787,0-39.711,7.938-53.931,20.938c14.212,17.138,23.672,37.368,27.712,59.062h106.219
                  C335.436,220.259,299.618,184.442,255.436,184.442z"/>
               <circle cx="100.725" cy="102.355" r="55.573"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
               {{-- <img src="imgs/Payroll.png" alt="" class="w-6"> --}}
               <span class="flex-1 ml-3 whitespace-nowrap text-white">Employees</span>
            </a>
         </li>
         <li>
            <a href="/admin/home/profile" class="{{ Request::is('/home/profile') ? 'active':'' }} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
               <svg version="1.1" id="Layer_1" class="w-6 fill-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve">
            <g>
               <g>
                  <path d="M229.5,0C102.53,0,0,102.845,0,229.5C0,356.301,102.719,459,229.5,459C356.851,459,459,355.815,459,229.5
                     C459,102.547,356.079,0,229.5,0z M347.601,364.67C314.887,393.338,273.4,409,229.5,409c-43.892,0-85.372-15.657-118.083-44.314
                     c-4.425-3.876-6.425-9.834-5.245-15.597c11.3-55.195,46.457-98.725,91.209-113.047C174.028,222.218,158,193.817,158,161
                     c0-46.392,32.012-84,71.5-84c39.488,0,71.5,37.608,71.5,84c0,32.812-16.023,61.209-39.369,75.035
                     c44.751,14.319,79.909,57.848,91.213,113.038C354.023,354.828,352.019,360.798,347.601,364.67z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
               {{-- <img src="imgs/Male User.png" alt="" class="w-6"> --}}
               <span class="flex-1 ml-3 whitespace-nowrap text-white">Profile</span>
            </a>
         </li>
         <li>
            <a href="{{ route('logout')}}" class="flex absolute bottom-4 items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
               <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               class="w-6 absolute ml-11 fill-white" viewBox="0 0 96.943 96.943" style="enable-background:new 0 0 96.943 96.943;"
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
               {{-- <img src="imgs/logout.png" alt="" class="w-6 absolute ml-11"> --}}
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
      <svg class="w-6 fill-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"/><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/></g></svg>
      {{-- <img src="imgs/Vector.png" alt="" class="w-5"> --}}
      <span class="flex-1 ml-3 whitespace-nowrap text-white">Dashboard</span>
   </a>
</li>
<li>
   <a href="/pic/home/task" class="{{ Request::is('/home/task') ? 'active':'' }}flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
      <svg version="1.1" class="w-6 fill-white" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 48.625 48.625" style="enable-background:new 0 0 48.625 48.625;"
	 xml:space="preserve">
<g>
	<g>
		<path d="M7.312,40.625c0,4.418,3.582,8,8,8h18c4.418,0,8-3.582,8-8V16.791h-34V40.625z M12.228,20.291h24.167v2.833H12.228V20.291
			z M12.228,26.291h24.167v2.833H12.228V26.291z M12.228,32.291h24.167v2.833H12.228V32.291z M12.228,38.291h24.167v2.833H12.228
			V38.291z"/>
		<path d="M33.313,6.333h-0.167v3c0.001,1.105-0.896,2-1.999,2H17.313c-1.105,0-2-0.895-2-2v-3c-4.418,0-8,3.582-8,8h34
			C41.313,9.915,37.731,6.333,33.313,6.333z"/>
		<path d="M16.98,7.5c0,1.105,0.895,2,2,2h10.333c1.104,0,2-0.895,2-2V5c0-0.233-0.048-0.454-0.121-0.662
			C30.919,3.56,30.185,3,29.313,3h-1.865c-0.17-1.682-1.574-3-3.301-3c-1.727,0-3.13,1.318-3.299,3H18.98
			c-0.878,0-1.615,0.568-1.884,1.355C17.026,4.558,16.98,4.773,16.98,5V7.5z M24.147,2.166c0.645,0,1.167,0.522,1.167,1.167
			S24.792,4.5,24.147,4.5S22.98,3.978,22.98,3.333S23.502,2.166,24.147,2.166z"/>
	</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
      {{-- <img src="imgs/Brief.png" alt="" class="w-6"> --}}
      <span class="flex-1 ml-2 whitespace-nowrap text-white">Task</span>
   </a>
</li>
<li>
   <a href="/pic/home/profile" class="{{ Request::is('/home/profile') ? 'active':'' }} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
      <svg version="1.1" id="Layer_1" class="w-6 fill-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve">
            <g>
               <g>
                  <path d="M229.5,0C102.53,0,0,102.845,0,229.5C0,356.301,102.719,459,229.5,459C356.851,459,459,355.815,459,229.5
                     C459,102.547,356.079,0,229.5,0z M347.601,364.67C314.887,393.338,273.4,409,229.5,409c-43.892,0-85.372-15.657-118.083-44.314
                     c-4.425-3.876-6.425-9.834-5.245-15.597c11.3-55.195,46.457-98.725,91.209-113.047C174.028,222.218,158,193.817,158,161
                     c0-46.392,32.012-84,71.5-84c39.488,0,71.5,37.608,71.5,84c0,32.812-16.023,61.209-39.369,75.035
                     c44.751,14.319,79.909,57.848,91.213,113.038C354.023,354.828,352.019,360.798,347.601,364.67z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
      {{-- <img src="imgs/Male User.png" alt="" class="w-6"> --}}
      <span class="flex-1 ml-3 whitespace-nowrap text-white">Profile</span>
   </a>
</li>
<li>
   <a href="{{ route('logout')}}" class="flex absolute bottom-4 items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               class="w-6 absolute ml-11 fill-white" viewBox="0 0 96.943 96.943" style="enable-background:new 0 0 96.943 96.943;"
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
      {{-- <img src="imgs/logout.png" alt="" class="w-6 absolute ml-11"> --}}
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
      <svg class="w-6 fill-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"/><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/></g></svg> 
      {{-- <img src="imgs/Vector.png" alt="" class="w-5"> --}}
       <span class="flex-1 ml-3 whitespace-nowrap text-white">Dashboard</span>
   </a>
</li>
<li>
  <a href="/employee/home/mytask" class="{{ Request::is('/home/mytask') ? 'active':'' }}flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
   <svg version="1.1" class="w-6 fill-white" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="31.273px" height="31.273px" viewBox="0 0 31.273 31.273" style="enable-background:new 0 0 31.273 31.273;"
   xml:space="preserve">
<g>
  <path d="M26.228,1.102H14.042l-0.036-0.094C13.772,0.401,13.188,0,12.537,0H5.324C3.957,0,2.808,1.085,2.808,2.452V28.82
     c0,1.365,1.148,2.453,2.516,2.453h18.761c0.295,0,0.57-0.146,0.736-0.387c0.166-0.242,0.203-0.551,0.1-0.824h1.308
     c1.265,0,2.236-1.021,2.236-2.285V3.395C28.464,2.131,27.492,1.102,26.228,1.102z M25.933,27.42h-1.99l-1.115-2.947
     c0.609-0.111,1.068-0.629,1.068-1.27c0-0.723-0.584-1.289-1.309-1.289h-0.729l-0.912-2.422h1.863c0.723,0,1.307-0.6,1.307-1.322
     s-0.584-1.32-1.307-1.32h-2.84l-0.912-2.423h3.752c0.723,0,1.307-0.545,1.307-1.266c0-0.723-0.584-1.268-1.307-1.268h-4.729
     l-0.912-2.421h5.641c0.723,0,1.307-0.6,1.307-1.322c0-0.721-0.584-1.32-1.307-1.32h-6.617l-1.174-3.084h10.914V27.42z"/>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
      {{-- <img src="imgs/Brief.png" alt="" class="w-6"> --}}
     <span class="flex-1 ml-3 whitespace-nowrap text-white">My Task</span>
  </a>
</li>
<li>
   <a href="/employee/home/taskcompleted" class="{{ Request::is('/home/taskcompleted') ? 'active':'' }}flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
      <svg version="1.1" class="w-6 fill-white" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 491.5 491.5" style="enable-background:new 0 0 491.5 491.5;" xml:space="preserve">
<g>
	<g>
		<path d="M348.1,245.7c-67.8,0-122.9,55.1-122.9,122.9s55.1,122.9,122.9,122.9S471,436.4,471,368.6S415.9,245.7,348.1,245.7z
			 M403.5,362.6l-41,41c-4,4-9.2,6-14.5,6c-5.2,0-10.5-2-14.5-6L313,383.1c-8-8-8-21,0-29s21-8,29,0l6,6l26.5-26.5c8-8,21-8,29,0
			C411.5,341.7,411.5,354.6,403.5,362.6z"/>
	</g>
</g>
<g>
	<g>
		<path d="M385.3,41h-57.7v-9.8c0-17.2-14-31.2-31.2-31.2H154c-17.2,0-31.2,14-31.2,31.2v9.7H65.2c-24.7,0-44.7,20.1-44.7,44.7
			v361.1c0,24.7,20.1,44.7,44.7,44.7h174.9c-34.2-29.9-55.8-73.8-55.8-122.8h-81.9c-11.3,0-20.5-9.2-20.5-20.5s9.2-20.5,20.5-20.5
			h81.9c1.8,0,3.4,0.6,5.1,1c3.8-14.9,9.5-29,17-42h-83.6c-11.3,0-20.5-9.2-20.5-20.5s9.2-20.5,20.5-20.5h102.4
			c4.1,0,7.7,1.5,10.9,3.6c29.3-27.5,68.6-44.6,112-44.6c29.9,0,57.8,8.2,81.9,22.2V85.7C430,61,409.9,41,385.3,41z M163.8,184.3
			h-41c-11.3,0-20.5-9.2-20.5-20.5c0-11.3,9.2-20.5,20.5-20.5h41c11.3,0,20.5,9.2,20.5,20.5C184.3,175.1,175.1,184.3,163.8,184.3z
			 M163.8,81.9v-41h122.9v41H163.8z M327.6,184.3h-81.9c-11.3,0-20.5-9.2-20.5-20.5c0-11.3,9.2-20.5,20.5-20.5h81.9
			c11.3,0,20.5,9.2,20.5,20.5C348.1,175.1,338.9,184.3,327.6,184.3z"/>
	</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
      {{-- <img src="imgs/Task Completed.png" alt="" class="w-6"> --}}
      <span class="flex-1 ml-2 whitespace-nowrap text-white">Task Completed</span>
   </a>
 </li>
<li>
   <a href="/employee/home/profile" class="{{ Request::is('/home/profile') ? 'active':'' }} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-black hover:opacity-40 dark:hover:bg-black">
      <svg version="1.1" id="Layer_1" class="w-6 fill-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve">
            <g>
               <g>
                  <path d="M229.5,0C102.53,0,0,102.845,0,229.5C0,356.301,102.719,459,229.5,459C356.851,459,459,355.815,459,229.5
                     C459,102.547,356.079,0,229.5,0z M347.601,364.67C314.887,393.338,273.4,409,229.5,409c-43.892,0-85.372-15.657-118.083-44.314
                     c-4.425-3.876-6.425-9.834-5.245-15.597c11.3-55.195,46.457-98.725,91.209-113.047C174.028,222.218,158,193.817,158,161
                     c0-46.392,32.012-84,71.5-84c39.488,0,71.5,37.608,71.5,84c0,32.812-16.023,61.209-39.369,75.035
                     c44.751,14.319,79.909,57.848,91.213,113.038C354.023,354.828,352.019,360.798,347.601,364.67z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg> 
      {{-- <img src="imgs/Male User.png" alt="" class="w-6"> --}}
      <span class="flex-1 ml-3 whitespace-nowrap text-white">Profile</span>
   </a>
</li>
<li>
   <a href="{{ route('logout')}}" class="flex absolute bottom-4 items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               class="w-6 absolute ml-11 fill-white" viewBox="0 0 96.943 96.943" style="enable-background:new 0 0 96.943 96.943;"
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
      {{-- <img src="imgs/logout.png" alt="" class="w-6 absolute ml-11"> --}}
      <span class="flex-1 ml-20 whitespace-nowrap text-center text-white">Logout</span>
   </a>
</ul>
</div>
</aside>
@endif
        
      
 
 {{-- untuk mengaktifkan sidebar {{ Request::is('/home/dashboard') ? 'active':'' }}  --}}