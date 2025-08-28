<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class About extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'abouts';

    protected $fillable = [
        'title',
        'description',
        'icon'
    ];

    protected $casts = [
        'title' => 'string',
        'icon' => 'string'
    ];
}
