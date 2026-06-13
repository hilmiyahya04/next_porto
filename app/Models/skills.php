<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class skills extends Model
{
    protected $table = 'skills';
    protected $fillable = [
        'name',
        'level',
        'type'
    ];

    public function projects()
    {
        return $this->belongsToMany(projects::class, 'project_skill');
    }
}
