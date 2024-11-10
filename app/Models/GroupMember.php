<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model
{
    use HasFactory;

    protected $table = 'group_members';

    protected $fillable = [
        'group_id',
        'member_id',
        'role',
        'status',
        'joined_at',
    ];

    /**
     * Relationship to the Group model (many-to-one).
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    /**
     * Relationship to the Member model (many-to-one).
     */
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
