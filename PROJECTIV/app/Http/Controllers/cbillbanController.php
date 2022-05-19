<?php

namespace App\Http\Controllers;

use App\Models\cbillban;

use Illuminate\Http\Request;

class cbillbanController extends Controller
{
    // 
    public function index()
    {
        $data = cbillban::all();
        return json_encode($data);
    }
    public function Get()
    {
        return cbillban::all();
    }
    public function show($id)
    {
        return cbillban::find($id);
    }
    public function destroy($id)
    {
        cbillban::destroy($id);
    }
    public function update(Request $request, $id)
    {
        $db = cbillban::find($id);
        $db->id_bill_ban = $request->id_bill_ban;
        $db->id_sp = $request->id_sp;
        $db->sl = $request->sl;
        $db->created_at = $request->created_at;
        $db->updated_at = $request->updated_at;
        $db->save();
    }
    public function store(Request $request)
    {
        $db = new cbillban();
        $db->id_bill_ban = $request->id_bill_ban;
        $db->id_sp = $request->id_sp;
        $db->sl = $request->sl;
        $db->created_at = $request->created_at;
        $db->updated_at = $request->updated_at;
        $db->save();
    }
}
