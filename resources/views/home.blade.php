@extends('layouts.app')

@section('title', 'User Management')

@section('content')

```
<div class="home-page">

    <section class="hero">
        <div class="hero-content">
            <span class="eyebrow">Laravel CRUD Application</span>

            <h1>User Management System</h1>

            <p>
                A complete user management application built with Laravel,
                Eloquent ORM, MySQL, Blade, and modern CRUD practices.
            </p>

            <div class="hero-actions">
                <a href="{{ route('users.index') }}" class="btn btn-primary">
                    View Users
                </a>

                <a href="{{ route('users.create') }}" class="btn btn-secondary">
                    + Add User
                </a>
            </div>
        </div>
    </section>

    <section class="info-section">
        <div class="section-heading">
            <h2>What can you do?</h2>
            <p>
                Use the application to manage user records from one place.
            </p>
        </div>

        <div class="feature-grid">

            <a href="{{ route('users.index') }}" class="feature-card">
                <div class="feature-icon">👥</div>
                <h3>View Users</h3>
                <p>
                    Browse all users, search by name or email, and view
                    individual user details.
                </p>
            </a>

            <a href="{{ route('users.create') }}" class="feature-card">
                <div class="feature-icon">＋</div>
                <h3>Create User</h3>
                <p>
                    Add a new user with validated name, email, and password
                    information.
                </p>
            </a>

            <div class="feature-card">
                <div class="feature-icon">✎</div>
                <h3>Update User</h3>
                <p>
                    Edit existing user information while keeping validation
                    and password handling secure.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">⌫</div>
                <h3>Delete User</h3>
                <p>
                    Remove users safely through a confirmation step before
                    permanently deleting their record.
                </p>
            </div>

        </div>
    </section>

    <section class="tech-section">
        <h2>Application Features</h2>

        <div class="tech-list">
            <span>Laravel</span>
            <span>Eloquent ORM</span>
            <span>MySQL</span>
            <span>Blade</span>
            <span>CRUD</span>
            <span>Validation</span>
            <span>Password Hashing</span>
            <span>Search</span>
        </div>
    </section>

</div>
```

@endsection
