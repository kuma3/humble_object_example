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
    public function changeEmailAddress(string $new_email_address): void
    {
        if ($this->email_address !== $new_email_address) {
            return;
        }

        $company = DB\Company::getCompany();
        $new_email_domain = explode('@', $new_email_address)[1];

        $new_user_type = $company['company_domain'] === $new_email_domain ? UserType::Employee : UserType::Customer;

        if ($this->user_type !== $new_user_type) {
            // NOTE: こんなコード書いちゃだめだぞ！
            DB\Company::updateNumberOfEmployees($company['number_of_employees'] + 1);
        }

        $this->email_address = $new_email_address;
        $this->user_type = $new_user_type;

        DB\User::save($this);
    }
}
