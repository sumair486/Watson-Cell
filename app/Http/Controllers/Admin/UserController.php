<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user::latest()->get();
        return view('admin.user-management.users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required |min:6',
            //'password_confirmation' => 'confirmed',
           ]);

           if(request()->hasFile('image')){
               $name = request('image')->getClientOriginalName();
               $file = $request->image->move(public_path('users_pic'), $name);
               $data['image'] = $name;
           }

           $data['role'] =  $request->role;
           $data['password'] = bcrypt($request->password);

           User::create($data);
           return redirect()->route('users.index')->with('success','Data insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user-management.edit-user',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,email,'.$user->id,
           ]);

           if(request()->hasFile('image')){
            $name = request('image')->getClientOriginalName();
            $file = $request->image->move(public_path('users_pic'), $name);
            $data['image'] = $name;
        }

           $user->first_name = $request->first_name;
           $user->last_name = $request->last_name;
           $user->email = $request->email;
           $user->role = $request->role;
           $user->image = $data['image'] ?? '';

           $user->save();
           return redirect()->route('users.index')->with('success','Data updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','Data deleted Successfully');
    }
}
