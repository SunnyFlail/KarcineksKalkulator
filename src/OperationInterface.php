<?php

interface OperationInterface
{
    /**
     * @throws InvalidArgumentException
     */
    public function do(int $a, int $b): int;
}
