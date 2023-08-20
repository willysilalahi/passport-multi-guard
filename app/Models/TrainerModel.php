<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;


class TrainerModel extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $table = 'trainers';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'description',
    ];
}
