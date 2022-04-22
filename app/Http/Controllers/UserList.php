<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserList extends Controller
{
    public function index()
    {
        return view('member_list', [
            'users' => User::all(),
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/admin/member_list')->with('status', 'Le client '.$user->name.' a été supprimé.');
    }


}
