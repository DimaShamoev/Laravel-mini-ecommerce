<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {
    
    public function createUser(Request $request) {
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('/');
    }

    public function deleteUser($userId) {
        $user = User::find($userId);

        if ($user) $user->delete();

        return redirect('/');
    }

    public function showUserEditForm($userId) {
        $user = User::find($userId);
        return view('edit_forms.edit_user', compact('user'));
    }

    public function editUser(Request $request, $userId) {
        $user = User::find($userId);

        if ($user) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
        }

        return redirect('/');
    }


}
