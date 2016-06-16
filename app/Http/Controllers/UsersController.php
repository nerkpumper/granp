<?php

namespace EGP\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use EGP\User;
use EGP\Http\Requests;
use EGP\Http\Requests\UserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(10);
        return view ('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new \EGP\User($request->all());
        $user->password = bcrypt($request->password);
        
        $user->save();    
        
        $request->session()->flash('message', 'store');

        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);        

        return view('admin.users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->username = $request->username;
        $user->fullname = $request->fullname;
        $user->save();

        Session::flash('update', 'El Usuario ha sido actualizado de manera correcta.');

        return redirect('admin/users');
    }

    public function confirmdestroy($id)
    {
        $user = User::find($id);        

        return view('admin.users.confirmdestroy')->with('user', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        Session::flash('delete', 'Usuario <strong>' . $user->nombre . '</strong> eliminado de manera correcta.');

        return redirect('admin/users');
    }
}
