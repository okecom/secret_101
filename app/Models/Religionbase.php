<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Religionbase extends Model
{
    use HasFactory;

    // Specify the table name if it doesn’t follow Laravel’s pluralization conventions
    protected $table = 'religionbase';

    // Define the primary key if it’s not 'id'
    protected $primaryKey = 'religionbase_id';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'name',
        'description',
        'origin_region',
        'founding_period',
        'founder_name',
        'sacred_texts',
        'primary_celebrations',
        'followers_estimate',
        'official_website',
        'status',
    ];

    // Define the data type for the primary key
    //protected $keyType = 'int';

    // Specify that the primary key is not auto-incrementing, if required
    public $incrementing = true;
}
