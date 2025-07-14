<!DOCTYPE html>
<html>
<head>
    <title>API Users Filter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h2>Filter API Users</h2>

    <form method="GET" action="{{ route('api.users') }}" class="row g-3 mb-4">
        <div class="col-md-4">
            <input type="text" name="name" class="form-control" placeholder="Filter by Name"
                   value="{{ $filters['name'] ?? '' }}">
        </div>
        <div class="col-md-4">
            <input type="text" name="email" class="form-control" placeholder="Filter by Email"
                   value="{{ $filters['email'] ?? '' }}">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary w-100">Apply Filters</button>
        </div>
    </form>

    <table class="table table-bordered">
        <thead><tr><th>Name</th><th>Email</th><th>Company</th></tr></thead>
        <tbody>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['company']['name'] ?? 'N/A' }}</td>
            </tr>
        @empty
            <tr><td colspan="3">No matching users found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
