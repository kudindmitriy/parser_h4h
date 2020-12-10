<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Recipient extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'surname', 'phone', 'email'
    ];
}
