@extends('layouts.app')

@section('content')
<div class="container">
    <h2>All PDFs</h2>
    <a href="{{ route('pdfs.create') }}">Upload New PDF</a>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($pdfs as $pdf)
            <li>
                {{ $pdf->title }}
                <a href="{{ route('pdfs.view', $pdf) }}" target="_blank">View</a> |
                <a href="{{ route('pdfs.download', $pdf) }}">Download</a> |
                <form action="{{ route('pdfs.destroy', $pdf) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
