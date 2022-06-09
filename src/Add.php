<?php

final class Add implements OperationInterface
{
    public function do(int $a, int $b): int
    {
        return $a + $b;
    }
}
