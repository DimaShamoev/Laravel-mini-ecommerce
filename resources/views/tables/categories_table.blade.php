<div class="table-wrapper"> 
    <div class="table-title">
        <h2>
            Categories Table
        </h2>
    </div>   
    <table class="table">

        <tr>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Created At</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td>{{ $category->created_at }}</td>
            <td>
                <a href="{{ route('delete_category', $category->id) }}">Delete</a>
            </td>
            <td>
                <a href="{{ route('edit_category_page', $category->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>