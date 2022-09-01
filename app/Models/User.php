<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Utils\FilterBuilder;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'age',
        'location',
        'relationship',
        'password',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Return the user's relative
     *
     */
    public function relatives()
    {
        return $this->hasMany(Relative::class);
    }

    /**
     * Scope method for filtering based on attributes
     *
     * @param $query
     * @param $filter
     */
    public function scopeFilter($query, $filters)
    {
        $filter = new FilterBuilder($query, $filters);
        return $filter->apply();
    }
}
