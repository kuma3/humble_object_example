<?php
declare(strict_types=1);

namespace Kuma\ExampleOfHumbleObject\DB;

use Kuma\ExampleOfHumbleObject\UserType;

class User
{
    public static function save(\Kuma\ExampleOfHumbleObject\User $param)
    {
    }

    public static function getByUserId(int $user_id): \Kuma\ExampleOfHumbleObject\Entity\User
    {
        // 本当はクエリして取得する
        // $user_record = Sql::execute($user_id);

        // 合わせて$user_recordの内容のアサーションもすると良い

        return new \Kuma\ExampleOfHumbleObject\Entity\User(
            user_id: $user_id,
            email_address: 'contact@example.com',
            user_type: UserType::Customer
        );
    }
}