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

    public function insertUser(){
        DB::table('users')->insert([
            'name'      => $_REQUEST->name,
            'email'     => $_REQUEST->email,
            'is_male'   => $_REQUEST->is_male,
            'password'  => $_REQUEST->password,
            'address'   => $_REQUEST->address,
            'city_id'   => $_REQUEST->city
        ]);

        return redirect('/admin/users/add');
    }

    public function deleteUser(){

    }

    public function editUser(){

    }
}
