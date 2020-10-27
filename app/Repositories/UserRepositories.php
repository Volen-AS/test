<?php

namespace App\Repositories;

use App\Models\User as Model;
use Illuminate\Support\Facades\Auth;

class UserRepositories extends CoreRepository
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
            'name',
        ];
        $result = $this->startConditions()
            ->whereNotIn('id', [Auth::id()])
            ->select($columns)
            ->paginate(15);
        return $result;
    }
}
