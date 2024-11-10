<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'event_type_id',
        'name',
        'date',
        'time',
        'location',
        'description',
        'status',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function eventType()
    {
        return $this->belongsTo(EventType::class);
    }
}
