<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'demo_url',
        'github_url',
        'is_featured',
    ];

    public function skills()
    {
        return $this->belongsToMany(Skills::class, 'project_skill');
    }
}
