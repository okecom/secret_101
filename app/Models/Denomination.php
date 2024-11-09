<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denomination extends Model
{
    use HasFactory;

    protected $table = 'denominations';

    protected $primaryKey = 'denomination_id';

    protected $fillable = [
        'name',
        'description',
        'religionbase_id',
        'status',
    ];

    public function religionbase()
    {
        return $this->belongsTo(Religionbase::class, 'religionbase_id');
    }
}
