<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function server()
    {
        return $this->belongsTo(Server::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }

    public function domains()
    {
        return $this->hasMany(Domain::class);
    }

    public function backups()
    {
        return $this->hasMany(Backup::class);
    }

    public function crons()
    {
        return $this->hasMany(Cron::class);
    }

    public function databases()
    {
        return $this->hasMany(Database::class);
    }
}
