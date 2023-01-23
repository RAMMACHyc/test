<?php
if (isset($_POST['id'])) {
	$existtask = new TasksController();
	$task = $existtask->getOneTask();
}
if (isset($_POST['submit'])) {
	$existProduct = new TasksController();
	$existProduct->updateTask();
}
?>
<body>
  


<div class="flex justify-center">

<form method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="hidden" name="id" value="<?php echo $task->id; ?>">
						</div>  <!-- <input type="text" class="mt-3 focus:outline-none  text-gray-300 bg-gray-800 w-full   py-2 dark:text-gray-400" placeholder="Add a card..." id="inp"> -->
  <input type="text" name="task" value="<?php echo $task->task; ?>" class="mt-3 focus:outline-none  text-gray-300 bg-gray-800 w-full   py-2 dark:text-gray-400" placeholder="Add a card..." required>
  <div class="relative rounded-md shadow-sm">
  <select class="mt-3 focus:outline-none  text-gray-300 bg-gray-800 w-full py-2 dark:text-gray-400" name="situation">
    <option value="1" >TO DO</option>
    <option value="2" >DOING</option>
    <option value="3" >DONE</option>
  </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>
</div>

  <div class="flex justify-around">

    <button type="submit" name="submit" class="mt-3 flex justify-center focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Add Task</button>
  </div>
</form>
</div>
</body>