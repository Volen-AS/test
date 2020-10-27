<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\GroupUpdateRequest;
use App\Models\Group;
use App\Models\UserGroup;
use App\Repositories\GroupRepositories;
use App\Repositories\UserRepositories;
use App\Http\Requests\GroupCreateRequest;
use App\Services\ModelServices\GroupServices;
use App\Services\ModelServices\UserGroupServices;
use Illuminate\Support\Facades\Auth;



class GroupController extends BaseController
{
    /**
     * @var GroupRepositories
     */
    private $groupRepositories;

    /**
     * @var UserRepositories
     */
    private $userRepositories;


    public function __construct()
    {
        parent::__construct();
        $this->groupRepositories = app(GroupRepositories::class);
        $this->userRepositories = app(UserRepositories::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $paginator = $this->groupRepositories->getAllWithPaginator();

        return view('user.group.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $users = $this->userRepositories->getAllWithPaginator();

       return view('user.group.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param GroupCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(GroupCreateRequest $request)
    {
        $service = app(GroupServices::class );

        $group = $service->create($request->input('name'));

        $newUserGroupServices = app(UserGroupServices::class );

        $newUserGroupServices->create($request->input('users'), $group->id);

        return redirect()->route('group.manage.index')
            ->with(['success' => 'you created group']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit($id)
    {
        $group = $this->groupRepositories->getGroup($id);
        if(empty($group)) {
            abort(404);
        }
        $users_in_group = $group->getUsers;
        $users = $this->userRepositories->getAllWithPaginator();

        return view('user.group.edit', compact('group', 'users', 'users_in_group'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param GroupUpdateRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(GroupUpdateRequest $request, $id)
    {
        $group = $this->groupRepositories->getGroup($id);
        if(empty($group)) {
            abort(404);
        }

        if( $group->group_name == $request->input('name')
            && $request->input('new_users') == null
            && $request->input('rv_users') ==null) {
            return redirect()->back();
        }

        if($group->group_name !== $request->input('name')) {
            $group->group_name =  $request->input('name');
            $group->save();
        }

        $newUserGroupServices = app(UserGroupServices::class );

        if($request->input('new_users')){
            $newUserGroupServices->create($request->input('new_users'), $id );

        }
        if($request->input('rv_users')){
            $newUserGroupServices->delete($request->input('rv_users'), $id);

        }
        return redirect()->route('group.manage.edit', $id)
            ->with(['success'=> 'your group was change']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $data = $this->groupRepositories->getGroup($id);
        if(empty($data)) {
            abort(404);
        }
        $name = $data->group_name;
        $data->delete();

        return redirect()->route('group.manage.index')
            ->with(['success'=> 'you delete group name=[{$name}]']);

    }
}
