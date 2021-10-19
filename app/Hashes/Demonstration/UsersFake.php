<?php

namespace App\Hashes\Demonstration;

use RuntimeException;

/**
 * Class UsersFake
 * @package App\Hashes\Demonstration
 */
class UsersFake
{
    private const USERS = [
        'guest'  => 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'
    ];

    public function retrieve(string $login): string
    {
        if (empty(self::USERS[$login])) {
            throw new RuntimeException('User not found.');
        }

        return self::USERS[$login];
    }
}
