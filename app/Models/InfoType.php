<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'status'];

    public function infos()
    {
        return $this->hasMany(Info::class);
    }
}
