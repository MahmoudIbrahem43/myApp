<?php
namespace App\Http\Controllers;


use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{

    // retrieve Data
    public function index()
    {
        $roles = DB::table('users')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->select(DB::raw('count(`users`.`role_id`) as total ,`roles`.`name` , users.role_id'))
            ->groupBy('users.role_id', 'roles.name')->get();

            
        $allCount =  $roles->sum('total');

        $data = [
          //  'users' => $users,
            'roles' => $roles,
            'allCount' => $allCount,
        ];
        // return $users = User::all();
        
        if (request()->ajax()) {
              $users = User::all()->sortDesc();
            return datatables()->of($users)->addIndexColumn()->make(true);
        }
       
         return view('users.index', compact('data'));
    }


    //insert data
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'user_name' => 'required|unique:users',
            'mobile' => 'required|numeric|unique:users',
            'date_of_birth' => 'required',
            'email' => 'required|unique:users',
            'gender' => 'required',
            'country' => 'required',
            'city' => 'required',
            'password' => 'required',
            'role_id' => 'required',
        ]);
        //creation
        $users = User::create($request->all());
        return redirect()->route('users.index');
    }


    //calling the creat form only
    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    //calling edit view only
    public function edit(User $user)
    {
 
       return view('users.edit', compact('user'));
    }

    //update
    public function update(Request $request, User $user)
    {

        $request->validate([
            'name' => 'required',
            'user_name' => 'required',
            'mobile' => 'required|numeric',
            'date_of_birth' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'city' => 'required',
            'password' => 'required',
            'role_id' => 'required',
        ]);

        $user->update($request->all());
        return redirect()->route('users.index');
    }
    //delete
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}
