<?php

namespace App\Services\User;

class UserService
{
    protected $userRepository;
    protected $authenticationService;

    public function __construct(
        AuthenticationService $authenticationService
    ) {
        $this->userRepository = $userRepository;
        $this->authenticationService = $authenticationService;
    }

}
