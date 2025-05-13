<?php
declare(strict_types=1);

namespace Kuma\ExampleOfHumbleObject\DB;

use Kuma\ExampleOfHumbleObject\UserType;

class User
{
    public static function save(\Kuma\ExampleOfHumbleObject\User $param)
    {
    }

    public static function getByUserId(int $user_id)
    {
        return ['user_id' => $user_id, 'email_address' => 'contact@example.com', 'type' => UserType::Customer];
    }
}