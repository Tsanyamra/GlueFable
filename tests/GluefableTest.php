<?php
/**
 * Tests for GlueFable
 */

use PHPUnit\Framework\TestCase;
use Gluefable\Gluefable;

class GluefableTest extends TestCase {
    private Gluefable $instance;

    protected function setUp(): void {
        $this->instance = new Gluefable(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Gluefable::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
