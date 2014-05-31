<?php
namespace Cianflone\Again\Repositories\Eloquent;

use Auth;
use Cianflone\Again\Entities\User;
use Illuminate\Hashing\HasherInterface;
use Cianflone\Again\Repositories\UserRepository;

class EloquentUserRepository implements UserRepository
{
    protected $user;
    protected $hash;

    public function __construct(User $user, HasherInterface $hash)
    {
        $this->hash = $hash;
        $this->user = $user;
    }

    public function createNewUser($user)
    {

    }

    public function updateUser($user)
    {
    }

    public function findUserBy($method, $query)
    {

    }

    public function delete($userId)
    {
    }

    public function checkLoginCredentials($email, $password)
    {
        return Auth::attempt(["email" => $email, "password" => $password]);
    }
}
