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
    <main class="main user-form">
        <form
            action="{{ route('create_category') }}"
            method="POST"
            class="form"
        >
            @csrf
            <div class="title">
                <h1>Create New Category</h1>
            </div>
            <div class="input-block">
                <input type="text" placeholder="Name" name="name">
            </div>
            <div class="input-block">
                <input type="text" placeholder="Description" name="description">
            </div>
            <div class="submit-btn">
                <button type="submit">Create User</button>
            </div>
        </form>
    </main> {{-- main --}}

    @include('components.footer')


</body>
</html>