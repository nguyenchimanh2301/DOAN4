<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use \Datetime;
class CategoriesController extends Controller
{
    //
   public function index(){
    $data = Categories::all();
    return json_encode($data);
   }
   public function getall(){
       return Categories::all();
   }
   public function show($id){
    return Categories::find($id);
   }
   public function update(Request $request,$id){
     $db  = Categories::findOrFail($id);
     $db->tenloai = $request->tenloai;
     $db->save();
     return $db;
     
   }
   public function destroy($id){
       Categories::destroy($id);
   }
   public function store(Request $request){
       $db = new Categories();
       $db->tenloai = $request->tenloai;
       $db->created_at = new Datetime();
       $db->updated_at = new Datetime();
       $db->save();
       return $db;
   }
}
