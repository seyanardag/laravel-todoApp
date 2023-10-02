<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- tailwind cdn linki --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-200">
    <h1 class="bg-slate-200 text-center text-3xl font-bold">Edit Todo</h1>
    
    <form action="/edited/{{$todo->id}}" method="POST">
        @csrf
        <div class="text-center my-5 p-5 w-11/12 md:w-1/2 mx-auto border-4 rounded-xl border-white">
            <input type="text" value={{$todo->todoItem}} placeholder="Type your todo here" name="todo" class="block px-4 py-3 rounded-xl mx-auto w-full mb-2 focus:outline-solid focus:outline-2 focus:outline-sky-500">
            <input type="text" value={{$todo->description}} placeholder="Type your description here" name="description" class="block px-4 py-3 rounded-xl mx-auto w-full mb-2 focus:outline-solid focus:outline-2 focus:outline-sky-500">
            <button class=" text-white bg-orange-400 px-4 py-3 font-bold rounded-xl hover:bg-transparent border-2 hover:border-orange-400 hover:text-orange-400 active:scale-95 translate:" type="submit">EDIT</button>
        </div>
    </form>

    
</body>
</html>