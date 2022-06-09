<?php

require_once __DIR__ . '/src/OperationInterface.php';
require_once __DIR__ . '/src/Calculator.php';
require_once __DIR__ . '/src/Add.php';
require_once __DIR__ . '/src/Substract.php';

echo (new Calculator(new Add(), new Substract))->run(
    'add', 1, 2
);
