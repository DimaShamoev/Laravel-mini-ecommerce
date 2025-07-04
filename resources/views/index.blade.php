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
    <main class="main">
        @include('tables.user_tables')
        @include('tables.products_table')
        @include('tables.categories_table')
    </main> {{-- main --}}

    @include('components.footer')


</body>
</html>