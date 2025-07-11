<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <p>Title: <input type="text" name="title" value="{{ $post->title }}" required></p>
        <p>Content: <textarea name="content" required>{{ $post->content }}</textarea></p>
        <button type="submit">Update</button>
    </form>

    <a href="{{ route('posts.index') }}">← Back</a>
</body>
</html>
