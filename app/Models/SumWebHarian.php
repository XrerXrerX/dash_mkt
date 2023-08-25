<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SumWebHarian extends Model
{
    use HasFactory;
    protected $table = 'harian_rekap_web';
    protected $guarded = ['id'];
}
