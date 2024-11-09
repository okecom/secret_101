<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_name',
        'organisation_id',
        'description',
        'leader',
        'meeting_schedule',
        'contact_email',
        'contact_phone',
        'status',
    ];

    // Define relationship with Organisation
    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }
}
