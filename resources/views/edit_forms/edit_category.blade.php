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
            action="{{ route('edit_category', $category->id) }}"
            method="POST"
            class="form"
        >
            @csrf
            <div class="title">
                <h1>Edit Category</h1>
            </div>
            <div class="input-block">
                <input type="text" placeholder="Username" name="name" value="{{ htmlspecialchars($category->name) }}">
            </div>
            <div class="input-block">
                <input type="text" placeholder="Description" name="description" value="{{ htmlspecialchars($category->description) }}">
            </div>
            <div class="submit-btn">
                <button type="submit">Update category</button>
            </div>
        </form>
    </main> {{-- main --}}

    @include('components.footer')

</body>
</html>