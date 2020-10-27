<?php

namespace App\Repositories;

use App\Models\MsgTemplate as Model;
use Illuminate\Support\Facades\Auth;


class MsgRepositories extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAllUserMsgPaginator()
    {
        $columns = [
            'id',
            'user_id',
            'msg_text',
            'created_at'
        ];
        $result = $this->startConditions()
            ->where('user_id', Auth::id())
            ->select($columns)
            ->paginate(15);

        return $result;
    }


}
