<?php

namespace Calendar\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class URLTrailingSlashController
{
    public function remove(Request $request): RedirectResponse
    {
        $pathInfo = $request->getPathInfo();
        $requestURI = $request->getRequestUri();

        $url = str_replace($pathInfo, rtrim($pathInfo, '/'), $requestURI);

        return new RedirectResponse($url, 308);
    }
}