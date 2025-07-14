@extends('layouts.app')

@section('content')
<h2>Create Pamblate</h2>
<form action="{{ route('pamblates.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="content" placeholder="Content"></textarea>
    <input type="number" name="category_id" placeholder="Category ID">
    <button type="submit">Save</button>
</form>
@endsection
