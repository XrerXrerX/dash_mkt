<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SumWeb extends Model
{
    use HasFactory;
    protected $table = 'sum_web';
    protected $guarded = ['id'];
}
