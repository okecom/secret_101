<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'media_type_id',
        'title',
        'url',
        'description',
        'status',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function mediaType()
    {
        return $this->belongsTo(MediaType::class);
    }
}
