<?php

namespace App\Services\User;

use App\Constants\UserConstant;
use App\Exceptions\{AuthError, ValidationError};
use App\Repositories\{UserRepository, EnterpriseUserRepository, MdrtAddressHistoryRepository};
use App\Services\ServiceError;
use App\Services\ValidateAuth\PasswordService;
use App\Services\ValidateAuth\AuthenticationService;
use App\Repositories\PasswordResetRepository;
use Illuminate\Hashing\BcryptHasher;
use Log;
use App\Services\MailFlowService;
use App\Constants\MailRoleConstant;

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

    public function addUser($type, $name, $email, $plainTextPassword)
    {
        if (!in_array($type, UserConstant::TYPES)) {
            throw new ServiceError('type not allow');
        }
        $newUser = $this->userRepository->create(
            $type,
            $name,
            $email,
            $this->getHasher()->make($plainTextPassword)
        );

        return $newUser;
    }


    public function updateUser($name, $email, $user_id)
    {
        $this->userRepository->update($name, $email, $user_id);

        return true;
    }




}
