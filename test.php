<?php
final class Circle
{
    /**
     * @var float
     */
    private $radius;
    
    public function __construct(float $radius)
    {
		$this->radius = $radius;
    }
    
    public function getCircumference(): float
    {
		return $this->radius * 2 * 3.1416;
    }
}
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{   
    public function testGetCircumference()
    {
        $circle = new Circle(2);
        $this->assertEquals(12.5664, $circle->getCircumference());
    }
}
?>