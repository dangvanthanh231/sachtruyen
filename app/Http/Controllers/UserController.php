<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; // Import Session tại đây

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('roles', 'permissions')->orderby('id', 'DESC')->get();
        return view('admincp.user.index', compact('user'));
    }

    public function create()
    {
        return view('admincp.user.create');
    }

    public function impersonate($id)
{
    $user = User::find($id);
    if ($user) {
        session()->put('impersonate', $user->id);
    }
    return redirect('/home');
}


    public function store(Request $request)
    {
        $data = $request->all();
        $user = new User();
        $user->password = Hash::make($data['password']);
        $user->email = $data['email'];
        $user->name = $data['name'];
        $user->save();
        return redirect()->back()->with('status', 'Thêm user thành công');
    }

    public function phanvaitro($id)
    {
        $user = User::find($id);
        $role = Role::orderby('id', 'DESC')->get();
        $permission = Permission::orderBy('id', 'DESC')->get();
        $all_column_roles = $user->roles->first();
    
        return view('admincp.user.phanvaitro', compact('user', 'role', 'all_column_roles', 'permission'));
    }

    public function phanquyen($id)
    {
        $user = User::find($id);
        $permission = Permission::orderBy('id', 'DESC')->get();
        $name_roles = $user->roles->first()->name;
        $get_permission_via_role = $user->getPermissionsViaRoles();
        
        return view('admincp.user.phanquyen', compact('user', 'name_roles', 'permission', 'get_permission_via_role'));
    }

    public function insert_roles(Request $request, $id)
    {
        $data = $request->all();
        $user = User::find($id);
        $user->syncRoles($data['role']);
        return redirect()->back()->with('status', 'Thêm quyền cho user thành công');
    }

    public function insert_permission(Request $request, $id)
    {
        $data = $request->all();
        $user = User::find($id);
        $role_id = optional($user->roles->first())->id;
    
        if (!$role_id) {
            return redirect()->back()->withErrors(['error' => 'User không có vai trò hợp lệ']);
        }
    
        $role = Role::find($role_id);
        $permissions = Permission::whereIn('id', $data['permission'])->pluck('name')->toArray();
        $role->syncPermissions($permissions);

        return redirect()->back()->with('status', 'Thêm vai trò cho user thành công');
    }

    public function insert_per_permission(Request $request)
    {
        $data = $request->all();
        $permission = new Permission();
        $permission->name = $data['permission'];
        $permission->save();
        return redirect()->back()->with('status', 'Thêm quyền thành công');
    }
}
