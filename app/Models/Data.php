<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'data';
    protected $fillable = [ 'namakapal','flag','gpt' ,'arrival','departure','location','activity','cargo','volume','lastport','nextport','status','image'];
}
