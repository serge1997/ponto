<?php
 namespace App\Http\Services\User;

class UserFormValidation
{

    public static function register_form($name, $email, $password)
    {
        $errors = [];
        if (empty($name)){
            $errors["name"] = "name is required";
        }

        if (empty($email)){
            $errors["email"] = "email is required";
        }

        if (empty($password)){
            $errors["password"] = "password is required";
        }

        return $errors;
    }
}