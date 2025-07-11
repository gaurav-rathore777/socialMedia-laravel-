<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h1>Create New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <p>Title: <input type="text" name="title" required></p>
        <p>Content: <textarea name="content" required></textarea></p>
        <button type="submit">Save</button>
    </form>

    <a href="{{ route('posts.index') }}">← Back</a>
</body>
</html>
