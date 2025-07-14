<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>PDF Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
        <a class="navbar-brand" href="{{ route('pdfs.index') }}">PDF Manager</a>
        <a class="nav-link" href="{{ route('pdfs.create') }}">Upload PDF</a>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
