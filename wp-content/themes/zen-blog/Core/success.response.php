<?php
namespace Core;
class SuccessResponse
{
    function __construct(protected $message, protected $status_code = 200, protected $reason = 'Success', protected $metadata = array())
    {}
}
