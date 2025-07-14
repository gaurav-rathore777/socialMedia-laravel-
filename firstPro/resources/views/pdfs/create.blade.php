@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Upload PDF</h2>

    @if($errors->any())
        <ul style="color: red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('pdfs.store') }}" enctype="multipart/form-data">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required><br><br>

        <label>Select PDF:</label>
        <input type="file" name="pdf" accept="application/pdf" required><br><br>

        <button type="submit">Upload</button>
    </form>
</div>
@endsection
