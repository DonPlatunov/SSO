<?php

declare(strict_types=1);

namespace App\Enum;

enum UserType: string
{
    case ADMIN = 'admin';
    case USER = 'user';
    case ACCOUNTANT = 'accountant';
    case WAREHOUSEMAN = 'warehouseman';
}
