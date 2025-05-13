<?php
declare(strict_types=1);

namespace Kuma\ExampleOfHumbleObject\Entity;

use Kuma\ExampleOfHumbleObject\UserType;

class User
{
    public function __construct(public int $user_id, public string $email_address, public UserType $user_type){}

    public function changeEmailAddress(string $new_email_address, Company $company): void
    {
        if ($this->email_address !== $new_email_address) {
            return;
        }

        $new_email_domain = explode('@', $new_email_address)[1];

        $new_user_type = $company->isEmailCorporate($new_email_domain) ? UserType::Employee : UserType::Customer;

        if ($this->user_type !== $new_user_type) {
            $delta = $new_user_type === UserType::Customer ? -1 : 1;
            $company->changeNumberOfEmployees($delta);
        }

        $this->email_address = $new_email_address;
        $this->user_type = $new_user_type;
    }
}