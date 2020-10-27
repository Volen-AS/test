<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Group extends Model

{
    //use SoftDeletes;

    protected $fillable
        = [
            'user_owner_id',
            'group_name'
        ];

    public function getUsers()
    {
        return $this->hasMany(UserGroup::class);
    }
}
