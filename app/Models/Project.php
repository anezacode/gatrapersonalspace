<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Project extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'projects';
    protected $fillable = [
        'title',
        'content',
        'cover'
    ];

    protected $casts = [
        'id' => 'string',
    ];

    /**
     * Get the tags for the project.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'protags', 'project_id', 'tag_id');
    }

    /**
     * Get the protag relationships for the project.
     */
    public function protags()
    {
        return $this->hasMany(Protag::class);
    }
}
