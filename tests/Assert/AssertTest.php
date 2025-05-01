<?php

namespace Iconic\Tests\Assert;

use Iconic\Assert\Assert;
use Iconic\Assert\AssertError;
use PHPUnit\Framework\TestCase;

class AssertTest extends TestCase
{
    public function testAssertTriggers()
    {
        $this->expectException(AssertError::class);
        $this->expectExceptionMessage('Error');

        Assert::that(3 < 2, 'Error');
    }

    public function testAssertDoesNotTrigger()
    {
        $this->expectNotToPerformAssertions();
        Assert::that(3 > 2, 'Error');
    }
}
