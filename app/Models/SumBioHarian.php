<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SumBioHarian extends Model
{
    use HasFactory;
    protected $table = 'harian_rekap_bio';
    protected $guarded = ['id'];
}
