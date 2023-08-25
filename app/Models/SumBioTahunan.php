<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SumBioTahunan extends Model
{
    use HasFactory;
    protected $table = 'tahunan_rekap_bio';
    protected $guarded = ['id'];
}
