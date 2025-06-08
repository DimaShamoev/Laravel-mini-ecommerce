<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>Home Page</title>
</head>
<body>
    
    @include('components.header')

    {{-- main --}}
    <main class="main product-form">
        
        <form
            action="{{ route('create_product') }}"
            method="POST"
            class="form"
        >
            @csrf
            <div class="title">
                <h1>Create New User</h1>
            </div>
            <div class="input-block">
                <input type="text" placeholder="Product name" name="name">
            </div>
            <div class="input-block">
                <input type="text" placeholder="Description" name="desc">
            </div>
            <div class="input-block">
                <input type="number" placeholder="price" name="price">
            </div>
            <div class="input-block">
                <input type="number" placeholder="stock" name="stock">
            </div>
            <div class="input-block">
                <input type="number" placeholder="category" name="category_id">
            </div>
            <div class="submit-btn">
                <button type="submit">Create User</button>
            </div>
        </form>

    </main> {{-- main --}}

    @include('components.footer')


</body>
</html>