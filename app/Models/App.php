<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class App extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'apps';

    protected $fillable = [
        'app_title', 
        'app_description',
        'app_favicon'
    ];

    protected $casts = [
        'app_title' => 'string',
        'app_favicon' => 'string'
    ];
}
