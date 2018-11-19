<?php

namespace AppBundle\PasswordChecker;

interface PasswordCheckerInterface {
	public function check(string $password) :bool;
	public function message() :string;
}
?>
