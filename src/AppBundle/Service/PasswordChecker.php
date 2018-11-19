<?php

declare(strict_types=1);

namespace AppBundle\Service;

class PasswordChecker
{
    /**
     * @var MinSizeChecker
     */
    private $factory;
    private $enabledChecker = ['minsize','ascii','anagram'];

    public function __construct(CheckerFactory $factory)
    {
	$this->factory = $factory;
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
	foreach ($this->enabledChecker as $checkClass) {
		$checker = $this->factory::create($checkClass);
		if (false === $checker->check($password)) {
            		return $checker->message();
        	}
	}
        return null;
    }
}
