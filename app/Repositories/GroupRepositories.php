<?php

namespace App\Repositories;

use App\Models\Group as Model;

class GroupRepositories extends CoreRepository
{
    /**
     *@return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAllWithPaginator()
    {

        $columns = [
            'id',
            'user_owner_id',
            'group_name'

        ];
        //dd($columns);
        $result = $this->startConditions()
            ->select($columns)
            ->orderBy('id', 'DESC')
            ->paginate(15);


        return $result;
    }

    public function getGroup($id)
    {
        return $this->startConditions()
            ->find($id);
    }
}
