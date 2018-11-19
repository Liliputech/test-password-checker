<?php

declare(strict_types=1);

namespace AppBundle\Service;

use AppBundle\PasswordChecker\MinSizeChecker;
use AppBundle\PasswordChecker\AsciiChecker;
use AppBundle\PasswordChecker\AnagramChecker;

class PasswordChecker
{
    /**
     * @var MinSizeChecker
     */
    private $minSizeChecker;
    private $asciiChecker;
    private $anagramChecker;

    public function __construct(MinSizeChecker $minSizeChecker, Asciichecker $asciiChecker, AnagramChecker $anagramChecker)
    {
        $this->minSizeChecker = $minSizeChecker;
	$this->asciiChecker = $asciiChecker;
	$this->anagramChecker = $anagramChecker;
    }

    /**
     * Check a password against all configured PasswordChecker classes
     *
     * @param string $password
     *
     * @return string|null an error message, or null if password is valid
     */
    public function check(string $password): ?string
    {
        if (false === $this->minSizeChecker->check($password)) {
            return $this->minSizeChecker->message();
        }
 
        if (false === $this->asciiChecker->check($password)) {
            return $this->asciiChecker->message();
        }

        if (false === $this->anagramChecker->check($password)) {
            return $this->anagramChecker->message();
        }

        return null;
    }
}
