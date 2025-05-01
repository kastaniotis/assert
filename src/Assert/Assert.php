<?php

namespace Iconic\Assert;

class Assert
{
    public static function that(bool $check, string $errorMessage): void
    {
        if (! $check) throw new AssertError($errorMessage);
    }
}
