<?php

namespace App\Http\Controllers;

use App\Models\billban;
use Illuminate\Http\Request;
use \DateTime;
class billbanController extends Controller
{
    //
    public function index()
    {
        $data = billban::all();
        return json_encode($data);
    }
    public function Get()
    {
        return billban::all();
    }
    public function destroy($id)
    {
        billban::destroy($id);
    }
    public function show($id)
    {
        return billban::find($id);
    }
    public function update(Request $request, $id)
    {
        $db = billban::findOrFail($id);
        // $db->id = $request->id;
        $db->id_kh = $request->id_kh;
        $db->kh_name = $request->kh_name;
        $db->date_order = $request->date_order;
        $db->tong_tien = $request->tong_tien;
        $db->payment = $request->payment;
        $db->status = $request->status;
        $db->note = $request->note;      
        $db->created_at = new DateTime();
        $db->updated_at = new DateTime();
        // $db->created_at = $request->created_at;
        // $db->updated_at = $request->updated_at;
        $db->save();
    }
    public function store(request $request){
        $db = new billban();
        // $db->id = $request->id;
        $db->id_kh = $request->id_kh;
        $db->kh_name = $request->kh_name;
        $db->date_order = $request->date_order;
        $db->tong_tien = $request->tong_tien;
        $db->payment = $request->payment;
        $db->status = $request->status;
        $db->note = $request->note;
        $db->created_at = new DateTime();
        $db->updated_at = new DateTime();
        $db->save();
    }
}
