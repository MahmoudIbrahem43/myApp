<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    public function index()
    {

        $users = [];
         if (request()->ajax()) {
            $users =  DB::table('users')->where('role_id', '=', '4')->get();
             return datatables()->of($users)->addIndexColumn()->make(true);
         }
      

      return view('customer.index');
    }
}
