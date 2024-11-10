<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'phone',
        'address',
        'latitude',
        'longitude',
        'status',
    ];

    /**
     * Relationship to the User model (one-to-one).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
