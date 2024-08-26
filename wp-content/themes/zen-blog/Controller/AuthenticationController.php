<?php
namespace Controller;
use Core\SuccessResponse;
class AuthenticationController {
    function login () {
        
        return new SuccessResponse(
            'Login Successful', null, 'Login Successful',
            
        );
    }
    function logout () {
        
    }
    function signup () {
        
    }
}