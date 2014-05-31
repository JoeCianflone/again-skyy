<?php
namespace Cianflone\Again\Repositories;

interface UserRepository
{
    public function createNewUser($user);

    public function updateUser($user);

    public function findUserBy($method, $query);

    public function delete($userId);
}
