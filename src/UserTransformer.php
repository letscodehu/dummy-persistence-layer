<?php


class UserTransformer
{

    /**
     * Transforms a UserEntity to a User.
     * @param UserEntity $userEntity
     * @return User $user
     */
    public function transform(UserEntity $userEntity) {
        return new User();
    }

}