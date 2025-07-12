<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa; /* light background */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 16px;
            margin-top: 30px;
            margin-bottom: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        h1 {
            color: #c2185b;
        }
        .btn-primary {
            background-color: #d81b60;
            border-color: #d81b60;
        }
        .btn-primary:hover {
            background-color: #c2185b;
            border-color: #c2185b;
        }
        .btn-warning {
            background-color: #ffb74d;
            border-color: #ffb74d;
        }
        .btn-danger {
            background-color: #e57373;
            border-color: #e57373;
        }
        .table-pink thead {
            background-color: #f8bbd0;
        }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar" style="background-color: #A8C3A0;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">Todo List</a>
        </div>
    </nav>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>