<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'users';

    protected $fillable = [
<<<<<<< HEAD
        'name', 
        'email', 
        'password', 
        'role', 
        'no_hp', 
        'alamat',
=======
        'name', 'email', 'password', 'role', 'no_hp', 'alamat',
>>>>>>> a8f618b60c4e0af3f4ac198cd2f408b3cc755786
        'foto_profile'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function peminjaman(): HasMany {
        return $this->hasMany(Peminjaman::class);
    }

    public function logAktivitas () : HasMany {
        return $this->hasMany(logAktivitas::class);
    }
}
