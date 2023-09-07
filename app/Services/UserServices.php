<?php

namespace App\Services;

use App\Services\BaseServices;
use App\Models\User;

class UserServices extends BaseServices
{
    public function __contruct() {
        parent::__contruct(User::class);
    }
}
