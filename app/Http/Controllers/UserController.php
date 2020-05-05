<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers(){
        $users = DB::table('users')
                    ->paginate(15);

        return view('adminUsers', ['users' => $users]);
    }

    public function addNewUser(Request $request){

        DB::table('users')->insert([
            'name'      => $request->name,
            'email'     => $request->email,
            'is_male'   => $request->gender,
            'is_admin'  => $request->role,
            'password'  => bcrypt($request->password),
            'address'   => $request->address,
            'city_id'   => $request->city
        ]);

        return redirect('/admin/user/add');
    }

    public function deleteUser(){

    }

    public function editUser(){

    }

    public function getCity(){
        $cities = DB::table('postal_codes')
                ->get();        
        
        return view('adminUserAdd', ['cities'=>$cities]);
    }
}
