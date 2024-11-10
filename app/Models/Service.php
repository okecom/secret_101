<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'service_type_id',
        'name',
        'schedule',
        'description',
        'status',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class);
    }
}
