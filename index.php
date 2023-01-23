<?php
$data = new TasksController();
$tasks = $data->gettodo();
?>
<?php
if (isset($_POST['submit'])) {
    $newtask = new TasksController();
    $newtask->addTask();
}
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


</head>

<body>

    <style>
        .sidebar:hover {
            width: 16rem;
        }

        @media only screen and (min-width: 768px) {
            .header-right {
                width: calc(100% - 16rem);
            }
        }
    </style>
    <div x-data="setup()" :class="{ 'dark': isDark }">
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

            <!-- Header -->
            <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
                <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-blue-800 dark:bg-gray-800 border-none">
                    <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="../../Hello/images/1671216243066.jpg" />
                    <span class="hidden md:block">Hello</span>
                </div>
                <div class="flex justify-between items-center h-14 bg-blue-800 dark:bg-gray-800 header-right">
                    <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
                        <button class="outline-none focus:outline-none">
                            <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                        <input type="search" name="" id="" placeholder="Search" class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
                    </div>
                    <ul class="flex items-center">
                        <li>



                        </li>
                        <li>
                            <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                        </li>
                        <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) { ?>

                        <li>
                            <a href="logout" class="flex items-center mr-4 hover:text-blue-100">
                                <span class="inline-flex mr-1">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                </span> Logout
                            </a>
                        </li>
                        <?php  } ?>
                        <li>

                        <?php if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) { ?>

                            <a href="home" class="flex items-center mr-4 hover:text-blue-100">
                                 home
                            </a>
                            </li>

                        <?php  } ?>
                    </ul>
                </div>
            </div>
            <!-- Header -->

            <!-- Sidebar -->
            <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
                <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                    <ul class="flex flex-col py-4 space-y-1">
                        <li class="px-5 hidden md:block">
                            <div class="flex flex-row items-center h-8">
                                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Messages</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Notifications</span>
                                <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span>
                            </a>
                        </li>
                        <li class="px-5 hidden md:block">
                            <div class="flex flex-row items-center mt-5 h-8">
                                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                            </a>
                        </li>
                    </ul>
                    <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2023</p>
                </div>
            </div>
            <!-- Sidebar -->

            <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
                <!-- Tasks -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-4 gap-4 text-black dark:text-white">
                    <div class="md:col-span-2 xl:col-span-3">
                        <h2 id="message" class="text-lg font-semibold">Task summaries of recent sprints</h2>
                    </div>
                    <div class="box md:col-span-2 xl:col-span-1">
                        <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
                            <div class="flex justify-between py-1 text-black dark:text-white">
                                <h3 id="1" class="text-sm font-semibold">Tasks in TO DO</h3>

                                <svg class="h-4 fill-current text-gray-600 dark:text-gray-500 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
                                </svg>
                            </div>

                            <div class="input-group"></div>
                            <?php foreach ($tasks as $task) : ?>
                                <?php
                                if (isset($task['task']) && $task['situation'] == 1) {
                                ?>

                                    <div class="w-full bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer"><?php echo $task['task']; ?>


                                        <form method="POST" class="mr-1" action="update">
                                            <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                                            <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></button>
                                        </form>
                                        <form method="POST" class="ms-1" action="delete">
                                            <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></button>
                                        </form>
                                    </div>
                                <?php
                                }
                                ?>

                            <?php endforeach; ?>
                            <div class="text-sm text-black dark:text-gray-50 mt-2">




                                <form method="post" enctype="multipart/form-data" id="form-1">
                                    <div class="form-fieldset">

                                        <!-- <input type="text" class="mt-3 focus:outline-none  text-gray-300 bg-gray-800 w-full   py-2 dark:text-gray-400" placeholder="Add a card..." id="inp"> -->
                                        <input type="text" name="task[]" class="mt-3 focus:outline-none  text-gray-300 bg-gray-800 w-full   py-2 dark:text-gray-400" placeholder="Add a card..." required>

                                    </div>
                                    <div class="flex justify-around">

                                        <button type="submit" name="submit" class="mt-3 flex justify-center focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Add Task</button>
                                        <button type="button" class="add-more btn btn-secondary">Add More</button>
                                    </div>
                                </form>








                            </div>
                        </div>
                    </div>


                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Clone the first form fieldset and add a button to remove it
                            var formFieldset = document.querySelector(".form-fieldset").cloneNode(true);
                            var removeBtn = document.createElement("button");
                            removeBtn.classList.add("remove-fieldset", "btn", "btn-danger");
                            removeBtn.innerHTML = "Remove";
                            formFieldset.appendChild(removeBtn);

                            // Add click event listener to the "Add More" button
                            var addMoreBtn = document.querySelector(".add-more");
                            addMoreBtn.addEventListener("click", function() {
                                // Append the cloned form fieldset to the form
                                var form = document.querySelector("#form-1");
                                form.appendChild(formFieldset.cloneNode(true));
                            });

                            // Add click event listener to the "Remove" buttons
                            document.addEventListener("click", function(event) {
                                if (event.target.classList.contains("remove-fieldset")) {
                                    // Remove the parent fieldset when the "Remove" button is clicked
                                    event.target.parentNode.remove();
                                }
                            });
                        });
                    </script>




                    <div>
                        <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
                            <div class="flex justify-between py-1 text-black dark:text-white">
                                <h3 class="text-sm font-semibold">Tasks in Doing</h3>
                                <svg class="h-4 fill-current text-gray-600 dark:text-gray-500 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
                                </svg>
                            </div>

                            <?php foreach ($tasks as $task) : ?>
                                <?php
                                if (isset($task['task']) && $task['situation'] == 2) {
                                ?>

                                    <div class="w-full bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer"><?php echo $task['task']; ?>


                                        <form method="POST" class="mr-1" action="update">
                                            <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                                            <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></button>
                                        </form>
                                        <form method="POST" class="ms-1" action="delete">
                                            <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></button>
                                        </form>
                                    </div>
                                <?php
                                }
                                ?>

                            <?php endforeach; ?>






                        </div>
                    </div>
                    <div>
                        <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
                            <div class="flex justify-between py-1 text-black dark:text-white">
                                <h3 class="text-sm font-semibold">Tasks in Done</h3>
                                <svg class="h-4 fill-current text-gray-600 dark:text-gray-500 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
                                </svg>
                            </div>

                            <?php foreach ($tasks as $task) : ?>
                                <?php
                                if (isset($task['task']) && $task['situation'] == 3) {
                                ?>

                                    <div class="w-full bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer"><?php echo $task['task']; ?>


                                        <form method="POST" class="mr-1" action="update">
                                            <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                                            <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></button>
                                        </form>
                                        <form method="POST" class="ms-1" action="delete">
                                            <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></button>
                                        </form>
                                    </div>
                                <?php
                                }
                                ?>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
                <!-- Task -->
                <!-- Contact-->
                <div class="mt-8 mx-4">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
                            <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight">Get in touch</h1>
                            <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">Fill in the form to submit any query</p>

                            <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <div class="ml-4 text-md tracking-wide font-semibold w-40">safi, Street, youcode, morocco</div>
                            </div>

                            <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <div class="ml-4 text-md tracking-wide font-semibold w-40">+212 634567890</div>
                            </div>

                            <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div class="ml-4 text-md tracking-wide font-semibold w-40">info@youcode.com</div>
                            </div>
                        </div>
                        <form class="p-6 flex flex-col justify-center">
                            <div class="flex flex-col">
                                <label for="name" class="hidden">Full Name</label>
                                <input type="name" name="name" id="name" placeholder="Full Name" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                            </div>

                            <div class="flex flex-col mt-2">
                                <label for="email" class="hidden">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                            </div>

                            <div class="flex flex-col mt-2">
                                <label for="tel" class="hidden">Number</label>
                                <input type="tel" name="tel" id="tel" placeholder="Telephone Number" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                            </div>

                            <button type="submit" class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- Contact -->


            </div>
        </div>
    </div>

    <script src="../../Hello/views/js/main.js"></script>
</body>

</html>