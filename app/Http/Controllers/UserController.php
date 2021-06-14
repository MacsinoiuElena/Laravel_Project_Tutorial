<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function uploadAvatar (\Illuminate\Http\Request $request): string{
        if ($request->hasFile('image')){
            User::uploadAvatar($request->image);
        }
        return redirect()->back();
    }

     public function index()
     {
//         $data = [
//             'name' => 'lili',
//             'email' => 'll@gmail.com',
//             'password' => 'pas'
//         ];

//         User::create($data);
//         $user = new User();
//         $user->name = 'Eli';
//         $user->email = 'El@gmail.com';
//         $user->password = bcrypt('pass');
//         $user->save();
//    User::where('id', 7)->update(['name' => 'name1']);
         $user = User::all();
         return $user;

//         User::where('id', 5)->delete();
//         DB::insert('insert into users (name,email,password) values(?,?,?)', ['Emilia', 'em@gmail.com', 'pas']);
//         DB::update('update users set name = ? where id = 1', ['bitfumes']);
//         DB::delete('delete  from users where id = 1');
//         $users = DB::select('select * from users');
//         return $users;
//         return view('home');
     }
}

