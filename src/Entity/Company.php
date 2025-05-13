<?php
declare(strict_types=1);

namespace Kuma\ExampleOfHumbleObject\Entity;

class Company
{
    public function __construct(public string $company_domain, public int $number_of_employees) {}

    /**
     * 従業員数を変更する
     *
     * @param int $delta 変更差分
     */
    public function changeNumberOfEmployees(int $delta)
    {
        assert($this->number_of_employees + $delta > 0);

        $this->number_of_employees = $this->number_of_employees + $delta;
    }

    /**
     * 指定されたEメールアドレスが対象の会社のものかどうか
     *
     * @param string $email_address
     */
    public function isEmailCorporate(string $email_address): bool
    {
        $email_domain = explode('@', $email_address)[1] ?? '';
        return $email_domain === $this->company_domain;
    }
}