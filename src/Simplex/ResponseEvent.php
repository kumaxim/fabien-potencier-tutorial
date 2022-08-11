<?php

namespace Simplex;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ResponseEvent
{
    private Request $request;
    private Response $response;

    public function __construct(Response $response, Request $request)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function getResponse(): Response
    {
        return $this->response;
    }

    public function getRequest(): Request
    {
        return $this->request;
    }
}