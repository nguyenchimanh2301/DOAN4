<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cbillban extends Model
{
    use HasFactory;
    protected $table ='bill_detail_ban';
    protected $primaryKey ='id_bill_ban';

}
