<?php

namespace App\Application\Response\User;

use App\Domain\Entity\User;

class UserSingleResponse
{
    /**
     * @param User $user
     * @return array
     */
    public function prepareResponse(User $user): array
    {
        return [
            "user" =>
            [
                "id" => $user->id(),
                "name" => $user->name()
            ]
        ];

    }
}