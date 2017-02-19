<?php

require __DIR__ . '/Application/Autoload/Loader.php';
Application\Autoload\Loader::init(__DIR__ . '/');

// green test case
$test = new Application\Test\TestClass();
echo $test->getTest();

// fail
$test = new Application\Test\FakeTest();
echo $test->getTest();
