@extends('layouts.app')

@section('content')
    <h2>Pamblates List</h2>

    {{-- Search Form --}}
    <form action="{{ route('pamblates.index') }}" method="GET">
        <input type="text" name="search" placeholder="Search title or content" value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

    <a href="{{ route('pamblates.create') }}">Create New Pamblate</a>

    @if ($pamblates->count())
        <ul>
            @foreach ($pamblates as $pamblate)
                <li>
                    <strong>{{ $pamblate->title }}</strong>
                    <p>{{ Str::limit($pamblate->content, 100) }}</p>
                    <a href="{{ route('pamblates.edit', $pamblate->id) }}">Edit</a> |
                    <form action="{{ route('pamblates.destroy', $pamblate->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>

        {{-- Pagination links --}}
        {{ $pamblates->appends(['search' => request('search')])->links() }}
    @else
        <p>No pamblates found.</p>
    @endif
@endsection
