<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Khachhang;
class KhachhangController extends Controller
{
    //
    public function index(){
        $dt = Khachhang::all();
        return json_encode($dt);
    }
    public function Get(){
        return Khachhang::all();
    }
    public function update(Request $request,$id){
       $db = Khachhang::find($id);
       $db->ten_kh = $request->ten_kh;
       $db->email = $request->email;
       $db->dia_chi = $request->dia_chi;
       $db->sdt = $request->sdt;
       $db->created_at = $request->created_at;
       $db->updated_at = $request->updated_at;
       $db->save();
    }
    public function show($id){
        return Khachhang::find($id);
    }
    public function destroy($id){
        $db = Khachhang::destroy($id);
    }
    public function store(Request $request){
        $db = new Khachhang();
        $db->id = $request->id;
        $db->ten_kh = $request->ten_kh;
        $db->email = $request->email;
        $db->dia_chi = $request->dia_chi;
        $db->sdt = $request->sdt;
        $db->created_at = $request->created_at;
        $db->updated_at = $request->updated_at;
        $db->save();
     }
}
