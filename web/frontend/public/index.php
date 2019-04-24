<?php
require(dirname(dirname(dirname(dirname(__FILE__)))).DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php');

$app = new SafeJo\Base\Application(dirname(__DIR__));

$app->bind(\SafeJo\Contracts\Kernel::class, \SafeJo\Base\Http\Kernel::class);

$kernel = $app->make(\SafeJo\Contracts\Kernel::class);

$response = $kernel->handle((new \SafeJo\Http\Request())->create());


//$response->render();

//$kernel->terminate();

