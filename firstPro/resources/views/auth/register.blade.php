<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>User Registration</h2>

    @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Full Name" required><br><br>
        {{-- <input type="email" name="email" placeholder="Email" required><br><br> --}}
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="/login">Login</a></p>
</body>
</html>
