<h1 style="color: blue; font-size: 24px;">Edit Product</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $product->name }}" style="width: 100%; padding: 5px; margin-bottom: 10px;">

    <label for="description">Description:</label>
    <textarea id="description" name="description" style="width: 100%; padding: 5px; margin-bottom: 10px;">{{ $product->description }}</textarea>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" value="{{ $product->price }}" style="width: 100%; padding: 5px; margin-bottom: 10px;">

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" value="{{ $product->quantity }}" style="width: 100%; padding: 5px; margin-bottom: 10px;">

    <button type="submit" style="background-color: blue; color: white; padding: 10px 20px; border: none; cursor: pointer;">Update Product</button>
</form>
