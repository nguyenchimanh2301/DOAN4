<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use \DateTime;
class SanPhamController extends Controller
{
    //
    public function index()
    {
        $data = SanPham::all();
        return json_encode($data);
    }
    public function Get()
    {
        return SanPham::all();
    }
    public function edit($id)
    {
        //
    }
    public function show($id)
    {
        return SanPham::find($id);
    }
    public function detail($id)
    {
        $data = SanPham::find($id);
        return  View('Detail.Product_detail',['product'=>$data]);

    }
    public function Getid($id)
    {
        return SanPham::find($id);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $db = SanPham::findOrFail($id);

        $db->name = $request->name;
        $db->id_loai_sp = $request->id_loai_sp;
        $db->id_ncc = $request->id_ncc;
        $db->mota_sp = $request->mota_sp;
        $db->unit_price = $request->unit_price;
        $db->so_luong = $request->so_luong;
        $db->don_vi_tinh = $request->don_vi_tinh;
        $db->created_at = $request->created_at;
        $db->updated_at = $request->updated_at;
        $db->image = $request->image;
        
        $db->save();
        return $db;
        //
    }
    public function store(Request $request){
        $db =  new SanPham();
        $db->name = $request->name;
        $db->id_loai_sp = $request->id_loai_sp;
        $db->id_ncc = $request->id_ncc;
        $db->mota_sp = $request->mota_sp;
        $db->unit_price = $request->unit_price;
        $db->so_luong = $request->so_luong;
        $db->don_vi_tinh = $request->don_vi_tinh;
        $db->created_at = new DateTime();
        $db->updated_at = new DateTime();
        $db->image = $request->image;

        $db->save();
        return $db;
    }
    public function destroy($id)
    {
        $db = SanPham::destroy($id);
    }
}
