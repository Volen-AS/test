<?php

namespace App\Services\ModelServices;

use App\Models\UserGroup;

Class UserGroupServices
{
    protected $model;

    public function __construct()
    {
        $this->model = app(UserGroup::class);
    }

    /**
     * @param string $usersList
     * @param int $groupId
     */
    public function create(string $usersList, int $groupId)
    {
        $arrayUsers = $this->makeArrayUsers($usersList);

        $this->saveUsersToGroup( $arrayUsers, $groupId );
    }

    /**
     * @param string $usersList
     * @param int $groupId
     */
    public function delete(string $usersList, int $groupId)
    {
        $arrayUsers = $this->makeArrayUsers($usersList);

        $this->deleteUsersFromGroup( $arrayUsers, $groupId );
    }

    /**
     * @param string $list
     * @return array
     */

    protected function makeArrayUsers( string $list )
    {
        return explode(',', $list );
    }

    /**
     * count users and send to delete
     */
    protected function deleteUsersFromGroup( $users, $id )
    {

        if( count($users) == 1){
            $this->deleteUser( $users[0], $id);

        } else {
            foreach( $users as $user ){
                $this->deleteUser( $user, $id);
            }
        }
    }

    /**
     * count users and send to save
     */
    protected function saveUsersToGroup( $users, $id )
    {
        if( count($users) == 1){
            $this->saveUser( $users[0], $id);

        } else {
            foreach( $users as $user ){
                $this->saveUser( $user, $id);
            }
        }
    }

    /**
     *add user in group UserGroup
     */
    protected function saveUser( $userId, $groupId )
    {
        UserGroup::create([
            'group_id' => $groupId,
            'user_id' => $userId
        ]);
    }
    /**
     *delete user from group UserGroup
     */
    protected function deleteUser( $userId, $groupId)
    {
        UserGroup::where( 'group_id', $groupId )
                ->where( 'user_id', $userId)
                ->delete();
    }
}
