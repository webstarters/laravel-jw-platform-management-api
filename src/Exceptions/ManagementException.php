<?php

namespace Webstarters\Management\Exceptions;

use Exception;

class ManagementException extends Exception
{
    public static function error($response)
    {
        return new static(sprintf(
            '%s. Code: %s. Title: %s. Message: %s:',
            'Something went wrong with the request to the JW Platform Management API.',
            $response['code'],
            $response['title'],
            $response['message']
        ));
    }
}