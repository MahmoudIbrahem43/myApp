<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{


    //retrieve Data
    public function index()
    {
        
        $roles = DB::table('users')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->select(DB::raw('count(`users`.`role_id`) as total ,`roles`.`name` , users.role_id'))
            ->groupBy('users.role_id', 'roles.name')->get();
        $allCount =  $roles->sum('total');

        $data = [
       
            'roles' => $roles,
            'allCount' => $allCount,
        ];
        if (request()->ajax()) {
            $roles = Role::all()->sortDesc();
          return datatables()->of($roles)->addIndexColumn()->make(true);
      }
     
       return view('roles.index', compact('data'));
  }


    //insert data
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'slug' => 'required',

        ]);

        //creation
        $role = Role::create($request->all());
        return redirect()->route('roles.index');
    }


    //calling the creat form only
    public function create()
    {     
         
        return view('roles.create');
    }

    //calling edit view only
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    //update
    public function update(Request $request, Role $role)
    {
        $request->validate(
            [
                'name' => 'required',
                'slug' => 'required',
            ]
        );

        $role->update($request->all());
        return redirect()->route('roles.index');
    }
    //delete
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index');
    }


    // public function allRoles(Role $roles){
    //     $roles=Role::all();
    //     return View::make("user/regprofile")->with(array('roles'=>$roles));
    // }
}
