<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <script src="./tailwind3.js"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
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
              <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                  <i class="bi bi-gear"></i>
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
      dropDown()

      function Openbar() {
          document.querySelector('.sidebar').classList.toggle('left-[-300px]')
      }
  </script>
</body>

</html>
