<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experiences extends Model
{
    use HasFactory;
    protected $table = 'experiences';
    protected $fillable = [
        'title',
        'company',
        'duration',
        'description',
        'icon',
    ];
}
