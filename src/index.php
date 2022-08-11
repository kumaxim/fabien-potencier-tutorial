<?php

require_once __DIR__ . '/init.php';

/**
 * PHPStorm highlight $response as undefined. This is fix.
 * @var \Symfony\Component\HttpFoundation\Request $request
 * @var Symfony\Component\HttpFoundation\Response $response
 */

$input = $request->get('name', 'World');

$response->setContent(sprintf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));
$response->send();
