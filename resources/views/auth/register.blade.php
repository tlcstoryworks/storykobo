<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Join storykōbō</title>
</head>
<body>
    <main>
        <h1>Join storykōbō</h1>
        <p>A workshop of worlds.</p>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ url('/register') }}">
            @csrf

            <label for="name">Display name</label>
            <input id="name" name="name" value="{{ old('name') }}" required>

            <label for="username">Username</label>
            <input id="username" name="username"
                   value="{{ old('username') }}" required
                   minlength="1" maxlength="30"
                   pattern="[A-Za-z0-9_]+"
                   autocomplete="username">
            <small>1–30 letters, numbers, or underscores.</small>

            <label for="email">Email address</label>
            <input id="email" name="email" type="email"
                   value="{{ old('email') }}" required
                   autocomplete="email">

            <label for="password">Password</label>
            <input id="password" name="password" type="password"
                   required autocomplete="new-password">

            <label for="password_confirmation">Confirm password</label>
            <input id="password_confirmation" name="password_confirmation"
                   type="password" required autocomplete="new-password">

            <button type="submit">Create account</button>
        </form>
    </main>
</body>
</html>
