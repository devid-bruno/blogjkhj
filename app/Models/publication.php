<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class publication extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'publics';
    protected $fillable = [
        'titulo',
        'publicacao'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
