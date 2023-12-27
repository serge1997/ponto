<?php
    require_once __DIR__. '/../vendor/autoload.php';

    use App\Http\UserController;

    $user = new UserController();
    $user->storeUser();