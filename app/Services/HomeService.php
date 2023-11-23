<?php

namespace App\Services;

use App\Repositories\UserRepository;

class HomeService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
}
