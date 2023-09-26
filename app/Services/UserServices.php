<?php

namespace App\Services;

use App\Services\BaseServices;
use App\Models\User;

class UserServices extends BaseServices
{
    public function __construct() {
        parent::__construct(User::class);
    }
}
