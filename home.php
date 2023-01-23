<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Hello/views/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    
<nav class=" px-2 sm:px-4 py-2.5  fixed w-full z-20 top-0 left-0">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
  <a href="https://flowbite.com/" class="flex items-center">
      <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo">
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">TaSks</span>
  </a>
  <div class="flex md:order-2">
    <div>
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center  md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "><a href="login">Login</a></button>
      <button type="button" class="text-white bg-purple-800 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center  md:mr-0 dark:bg-purple-700 dark:hover:bg-purple-800 dark:focus:ring-purple-900"><a href="register">Register</a></button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  
  </div>
</nav>

  <div class="tExt text-2xl font-bold text-center  text-transparent  bg-clip-text bg-gradient-to-r from-purple-400 to-gray-50 ">
  <p class="text-2xl font-medium text-center"></p>
  </div>
    <div class="inputs">
        <h2>Add Task</h2>
        <div class="data">
            <input type="text" id="inp">
            <button id="btn">Add</button>
        </div>
    </div>
    <div class="list">
        <div class="box">
            <h2>ToDo</h2>
        </div>
        <div class="box">
            <h2>Doing</h2>
        </div>
        <div class="box">
            <h2>Done</h2>
        </div>
    </div>
   <script src="../../Hello/views/js/main.js"></script>
</body>

</html>