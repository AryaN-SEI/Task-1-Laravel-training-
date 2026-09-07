```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 50px auto;
        }

        h1 {
            text-align: center;
            color: #1e293b;
            margin-bottom: 35px;
        }

        .users {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
        }

        .user-card {
            padding: 25px;
            border-radius: 18px;
            color: white;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
            transition: 0.3s;
        }

        .user-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.18);
        }

        /* Different colors for the cards */
        .user-card:nth-child(4n + 1) {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
        }

        .user-card:nth-child(4n + 2) {
            background: linear-gradient(135deg, #06b6d4, #3b82f6);
        }

        .user-card:nth-child(4n + 3) {
            background: linear-gradient(135deg, #f97316, #ef4444);
        }

        .user-card:nth-child(4n + 4) {
            background: linear-gradient(135deg, #10b981, #14b8a6);
        }

        .avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 18px;
            border: 2px solid rgba(255, 255, 255, 0.5);
        }

        .user-card h2 {
            margin: 0 0 15px;
            font-size: 22px;
        }

        .user-info {
            margin: 8px 0;
            padding: 8px 12px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.15);
        }

        .label {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Our Users</h1>

        <div class="users">

            @foreach ($users as $user)
                <div class="user-card">

                    <div class="avatar">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>

                    <h2>{{ $user->name }}</h2>

                    <p class="user-info">
                        <span class="label">ID:</span>
                        {{ $user->id }}
                    </p>

                    <p class="user-info">
                        <span class="label">Email:</span>
                        {{ $user->email }}
                    </p>

                </div>
            @endforeach

        </div>

    </div>

</body>
</html>
```
