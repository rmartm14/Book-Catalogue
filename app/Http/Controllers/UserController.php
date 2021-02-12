<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User as User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new User;
        $user->create($request->all());
        return redirect('user');
    
    }

    public function index(){
        $user = User::all(); 
        return view('users', [
            'user' => $user
        ]);
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect('users');

        
    }
}
