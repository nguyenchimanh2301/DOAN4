<?php

namespace App\Http\Controllers;

use App\Models\cbillnhap;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cbillnhapController extends Controller
{
    //
    public function index()
    {
        $data = cbillnhap::all();
        return json_encode($data);
    }
    public function Get()
    {
        return cbillnhap::all();
    }
    public function destroy($id)
    {
        cbillnhap::destroy($id);
    }
    public function store(Request $request)
    {
        $db = new cbillnhap();
        $db->id = $request->id;
        $db->id_bill_nhap = $request->id_bill_nhap;
        $db->id_sp = $request->id_sp;
        $db->sl = $request->sl;
        $db->don_vi = $request->don_vi;
        $db->created_at = $request->created_at;
        $db->updated_at = $request->updated_at;
        $db->save();
    }
    public function update(Request $request,$id)
    {
        $db = cbillnhap::findOrFail($id);
        
        $db->id_bill_nhap = $request->id_bill_nhap;
        $db->id_sp = $request->id_sp;
        $db->sl = $request->sl;
        $db->don_vi = $request->don_vi;
        $db->created_at = $request->created_at;
        $db->updated_at = $request->updated_at;
        $db->save();
    }
}
