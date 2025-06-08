<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Home Page</title>
</head>
<body>
    
    @include('components.header')

    {{-- main --}}
    <main class="main user-form">
        <form
            action="{{ route('edit_product', $product->id) }}"
            method="POST"
            class="form"
        >
            @csrf
            <div class="title">
                <h1>Edit Product</h1>
            </div>
            <div class="input-block">
                <input type="text" placeholder="Username" name="name" value="{{ htmlspecialchars($product->name) }}">
            </div>
            <div class="input-block">
                <input type="text" placeholder="Description" name="desc" value="{{ htmlspecialchars($product->description) }}">
            </div>
            <div class="input-block">
                <input type="number" placeholder="price" name="price" value="{{ htmlspecialchars($product->price) }}">
            </div>
            <div class="input-block">
                <input type="number" placeholder="stock" name="stock" value="{{ htmlspecialchars($product->stock) }}">
            </div>
            <div class="input-block">
                <input type="number" placeholder="category" name="category_id" value="{{ htmlspecialchars($product->category) }}">
            </div>
            <div class="submit-btn">
                <button type="submit">Update Product</button>
            </div>
        </form>
    </main> {{-- main --}}

    @include('components.footer')

</body>
</html>