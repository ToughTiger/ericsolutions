<?php
namespace App\Enums;
enum UserRoleEnum: string {

    case USER = "user";
    case ADMIN = "admin";
    case GUEST = "guest";
}
