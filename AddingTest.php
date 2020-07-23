<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * Class AddingTest
 */
class AddingTest extends TestCase
{
    /**
     * @var Calculation
     */
    private $calculation;

    /**
     * This method is called before each test.
     */
    protected function setUp(): void
    {
        $this->calculation = new Calculation();
    }

    /**
     * This method is called after each test.
     */
    protected function tearDown(): void
    {
        $this->calculation = null;
    }

    /**
     * Providing data for edge cases
     *
     * @return array|int[][]
     */
    public function addDataProvider(): array
    {
        return [
            [1, 2, 3],
            [5, 6, 11]
        ];
    }

    /**
     * Testing with provider
     *
     * @dataProvider addDataProvider
     * @param int $a
     * @param int $b
     * @param int $result
     */
    public function testWithProvider(int $a, int $b, int $result): void
    {
        $this->assertEquals($result, $this->calculation->addNumbers($a, $b));
    }

    /**
     * Simple adding test
     */
    public function testAdding(): void
    {
        $this->assertEquals(7, $this->calculation->addNumbers(3, 4));
    }

    /**
     * Simple adding test exception
     */
    public function testAddingStrings(): void
    {
        $this->expectException(TypeError::class);

        $this->assertEquals(7, $this->calculation->addNumbers('alice', 'cat'));
    }

    /**
     * Checking arguments
     */
    public function testAddingNegatives(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->assertEquals(7, $this->calculation->addNumbers(-3, 4));
    }

}