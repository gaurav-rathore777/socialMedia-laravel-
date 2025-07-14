{{-- <!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
</head>
<body>
    <h1>All Posts</h1> --}}
{{-- 
    <a href="{{ route('posts.create') }}">+ Add Post</a>
    <br><br> --}}

    {{-- <table border="1" cellpadding="10">
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Actions</th>
        </tr> --}}
        {{-- @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure?')" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach --}}

        {{-- @foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p> --}}
    
    {{-- @if($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" width="200">
    @endif --}}
{{-- @endforeach --}}

    {{-- </table> --}}


    {{-- @if(session('error'))
    <p style="color:red;">{{ session('error') }}</p>
@endif

<form method="POST" action="{{ url('login') }}">
    @csrf
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
</form>
</body>
</html> --}}

