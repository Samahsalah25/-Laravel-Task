<h1 style="color: blue; font-size: 24px;">Create New Product</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="name" style="font-weight: bold;">Name:</label>
    <input type="text" id="name" name="name">

    <label for="description" style="font-weight: bold;">Description:</label>
    <textarea id="description" name="description"></textarea>

    <label for="price" style="font-weight: bold;">Price:</label>
    <input type="number" id="price" name="price">

    <label for="quantity" style="font-weight: bold;">Quantity:</label>
    <input type="number" id="quantity" name="quantity">

    <button type="submit" style="background-color: green; color: white; padding: 5px 10px; border: none; cursor: pointer;">Create Product</button>
</form>
