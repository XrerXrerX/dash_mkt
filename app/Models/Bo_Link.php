<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bo_Link extends Model
{
    use HasFactory;
    protected $table = 'bo_link';
    protected $guarded = ['id'];
}
