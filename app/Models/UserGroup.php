<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{

    protected $primaryKey = ['group_id', 'user_id'];

    public $incrementing = false;

    protected $fillable
        = [
            'group_id',
            'user_id'
        ];

    public $timestamps = false;

    public function getName()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


//        /**
//        * Get the primary key value for a save query.
//        *
//        * @param mixed $keyName
//        * @return mixed
//        */
//    public function getKeyForSaveQuery($keyName = null)
//    {
//
//        if(is_null($keyName)){
//            $keyName = $this->getKeyName();
//        }
//
//        if (isset($this->original[$keyName])) {
//            return $this->original[$keyName];
//        }
//
//        return $this->getAttribute($keyName);
//    }
//

}
