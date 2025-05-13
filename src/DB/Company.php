<?php
declare(strict_types=1);

namespace Kuma\ExampleOfHumbleObject\DB;

class Company
{
    public static function getCompany(): \Kuma\ExampleOfHumbleObject\Entity\Company
    {
        return new \Kuma\ExampleOfHumbleObject\Entity\Company(
            company_domain: 'example.com',
            number_of_employees: 100,
        );
    }

    /**
     * Entityを保存する
     *
     * @param \Kuma\ExampleOfHumbleObject\Entity\Company $company
     */
    public static function save(\Kuma\ExampleOfHumbleObject\Entity\Company $company): void
    {
        // Save query here
    }

    public static function updateNumberOfEmployees(int $number_of_employees)
    {
        // Update query here
    }
}