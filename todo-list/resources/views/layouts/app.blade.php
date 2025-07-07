<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 min-h-screen">
    <nav class="bg-pink-400 text-white p-4 flex justify-between">
        <div class="font-bold">🌸 To-Do App</div>
        <div>
            <a href="{{ route('dashboard') }}" class="hover:underline">Dashboard</a>
            <a href="{{ route('tasks.index') }}" class="ml-4 hover:underline">To-Do List</a>
            <form method="POST" action="{{ route('logout') }}" class="inline ml-4">
                @csrf
                <button class="hover:underline">Logout</button>
            </form>
        </div>
    </nav>
    <main class="py-6">
        @yield('content')
    </main>
</body>
</html>
