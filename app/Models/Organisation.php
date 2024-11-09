<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'organisation_name',
        'denomination_id',
        'location_id',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'postal_code',
        'latitude',
        'longitude',
        'contact_number',
        'email',
        'website',
        'service_times',
        'capacity',
        'founded_year',
        'status',
    ];

    // Example relationship to Denomination model
    public function denomination()
    {
        return $this->belongsTo(Denomination::class);
    }

    // Example relationship to Location model
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
