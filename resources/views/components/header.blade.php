{{-- header --}}
<header class="header">

{{-- logo --}}
<div class="logo bg-slate-900">
    My Store
</div> {{-- logo --}}

{{-- nav --}}
<div class="nav">
    <nav>
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('users') }}">Users</a></li>
            <li><a href="{{ route('products') }}">Products</a></li>
            <li><a href="{{ route('category') }}">Categories</a></li>
            <li><a href="{{ route('orders') }}">Orders</a></li>
        </ul>
    </nav>
</div> {{-- nav --}}

</header> {{-- header --}}