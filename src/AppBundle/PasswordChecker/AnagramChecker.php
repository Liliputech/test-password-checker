<?php

declare(strict_types=1);

namespace AppBundle\PasswordChecker;

class AnagramChecker implements PasswordCheckerInterface
{
    public function check(string $password): bool
    {
        $pass = str_split(strtolower($password));
	$word = str_split('password');
	sort($pass);sort($word);
	return var_dump($pass == $word);
    }

    public function message(): string
    {
        return sprintf('Password is an anagram of "paswword"');
    }
}
