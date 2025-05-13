<?php
declare(strict_types=1);

namespace Kuma\ExampleOfHumbleObject;

use Kuma\ExampleOfHumbleObject\DB;

enum UserType: int
{
    case Customer = 1;
    case Employee = 2;
}

class User
{
    public function __construct(private readonly int $user_id, private string $email_address, private UserType $user_type)
    {
    }

    /**
     * ユーザーのEメールアドレスを変更する
     */
    public function changeEmailAddress(string $new_email_address, string $company_domain, int $number_of_employees): int
    {
        if ($this->email_address !== $new_email_address) {
            return $number_of_employees;
        }

        $new_email_domain = explode('@', $new_email_address)[1];

        $new_user_type = $company_domain === $new_email_domain ? UserType::Employee : UserType::Customer;

        $new_number_of_employees = $number_of_employees;
        if ($this->user_type !== $new_user_type) {
            $delta = $new_user_type === UserType::Customer ? -1 : 1;
            $new_number_of_employees = $number_of_employees + $delta;
        }

        $this->email_address = $new_email_address;
        $this->user_type = $new_user_type;

        return $new_number_of_employees;
    }
}
