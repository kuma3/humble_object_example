<?php
declare(strict_types=1);

namespace Kuma\ExampleOfHumbleObject\Entity;

readonly class Company
{
    public function __construct(public string $company_domain, public int $number_of_employees) {}
}