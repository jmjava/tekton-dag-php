<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

use TektonDag\Baggage\BaggageMiddleware;

$middleware = BaggageMiddleware::fromEnv();
$middleware->handleFromGlobals();

header('Content-Type: text/plain');
echo "tekton-dag-php\n";
