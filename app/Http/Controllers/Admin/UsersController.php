<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.user.index')->with('user', User::all());
    }




    public function create()
    {
        return view('admin.user.create');
    }




    public function store(UserRequest $request)
    {
        if ($request->role === 'admin') {
            $user = User::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'group_by' => 1,
            ]);
        } else {
            $user = User::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }
        return redirect()->back()->with('success', 'user added successflly');
    }




    public function show($id)
    {
    }




    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit')->with('user', $user);
    }




    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|min:10',
            'email' => 'required|string|email|max:255',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        if ($request->role === 'admin') {
            $user->group_by = 1;
        } else {
            $user->group_by = 0;
        }
        $user->save();
        return Redirect()->back()->with('success', 'user updated successflly');
    }




    public function destroy($id)
    {
        $user = User::find($id)->get();
        $user->delete();
        return redirect()->back();
    }
}
