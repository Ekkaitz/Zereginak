<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    
</head>
<body>
    <header class=" bg-gray-200 px-72">
        <label>Task List</label>
    </header>

    <div class=" border-2 mt-14 w-1/3 m-auto">
        @csrf
        <p class=" bg-gray-200">Current Task</p>
        <p class=" m-5">Task <input type="button" value="Ezabatu" class=" bg-red-800 rounded p-4 ml-32"></p>

    </div>
</body>
</html>