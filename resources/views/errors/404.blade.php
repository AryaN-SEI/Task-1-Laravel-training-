@extends('layouts.app')

@section('title', 'Page Not Found')

@section('content')

```
<div class="error-page">

    <div class="error-code">404</div>

    <h1>Looks like you're lost.</h1>

    <p>
        The page you're looking for doesn't exist or the URL may be incorrect.
    </p>

    <div class="error-actions">

        <a href="{{ route('home') }}" class="btn btn-primary">
            Go Home
        </a>

        <a href="{{ route('users.index') }}" class="btn btn-secondary">
            View Users
        </a>

        <a href="{{ route('users.create') }}" class="btn btn-secondary">
            Add User
        </a>

    </div>

</div>
```

@endsection
