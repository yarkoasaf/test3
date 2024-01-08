<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_type_in_cursos(): void
    {
        $this->assertSee(__('Username'));
    }
}
