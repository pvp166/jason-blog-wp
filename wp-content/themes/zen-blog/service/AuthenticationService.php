<?php

namespace Service;

use Core\SuccessResponse;


function login($request)
{
    $parameters = $request->get_json_params();
    $username = $parameters['username'];
    $password = $parameters['password'];
    $remember_me = $parameters['remember'];
}
