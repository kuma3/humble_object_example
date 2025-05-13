<?php
declare(strict_types=1);

namespace Kuma\ExampleOfHumbleObject\Entity;

use Kuma\ExampleOfHumbleObject\UserType;

readonly class User
{
    public function __construct(public int $user_id, public string $email_address, public UserType $user_type){}
}