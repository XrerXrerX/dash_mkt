<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SumBioMingguan extends Model
{
    use HasFactory;
    protected $table = 'mingguan_rekap_bio';
    protected $guarded = ['id'];
}
