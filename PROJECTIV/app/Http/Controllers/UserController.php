<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    //
    public function index()
    {
        return Users::all();
    }
    public function get()
    {
        return Users::all();
    }
    public function show($id)
    {
        return Users::find($id);
    }
    public function destroy($id)
    {
        Users::destroy($id);
    }
    public function store(Request $request)
    {
        $db = new Users();
        $db->id = $request->id;
        $db->users_name    = $request->users_name;
        $db->full_name    = $request->full_name;
        $db->email    = $request->email;
        $db->password    = $request->password;
        $db->phone    = $request->phone;
        $db->address    = $request->address;
        $db->image    = $request->image;
        $db->Delet = $request->Delet;
        $db->updated_at    = $request->updated_at;
        $db->remember_token    = $request->remember_token;
        $db->created_at = $request->created_at;
        $db->save();
    }
    public function update(Request $request,$id)
    {
        $db =  Users::findOrFail($id);
        $db->id = $request->id;
        $db->users_name    = $request->users_name;
        $db->full_name    = $request->full_name;
        $db->email    = $request->email;
        $db->password    = $request->password;
        $db->phone    = $request->phone;
        $db->address    = $request->address;
        $db->image    = $request->image;
        $db->Delet = $request->Delet;
        $db->updated_at    = $request->updated_at;
        $db->remember_token    = $request->remember_token;
        $db->created_at = $request->created_at;
        $db->save();
    }
}
