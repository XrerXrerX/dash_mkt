<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SumWebTahunan extends Model
{
    use HasFactory;
    protected $table = 'Tahunan_rekap_web';
    protected $guarded = ['id'];
}
