
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>@yield('title', 'User Management')</title>

</head>

<body>

    <nav class="navbar">

        <div class="brand">
            User Management
        </div>

        <div class="nav-links">
            <a href="{{ route('users.index') }}">
                Users
            </a>

            <a href="{{ route('users.create') }}">
                Add User
            </a>
        </div>

    </nav>

    <main class="container">

        @if(session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')

    </main>

</body>
</html>