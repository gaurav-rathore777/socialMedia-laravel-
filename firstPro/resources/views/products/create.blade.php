<h1>Add Product</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    Name: <input type="text" name="name"><br><br>
    Description:<br><textarea name="description"></textarea><br><br>
    Price: <input type="number" step="0.01" name="price"><br><br>
    Quantity: <input type="number" name="quantity"><br><br>

    <button type="submit">Add</button>
</form>
