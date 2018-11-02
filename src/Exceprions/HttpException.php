<?php

namespace SON\Framework\Exceptions;

use Exception;

class HttpException extends Exception
{
    /**
     * HttpExceptions constructor.
     */
    public function __construct($message, $code, Exception $previous = null)
    {
        http_response_code($code);
        parent::__construct($message,$previous);
    }
}