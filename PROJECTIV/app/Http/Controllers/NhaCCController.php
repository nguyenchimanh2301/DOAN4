<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhaCC;

class NhaCCController extends Controller
{
    public function index()
    {
        $data = NhaCC::all();
        return json_encode($data);
    }
    public function getall()
    {
        return NhaCC::all();
    }
    public function destroy($id)
    {
        NhaCC::destroy($id);
    }
    public function show($id){
        return NhaCC::find($id);
    }
    public function store(Request $request)
    {
        $db = new NhaCC();
        $db->id = $request->id;
        $db->ten_ncc = $request->ten_ncc;
        $db->diachi_ncc = $request->diachi_ncc;
        $db->email = $request->email;
        $db->sdt = $request->sdt;
        $db->Delet = $request->Delet;
        $db->created_at = $request->created_at;
        $db->updated_at = $request->updated_at;
        $db->save();
    }
    public function update(Request $request,$id)
    {
        $db =  NhaCC::findOrFail($id);
        $db->id = $request->id;
        $db->ten_ncc = $request->ten_ncc;
        $db->diachi_ncc = $request->diachi_ncc;
        $db->email = $request->email;
        $db->sdt = $request->sdt;
        $db->Delet = $request->Delet;
        $db->created_at = $request->created_at;
        $db->updated_at = $request->updated_at;
        $db->save();
    }
}
