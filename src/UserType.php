<?php
declare(strict_types=1);

namespace Kuma\ExampleOfHumbleObject;

enum UserType: int
{
    case Customer = 1;
    case Employee = 2;
}
