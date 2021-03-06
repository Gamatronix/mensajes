<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mensaje extends Model
{
    protected $table = "mensaje";
    protected $fillable = [
        'nombre', 'empresa', 'telefono', 'correo', 'asunto', 'mensaje'
    ];

    public $timestamps = false;
}
