<?php

namespace App\Services;
use App\Models\User;

class UserService
{

    public function getUser()
    {
        // dd("Hello World This is the UserService");
        return User::where('is_deactivate', 0)->get();
    }

    public function register(array $data)
    {
        // business logic here
    }

    public function getSingleUser(int $id)
    {
        // business logic here
        $user = User::where('id', $id)->where('is_deactivate', 0)->first();

        if (empty($user)) {
            return [
                'message' => 'User not found'
            ];
        }
        
        return $user;
    }
}