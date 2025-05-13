<?php
declare(strict_types=1);

namespace Kuma\ExampleOfHumbleObject;

class UserController
{
    public function changeEmailAddress(int $user_id, string $new_email_address)
    {
        $user_record = DB\User::getByUserId($user_id);
        $user = new User($user_record['user_id'], $user_record['email_address'], $user_record['type']);

        $company_data = DB\Company::getCompany();

        $new_number_of_employees = $user->changeEmailAddress($new_email_address, $company_data['company_domain'], $company_data['number_of_employees']);

        DB\User::save($user);
        DB\Company::updateNumberOfEmployees($new_number_of_employees);
    }
}