<h1 style="color: green; font-size: 24px;">All Products</h1>

<table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr>
            <th style="border: 1px solid black; padding: 8px;">Name</th>
            <th style="border: 1px solid black; padding: 8px;">Description</th>
            <th style="border: 1px solid black; padding: 8px;">Price</th>
            <th style="border: 1px solid black; padding: 8px;">Quantity</th>
            <th style="border: 1px solid black; padding: 8px;">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td style="border: 1px solid black; padding: 8px;">{{ $product->name }}</td>
                <td style="border: 1px solid black; padding: 8px;">{{ $product->description }}</td>
                <td style="border: 1px solid black; padding: 8px;">{{ $product->price }}</td>
                <td style="border: 1px solid black; padding: 8px;">{{ $product->quantity }}</td>
                <td style="border: 1px solid black; padding: 8px;">
                    <a href="{{ route('products.show', $product->id) }}" style="text-decoration: none; color: blue;">View</a>
                    <a href="{{ route('products.edit', $product->id) }}" style="text-decoration: none; color: blue; margin-left: 5px;">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block; margin-left: 5px;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color: red; color: white; border: none; padding: 5px 10px; cursor: pointer;">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
