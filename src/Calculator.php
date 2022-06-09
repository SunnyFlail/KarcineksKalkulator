<?php

final class Calculator
{
    /**
     * @var OperationInterface[] $operations;
     */
    private array $operations;

    public function __construct(
        OperationInterface $add,
        OperationInterface $substract
    )
    {
        $this->operations = [
            'add' => $add,
            'substract' => $substract
        ];
    }

    public function run(string $operation, int $a, int $b): int
    {
        if (!isset($this->operations[$operation])) {
            throw new InvalidArgumentException(sprintf(
                'Unknown operation "%s"',
                $operation
            ));
        }

        return $this->operations[$operation]->do($a, $b);
    }
}
