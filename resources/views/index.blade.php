<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>

        {{-- flowbite CDN linki (tooltip için) --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

    </head>
    <body class="bg-slate-200">
        <h1 class="bg-slate-200 text-center text-3xl font-bold">Todo App</h1>

        <form action="/" method="POST">
            @csrf
            <div class="text-center my-5 p-5 w-11/12 md:w-1/2 mx-auto border-4 rounded-xl border-white">
                <input type="text" placeholder="Type your todo here" name="todo" class="block px-4 py-3 rounded-xl mx-auto w-full mb-2 focus:outline-solid focus:outline-2 focus:outline-sky-500">
                <input type="text" placeholder="Type your description here" name="description" class="block px-4 py-3 rounded-xl mx-auto w-full mb-2 focus:outline-solid focus:outline-2 focus:outline-sky-500">
                <button class=" text-white bg-green-500 px-4 py-3 font-bold rounded-xl hover:bg-transparent border-2 hover:border-green-500 hover:text-green-500 active:scale-95 translate:" type="submit">ADD</button>
            </div>
        </form>

        @foreach ($todos as $todo )
            
       
        <div class="flex bg-white my-5 p-5 w-11/12 md:w-1/2 mx-auto rounded-xl">
            <div class="mr-auto">
                <h2 
                @class([
                    'font-bold',
                    $todo->isDone ? 'line-through' : ''
                ])
                >{{$todo->todoItem}}</h2>
                <p 
                @class([
                    'text-gray-500',
                    $todo->isDone ? 'line-through' : ''
                ])
                >{{$todo->description}}</p>
            </div>
            <div class="flex items-center ">
                <form action="/switchDone/{{ $todo->id }}" method="post" class="mx-2 hover:scale-105">
                    @csrf
                    <x-isDoneBtn :status='$todo->isDone'/>                   
                </form> 
                
                <form action="/delete/{{$todo->id}}" method="post" class="mx-2 hover:scale-105">
                    @csrf
                    <button type="submit" class="px-3 py-2 rounded-xl text-white font-bold bg-red-500">
                        {{-- DELETE --}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                      </svg>
                      </button>
                </form>

                <a href="/edit/{{$todo->id}}" class="px-3 py-2 rounded-xl text-white font-bold bg-orange-400 mx-2 hover:scale-105">
                   {{-- EDIT --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                  </svg>
                  </a>
            </div>
        </div>
        @endforeach

   {{-- flowbite CDN linki (tooltip için) --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
</html>
s