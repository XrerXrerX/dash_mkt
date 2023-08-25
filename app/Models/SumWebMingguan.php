<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SumWebMingguan extends Model
{
    use HasFactory;
    protected $table = 'mingguan_rekap_web';
    protected $guarded = ['id'];
}
