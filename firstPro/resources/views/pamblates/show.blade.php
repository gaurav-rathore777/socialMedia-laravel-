@extends('layouts.app')

@section('content')
<h2>{{ $pamblate->title }}</h2>
<p>{{ $pamblate->content }}</p>
<p>Category ID: {{ $pamblate->category_id }}</p>
<a href="{{ route('pamblates.index') }}">Back</a>
@endsection
