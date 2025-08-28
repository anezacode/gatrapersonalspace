<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tag extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'tags';
    protected $fillable = [
        'name',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get the projects for the tag.
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'protags', 'tag_id', 'project_id');
    }

    /**
     * Get the protag relationships for the tag.
     */
    public function protags()
    {
        return $this->hasMany(Protag::class);
    }

    /**
     * Scope a query to only include active tags.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
