<div class="table-wrapper"> 
    <div class="table-title">
        <h2>
            Products Table
        </h2>
    </div>   
    <table class="table">

        <tr>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Price</th>
            <th>Product Stock</th>
            <th>Created At</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->created_at }}</td>
            <td>Delete</td>
            <td>Edit</td>
        </tr>
        @endforeach
    </table>
</div>