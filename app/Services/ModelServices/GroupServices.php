<?php

namespace App\Services\ModelServices;

use App\Models\Group;
use Illuminate\Support\Facades\Auth;

Class GroupServices
{
    protected $model;


    public function __construct()
    {
        $this->model = app(Group::class);
    }

    public function create( string $name )
    {
        $newGroup = Group::create([
            'user_owner_id' => Auth::id(),
            'group_name' => $name,
        ]);

        return $newGroup;
    }
}
