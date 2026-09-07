@extends('layouts.app')

@section('title', 'Users')

@section('content')

    <div class="page-header">
        <div>
            <h1>Users</h1>
            <p class="subtitle">Manage all users in your application.</p>
        </div>

        <a href="{{ route('users.create') }}" class="btn btn-primary">
            + Add User
        </a>
    </div>


    <form action="{{ route('users.index') }}" method="GET" class="search-box">

        <input
            type="text"
            name="search"
            value="{{ $search }}"
            placeholder="Search by name or email..."
        >

        <button type="submit" class="btn btn-primary">
            Search
        </button>

        @if($search)
            <a href="{{ route('users.index') }}" class="btn btn-secondary">
                Clear
            </a>
        @endif

    </form>


    @if($users->count())

        <div class="users-grid">

            @foreach($users as $user)

                <div class="user-card">

                    <div class="card-top">

                        <div class="avatar">
                            {{ strtoupper(substr($user->name, 0, 1)) }}
                        </div>

                        <div class="user-main">
                            <h2>{{ $user->name }}</h2>
                            <p>{{ $user->email }}</p>
                        </div>

                    </div>


                    <div class="user-meta">

                        <span>
                            ID #{{ $user->id }}
                        </span>

                        <span>
                            {{ $user->created_at?->format('M d, Y') ?? 'Date unavailable' }}
                        </span>

                    </div>


                    <div class="card-actions">

                        <a
                            href="{{ route('users.show', $user) }}"
                            class="btn btn-secondary"
                        >
                            View
                        </a>

                        <a
                            href="{{ route('users.edit', $user) }}"
                            class="btn btn-primary"
                        >
                            Edit
                        </a>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="empty-state">

            <div class="empty-icon">
                👤
            </div>

            @if($search)

                <h2>No users found</h2>

                <p>
                    No users matched "{{ $search }}".
                </p>

                <a
                    href="{{ route('users.index') }}"
                    class="btn btn-secondary"
                >
                    Clear Search
                </a>

            @else

                <h2>No users yet</h2>

                <p>
                    Create your first user to get started.
                </p>

                <a
                    href="{{ route('users.create') }}"
                    class="btn btn-primary"
                >
                    + Create User
                </a>

            @endif

        </div>

    @endif


    <style>

        .subtitle {
            margin-top: 6px;
            color: #64748b;
        }

        .search-box {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
        }

        .search-box input {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #cbd5e1;
            border-radius: 9px;
            font-size: 14px;
            outline: none;
        }

        .search-box input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .users-grid {
            display: grid;
            grid-template-columns: repeat(
                auto-fit,
                minmax(300px, 1fr)
            );
            gap: 22px;
        }

        .user-card {
            background: white;
            border-radius: 18px;
            padding: 24px;
            box-shadow: 0 6px 25px rgba(15, 23, 42, 0.07);
            transition: 0.2s ease;
        }

        .user-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.12);
        }

        .card-top {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .avatar {
            width: 55px;
            height: 55px;
            flex-shrink: 0;
            border-radius: 50%;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
            font-weight: bold;
        }

        .user-main h2 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .user-main p {
            color: #64748b;
            font-size: 14px;
            word-break: break-word;
        }

        .user-meta {
            display: flex;
            justify-content: space-between;
            margin: 22px 0;
            padding: 12px 0;
            border-top: 1px solid #e2e8f0;
            border-bottom: 1px solid #e2e8f0;
            color: #64748b;
            font-size: 13px;
        }

        .card-actions {
            display: flex;
            gap: 10px;
        }

        .card-actions .btn {
            flex: 1;
            text-align: center;
        }

        .empty-state {
            background: white;
            border-radius: 18px;
            padding: 70px 20px;
            text-align: center;
            box-shadow: 0 6px 25px rgba(15, 23, 42, 0.06);
        }

        .empty-icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .empty-state h2 {
            margin-bottom: 8px;
        }

        .empty-state p {
            color: #64748b;
            margin-bottom: 22px;
        }

        @media (max-width: 600px) {

            .search-box {
                flex-direction: column;
            }

            .user-meta {
                flex-direction: column;
                gap: 6px;
            }

        }

    </style>

@endsection