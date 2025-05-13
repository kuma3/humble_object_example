<?php
declare(strict_types=1);

namespace Kuma\ExampleOfHumbleObject;

class UserController
{
    public function changeEmailAddress(int $user_id, string $new_email_address)
    {
        $user_entity = DB\User::getByUserId($user_id);
        $user = new User($user_entity->user_id,  $user_entity->email_address, $user_entity->user_type);

        $company_entity = DB\Company::getCompany();

        $new_number_of_employees = $user->changeEmailAddress(
            $new_email_address,
            $company_entity->company_domain,
            $company_entity->number_of_employees
        );

        DB\User::save($user);
        DB\Company::updateNumberOfEmployees($new_number_of_employees);
    }
}