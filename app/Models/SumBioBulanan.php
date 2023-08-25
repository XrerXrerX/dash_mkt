<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SumBioBulanan extends Model
{
    use HasFactory;
    protected $table = 'bulanan_rekap_bio';
    protected $guarded = ['id'];
}
