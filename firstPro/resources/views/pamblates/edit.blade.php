@extends('layouts.app')

@section('content')
<h2>Edit Pamblate</h2>
<form action="{{ route('pamblates.update', $pamblate) }}" method="POST">
    @csrf @method('PUT')
    <input type="text" name="title" value="{{ $pamblate->title }}" required>
    <textarea name="content">{{ $pamblate->content }}</textarea>
    <input type="number" name="category_id" value="{{ $pamblate->category_id }}">
    <button type="submit">Update</button>
</form>
@endsection
