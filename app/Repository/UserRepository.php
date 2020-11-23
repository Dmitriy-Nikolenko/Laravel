<?php


namespace App\Repository;


use App\Models\User;
use Laravel\Socialite\AbstractUser;

class UserRepository
{
    public function getUserBySocId(AbstractUser $user, string $socType)
    {
        $userInSystem = User::query()->where('id_in_soc', $user->id)->where('type_auth', $socType)->first();

        if(!$userInSystem)
        {
            $userInSystem = $this->createUserFromSoc($user, $socType);
        }
        return $userInSystem;
    }

    public function createUserFromSoc(AbstractUser $user, string $socType)
    {
       return User::query()->create([
           'name' => !empty($user->getName()) ? $user->getName() : '',
           'email' => !empty($user->getEmail()) ? $user->getEmail() : null,
           'password' => '',
           'id_in_soc' =>  !empty($user->getId()) ? $user->getId() : '',
           'type_auth' => $socType,
           'avatar' => !empty($user->getAvatar()) ? $user->getAvatar() : '',
        ]);
    }
}
