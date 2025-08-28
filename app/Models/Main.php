<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Main extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'mains';

    protected $fillable = [
        'name',
        'background',
        'url_github',
        'url_linkedin',
        'url_whatsapp'
    ];

    protected $casts = [
        'name' => 'string',
        'background' => 'string',
        'url_github' => 'string',
        'url_linkedin' => 'string',
        'url_whatsapp' => 'string'
    ];
}
