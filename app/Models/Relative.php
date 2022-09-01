<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'age',
        'phone',
        'location',
        'employment_status',
    ];

    /**
     * Return the user that this relative belongs to
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
