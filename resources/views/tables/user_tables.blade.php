<div class="table-wrapper"> 
    <div class="table-title">
        <h2>
            Users Table
        </h2>
    </div>   
    <table class="table">

        <tr>
            <th>User Name</th>
            <th>User Email</th>
            <th>Created At</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            <td>
                <a href="{{ route('delete_user', $user->id) }}">Delete</a>
            </td>
            <td>
                <a href="{{ route('edit_user_page', $user->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>