<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anh;
use \DateTime;
use Symfony\Component\Console\Input\Input;

class AnhController extends Controller
{
    //
    public function index(){
        $db = Anh::all();
        return json_encode($db);
    }
    public function get(){
      return view('testanh');
    }
    public function store(Request $request){
        $db = new Anh();
        
        // $file =$request->file('photo');
        // $ex = $file->getClientOriginalExtension();
        // $fn = time() .'.' . $ex;
        // $file ->move('public/sanpham/',$fn);
        // $db->anh = $fn;
       $db->anh = $request->anh;
       $db->created_at = new DateTime();
       $db->updated_at = new DateTime();

       $db->save();
    }
    public function destroy($id){
      anh::destroy($id);
    }
}
