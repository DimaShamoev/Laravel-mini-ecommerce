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
        <div class="table-wrapper"> 
            <div class="table-title">
                <h2>
                    Orders Table
                </h2>
            </div>   
            <table class="table">

                <tr>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Delete</th>
                </tr>
                
                @foreach ($orders as $order)

                    <tr>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->total }}</td>
                        <td>
                            <a href="{{ route('delete_order', $order->id) }}">Delete</a>
                        </td>
                    </tr>
                
                @endforeach
                
            </table>
        </div>
    </main> {{-- main --}}

    @include('components.footer')


</body>
</html>