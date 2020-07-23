<?php declare(strict_types=1);

/**
 * Class Calculation
 */
class Calculation
{
    /**
     * Adding some positive numbers
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function addNumbers(int $a, int $b)
    {
        if ($a < 0 || $b < 0) {
            throw new InvalidArgumentException();
        }

        return $a + $b;
    }
}