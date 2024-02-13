<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\{
    User,
    Role,
    Permission
};


Route::get('/', function () {

// $admin=User::whereName('Admin')->with('roles')->first();
// $admin_role=Role::wherename('admin')->first();
// $admin->roles()->attach($admin_role);
// if($admin->hasRole('admin')){
//     dd('yes this user has admin role');
// }
// dd($admin->toArray());

// $user=User::whereName('user')->with('roles')->first();
// $user_role=Role::wherename('user')->first();
// $user->roles()->attach($user_role);
// if($user->hasRole('admin')){
//     dd('yes this user has admin role');
// }
// dd($user->toArray());
// permission
// $add_user_permisson=Permission::where('name','add_user')->first();
// $admin_role=Role::wherename('admin')->with('permissions')->first();
// // $admin_role->permissions()->attach($add_user_permisson);
// dd($admin_role->permissions); // toArray()

// $user_role=Role::whereName('user')->with('permissions')->first();
// // $view_user_permisson=Permission::where('name','view_user')->first();
// // $user_role->permissions()->attach($view_user_permisson);
// dd($user_role->toArray());

// $users=User::with('roles')->get();
// $users=User::with('roles.permissions')->get();
$users=User::select('id','name','email')
    ->with(['roles:id,name','roles.permissions:id,name'])
    ->get();

dd($users->toArray());




    return view('welcome');
});
