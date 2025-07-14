{{-- <!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h1>Create New Post</h1> --}}

    {{-- <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <p>Title: <input type="text" name="title" required></p>
        <p>Content: <textarea name="content" required></textarea></p>
        <button type="submit">Save</button>
    </form> --}}

    {{-- <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data"> --}}
        {{-- @csrf
    
        <input type="text" name="title" placeholder="Title" required><br>
        <textarea name="content" placeholder="Content"></textarea><br>
    
        <input type="file" name="image"><br><br>
    
        <button type="submit">Save Post</button>
    </form>
    

    <a href="{{ route('posts.index') }}">← Back</a>
</body>
</html> --}}


<h1>Create Post</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    
    Title: <input type="text" name="title"><br><br>
    Content:<br><textarea name="content"></textarea><br><br>
    <button type="submit">Create</button>
</form>
