<span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="Openbar()">
    <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
  </span>
<div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-1000
    p-2 w-[85px] overflow-y-auto text-center bg-gray-900 shadow h-screen">
    <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center rounded-md ">
            <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
        </div>
        <div>
            <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600"
                 onclick="dropDown()">
                <div class="flex justify-between w-full items-center">
                    <i class="bi bi-gear"></i>
                </div>
            </div>
            <div class=" leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu">
                <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">字型大小</h1>
                <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1" onclick="logout()">登出</h1>
            </div>
            <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                <i class="bi bi-list-check"></i>
            </div>
            <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                <i class="bi bi-file-earmark-text"></i>
            </div>
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                <i class="bi bi-bell"></i>
            </div>
        </div>
    </div>
</div>

<script>
    function dropDown() {
        document.querySelector('#submenu').classList.toggle('hidden')
        document.querySelector('#arrow').classList.toggle('rotate-0')
    }

    function Openbar() {
        document.querySelector('.sidebar').classList.toggle('left-[-300px]')
    }

    function logout() {
        window.location.href = "{{route('login')}}";
    }
</script>
