<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = ['group_id', 'info_type_id', 'title', 'content', 'status'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function infoType()
    {
        return $this->belongsTo(InfoType::class);
    }
}
