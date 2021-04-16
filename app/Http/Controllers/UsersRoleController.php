<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersRoleController extends Controller
{



    public function getShowUsers()
    {
        return view('usersRole.index');
    }

    public function showUsers(int  $id)
    {
        $users = [];
        if ($id  == -1) {
            $users = User::all()->sortByDesc('id');
        } else {
            $users =  DB::table('users')->where('role_id', '=', $id)->get();
        }

        return datatables()->of($users)->addIndexColumn()->make(true);
    }
}
