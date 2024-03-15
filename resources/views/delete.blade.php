<h1 style="color: red; font-size: 24px;">Confirm Deletion</h1>
<p style="font-weight: bold;">Are you sure you want to delete {{ $product->name }}?</p>

<form action="{{ route('products.destroy', $product->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" style="background-color: red; color: white; padding: 5px 10px; border: none; cursor: pointer;">Delete</button>
</form>
