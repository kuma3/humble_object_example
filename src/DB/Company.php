<?php
declare(strict_types=1);

namespace Kuma\ExampleOfHumbleObject\DB;

class Company
{
    public static function getCompany(): array
    {
        return ['company_domain' => 'example.com', 'number_of_employees' => 100];
    }

    public static function updateNumberOfEmployees(int $number_of_employees)
    {
        // Update query here
    }
}