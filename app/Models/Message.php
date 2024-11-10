<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id', 
        'recipient_id', 
        'content', 
        'status'
    ];

    // Define the sender relationship
    public function sender()
    {
        return $this->belongsTo(Member::class, 'sender_id');
    }

    // Define the recipient relationship
    public function recipient()
    {
        return $this->belongsTo(Member::class, 'recipient_id');
    }
}
