<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protag extends Model
{
    use HasFactory;

    protected $table = 'protags';
    
    protected $fillable = [
        'project_id',
        'tag_id'
    ];

    protected $casts = [
        'project_id' => 'string',
        'tag_id' => 'integer',
    ];

    /**
     * Get the project that owns the protag.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Get the tag that owns the protag.
     */
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
