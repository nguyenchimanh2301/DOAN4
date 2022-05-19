<?php

namespace App\Http\Controllers;
use App\Models\Phanhoi;
use Illuminate\Http\Request;

class PhanhoiController extends Controller
{
    //
    public function index(){
        $dt = Phanhoi::all();
        return json_encode($dt);
    }
    public function Get(){
        return Phanhoi::all();
    }
}
