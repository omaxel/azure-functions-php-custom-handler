<?php 

$requestUri = $_SERVER['REQUEST_URI'];
$handler = substr($requestUri, 1) . '/index.php';

if (file_exists($handler)) {
    require_once($handler);
    $response = run();  
} else {
    $response = ['error' => sprintf('The related PHP file was not found: %s', $handler)];
}

header("Content-type: application/json");
echo(json_encode(
    [
        'Outputs' => ['res' => ['body' => $response]]
    ]
));
