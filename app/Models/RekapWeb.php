<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapWeb extends Model
{
    use HasFactory;
    protected $table = 'rekap_web';
    protected $guarded = ['id'];
}
