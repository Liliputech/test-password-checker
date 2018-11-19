<?php

declare(strict_types=1);

namespace AppBundle\PasswordChecker;

class AsciiChecker implements PasswordCheckerInterface
{
    public function check(string $password): bool
    {
        return mb_check_encoding($password,'ASCII');
    }

    public function message(): string
    {
        return sprintf('Password must contain only ASCII characters');
    }
}
