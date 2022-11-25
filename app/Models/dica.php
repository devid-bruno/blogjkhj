<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dica extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'dica';
    protected $fillable = [
        'dica',
        'link'
    ];
}
