<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    
</head>
<body>
    @section("header")
        <header class=" bg-gray-200 px-52 flex justify-between">
            <label>Task List</label>
            <div class=" flex ">
                <form action="/zeregina" class=" px-12">
                 @csrf
                    <input type="submit" value="Gehitu">
                </form>

                <form action="/zeregina/{id}">
                 @csrf
                 <input type="submit" value="Ezabatu">
             </form>
         </div>
        
        </header>
    @show

    @section("berria")
    
    @show
    <!-- <div class=" border-2 mt-14 w-1/3 m-auto">
        <form action="/zeregina" method="post">
            @csrf
            <p class=" bg-gray-200">New Task</p>
            <p class=" m-5">Task</p>
            <input type="text" class=" m-5 border-2">
            <br>
            <input type="submit" value="+Add Task" name="izena" class=" border-2 w-1/3 m-5">
        </form>
        
    </div>

    <div class=" border-2 mt-14 w-1/3 m-auto">
        @csrf
        <p class=" bg-gray-200">Current Task</p>
        <p class=" m-5">Task <input type="button" value="Ezabatu" class=" bg-red-800 rounded p-4 ml-32"></p>

    </div> -->
</body>
</html>