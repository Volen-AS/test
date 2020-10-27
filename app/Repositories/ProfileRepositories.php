<?php

namespace App\Repositories;


use App\Models\Profile as Model;

class ProfileRepositories extends CoreRepository
{
    /**
     *@return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getProfile($id)
    {

        return $this->startConditions()->where('user_id', $id)->first();
    }

}

