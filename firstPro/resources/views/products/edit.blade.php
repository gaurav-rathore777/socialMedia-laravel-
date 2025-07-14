<h1>Edit Product</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    Name: <input type="text" name="name" value="{{ $product->name }}"><br><br>
    Description:<br><textarea name="description">{{ $product->description }}</textarea><br><br>
    Price: <input type="number" step="0.01" name="price" value="{{ $product->price }}"><br><br>
    Quantity: <input type="number" name="quantity" value="{{ $product->quantity }}"><br><br>

    <button type="submit">Update</button>
</form>
