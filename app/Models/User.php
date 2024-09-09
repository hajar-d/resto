<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'usertype',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

     public function isOnline()
    {
        $lastActivity = DB::table('sessions')
            ->where('user_id', $this->id)
            ->orderBy('last_activity', 'desc')
            ->value('last_activity');

        if ($lastActivity) {
            $lastActivityTime = Carbon::createFromTimestamp($lastActivity);
            return $lastActivityTime->diffInMinutes(now()) < 5; // Online if active within the last 5 minutes
        }

        return false;
    }

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
