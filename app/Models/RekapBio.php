<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapBio extends Model
{
    use HasFactory;
    protected $table = 'rekap_bio';
    protected $guarded = ['id'];
}
