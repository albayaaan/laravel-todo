<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- header --}}
    <div class="text-center mt-5">
        <h1 class="text-2xl font-medium title-font text-gray-900 uppercase">Todo List</h1>
    </div>

    {{-- Incomplete --}}
    <div class="mx-5 mt-5">
        <div class="flex justify-between align-items-center mb-3">
            <h2 class="text-2xl text-gray-900 font-medium title-font">Incomplete</h2>
            <button class="bg-violet-500 rounded-sm px-4 py-2 text-white font-semibold
            ">
                Add Task
            </button>
        </div>
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($tasks as $task)
                @if (!$task->status)
                    {{-- task item --}}
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs font-medium text-gray-400 mb-1">
                                deadline: {{ $task->deadline() }}
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $task->title }}</h1>
                            <p class="leading-relaxed mb-3">{{ $task->description }}
                            </p>
                            <div class="flex gap-2">
                                <a href="{{ route('changeStatus', $task) }}" class="bg-green-500 px-2 py-1 rounded-sm">
                                    mark as complete
                                </a>
                                <button class="bg-yellow-500 px-2 py-1 rounded-sm">
                                    edit
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Completed --}}
    <div class="mx-5 my-7">
        <h2 class="text-2xl text-gray-900 font-medium title-font mb-3">Completed</h2>
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">
            {{-- task item --}}
            @foreach ($tasks as $task)
                @if ($task->status)
                    {{-- task item --}}
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs font-medium text-gray-400 mb-1">
                                deadline: {{ $task->deadline() }}
                            </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $task->title }}</h1>
                            <p class="leading-relaxed mb-3">{{ $task->description }}
                            </p>
                            <div class="flex gap-2">
                                <a href="{{ route('changeStatus', $task) }}" class="bg-teal-500 px-2 py-1 rounded-sm">
                                    mark as incomplete
                                </a>
                                <button class="bg-red-500 px-2 py-1 rounded-sm">
                                    remove
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

</body>

</html>
