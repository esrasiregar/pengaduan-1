<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Masyarakat extends Authenticatable
{
    use HasFactory;
    
    use Notifiable;

    protected $table = 'masyarakats';

    protected $fillable = [
        'username',
        'password',
    ];

    protected $hidden = [
        'password'
    ];

    protected $primaryKey = 'nik';
}
