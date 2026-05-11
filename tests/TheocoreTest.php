<?php
/**
 * Tests for TheoCore
 */

use PHPUnit\Framework\TestCase;
use Theocore\Theocore;

class TheocoreTest extends TestCase {
    private Theocore $instance;

    protected function setUp(): void {
        $this->instance = new Theocore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Theocore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
