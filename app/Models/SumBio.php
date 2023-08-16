<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SumBio extends Model
{
    use HasFactory;
    protected $table = 'sum_bio';
    protected $guarded = ['id'];
    public $timestamps = false;
}
