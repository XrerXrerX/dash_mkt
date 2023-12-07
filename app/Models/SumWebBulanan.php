<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SumWebBulanan extends Model
{
    use HasFactory;
    protected $table = 'bulanan_rekap_web';
    protected $guarded = ['id'];
}
