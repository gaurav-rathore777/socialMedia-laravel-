<h1>All Products</h1>
<a href="{{ route('products.create') }}">Add Product</a>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@foreach($products as $product)
    <h3>{{ $product->name }} (₹{{ $product->price }})</h3>
    <p>{{ $product->description }}</p>
    <p>Quantity: {{ $product->quantity }}</p>

    <a href="{{ route('products.edit', $product->id) }}">Edit</a>

    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
        @csrf @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <hr>
@endforeach
