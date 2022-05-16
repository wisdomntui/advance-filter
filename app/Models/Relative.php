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

    /**
     * Scope method for filtering based on attributes
     *
     * @param $query
     * @param array $filters
     */
    public function scopeFilter($query, $filters)
    {
        // Multidimensional array that holds the arrays of filtering conditions
        $conditions = [];
        foreach ($filters as $key => $value) {
            array_push($conditions, [$key, '=', $value]);
        }

        return $query->where($conditions);
    }
}
