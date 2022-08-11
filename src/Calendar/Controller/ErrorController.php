<?php

namespace Calendar\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\ErrorHandler\Exception\FlattenException;

class ErrorController
{
    public function exception(FlattenException $exception): Response
    {
        $message = sprintf('Something went wrong! ( %s )', $exception->getMessage());

        return new Response($message, $exception->getStatusCode());
    }
}