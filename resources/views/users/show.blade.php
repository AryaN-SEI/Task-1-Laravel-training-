@extends('layouts.app')

@section('title', $user->name . ' - User Details')

@section('content')

<div class="page-header">
    <div>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">
            ← Back to Users
        </a>
    </div>

    <div>
        <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">
            Edit User
        </a>
    </div>
</div>


<div class="user-profile">

    <div class="profile-header">

        <div class="avatar">
            {{ strtoupper(substr($user->name, 0, 1)) }}
        </div>

        <div>
            <h1>{{ $user->name }}</h1>
            <p>{{ $user->email }}</p>
        </div>

    </div>


    <div class="user-info">

        <div class="info-item">
            <span class="label">User ID</span>
            <strong>#{{ $user->id }}</strong>
        </div>

        <div class="info-item">
            <span class="label">Email</span>
            <strong>{{ $user->email }}</strong>
        </div>

        <div class="info-item">
            <span class="label">Created</span>
            <strong>
                {{ $user->created_at?->format('M d, Y') ?? 'Not available' }}
            </strong>
        </div>

        <div class="info-item">
            <span class="label">Last Updated</span>
            <strong>
                {{ $user->updated_at?->format('M d, Y') ?? 'Not available' }}
            </strong>
        </div>

    </div>


    <div class="danger-zone">
        <div>
            <h3>Delete this user</h3>
            <p>Once deleted, this user cannot be recovered.</p>
        </div>

        <button
            type="button"
            class="btn btn-danger"
            onclick="openDeleteModal()">
            Delete User
        </button>
    </div>

    <div id="delete-modal" class="modal-overlay">
        <div class="modal">
            <div class="modal-icon">!</div>

            <h2>Delete User?</h2>

            <p>
                Are you sure you want to delete
                <strong>{{ $user->name }}</strong>?
                This action cannot be undone.
            </p>

            <div class="modal-actions">
                <button
                    type="button"
                    class="btn btn-secondary"
                    onclick="closeDeleteModal()">
                    Cancel
                </button>

                <form
                    action="{{ route('users.destroy', $user) }}"
                    method="POST">
                    >
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        Delete User
                    </button>
                </form>
            </div>
        </div>
    </div>


    <style>
        .user-profile {
            background: white;
            border-radius: 18px;
            padding: 35px;
            box-shadow: 0 8px 30px rgba(15, 23, 42, 0.08);
        }

        .profile-header {
            display: flex;
            align-items: center;
            gap: 22px;
            padding-bottom: 30px;
            border-bottom: 1px solid #e2e8f0;
        }

        .profile-header h1 {
            font-size: 30px;
            margin-bottom: 6px;
        }

        .profile-header p {
            color: #64748b;
        }

        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            font-weight: bold;
        }

        .user-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            padding: 30px 0;
        }

        .info-item {
            background: #f8fafc;
            padding: 18px;
            border-radius: 12px;
        }

        .label {
            display: block;
            color: #64748b;
            font-size: 13px;
            margin-bottom: 7px;
        }

        .danger-zone {
            border-top: 1px solid #fee2e2;
            padding-top: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .danger-zone h3 {
            color: #991b1b;
            margin-bottom: 5px;
        }

        .danger-zone p {
            color: #64748b;
            font-size: 14px;
        }

        @media (max-width: 700px) {

            .user-info {
                grid-template-columns: 1fr;
            }

            .danger-zone {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }

            .profile-header {
                align-items: flex-start;
            }

        }
    </style>

    @endsection