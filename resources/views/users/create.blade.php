@extends('layouts.app')

@section('title', 'Create User')

@section('content')

<div class="form-page">

    <div class="form-header">
        <a href="{{ route('users.index') }}" class="back-link">
            ← Back to Users
        </a>

        <h1>Create User</h1>

        <p>
            Add a new user to your application.
        </p>
    </div>


    <div class="form-card">

       <form id="user-form" action="{{ route('users.store') }}" method="POST">
            @csrf

            {{-- Name --}}
            <div class="form-group">

                <label for="name">
                    Full Name
                </label>

                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Enter user's full name"
                    maxlength="255"
                    required
                    class="@error('name') input-error @enderror">

                @error('name')
                <p class="error">
                    {{ $message }}
                </p>
                @enderror

            </div>


            {{-- Email --}}
            <div class="form-group">

                <label for="email">
                    Email Address
                </label>

                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="user@example.com"
                    required
                    class="@error('email') input-error @enderror">
                @error('email')
                <p class="error">
                    {{ $message }}
                </p>
                @enderror

            </div>


            {{-- Password --}}
            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <div class="password-wrapper">

                    <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Create a secure password"
                        minlength="8"
                        required
                        class="@error('password') input-error @enderror">

                    <button
                        type="button"
                        class="password-toggle"
                        onclick="togglePassword()">
                        Show
                    </button>

                </div>

                <p class="field-help">
                    Password must be at least 8 characters.
                </p>

                @error('password')
                <p class="error">
                    {{ $message }}
                </p>
                @enderror

            </div>


            {{-- Actions --}}
            <div class="form-actions">

                <a
                    href="{{ route('users.index') }}"
                    class="btn btn-secondary">
                    Cancel
                </a>

                <button
                    type="submit"
                    class="btn btn-primary">
                    Create User
                </button>

            </div>

        </form>

    </div>

</div>


<style>
    .form-page {
        max-width: 650px;
        margin: 0 auto;
    }

    .form-header {
        margin-bottom: 25px;
    }

    .back-link {
        display: inline-block;
        color: #64748b;
        text-decoration: none;
        font-size: 14px;
        margin-bottom: 18px;
    }

    .back-link:hover {
        color: #2563eb;
    }

    .form-header h1 {
        font-size: 32px;
        margin-bottom: 7px;
    }

    .form-header p {
        color: #64748b;
    }

    .form-card {
        background: white;
        padding: 35px;
        border-radius: 18px;
        box-shadow: 0 8px 30px rgba(15, 23, 42, 0.08);
    }

    .form-group {
        margin-bottom: 23px;
    }

    .form-group label {
        display: block;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 8px;
        color: #334155;
    }

    .form-group input {
        width: 100%;
        padding: 13px 15px;
        border: 1px solid #cbd5e1;
        border-radius: 9px;
        font-size: 14px;
        outline: none;
        transition: 0.2s;
    }

    .form-group input:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .form-group input::placeholder {
        color: #94a3b8;
    }

    .input-error {
        border-color: #dc2626 !important;
    }

    .error {
        color: #dc2626;
        font-size: 13px;
        margin-top: 6px;
    }

    .field-help {
        color: #94a3b8;
        font-size: 12px;
        margin-top: 6px;
    }

    .password-wrapper {
        position: relative;
    }

    .password-wrapper input {
        padding-right: 70px;
    }

    .password-toggle {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        border: none;
        background: transparent;
        color: #2563eb;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        padding-top: 10px;
        border-top: 1px solid #e2e8f0;
    }

    @media (max-width: 600px) {

        .form-card {
            padding: 25px;
        }

        .form-actions {
            flex-direction: column-reverse;
        }

        .form-actions .btn {
            width: 100%;
            text-align: center;
        }

    }
</style>


<script>
    function togglePassword() {

        const password = document.getElementById('password');
        const button = document.querySelector('.password-toggle');

        if (password.type === 'password') {
            password.type = 'text';
            button.textContent = 'Hide';
        } else {
            password.type = 'password';
            button.textContent = 'Show';
        }

    }
</script>

@endsection