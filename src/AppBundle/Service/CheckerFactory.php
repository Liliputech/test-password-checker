<?php

namespace AppBundle\Service;

use AppBundle\PasswordChecker\MinSizeChecker;
use AppBundle\PasswordChecker\AsciiChecker;
use AppBundle\PasswordChecker\AnagramChecker;

class CheckerFactory
{
    public static function create($checkerClass) {
	switch($checkerClass){
		case 'minsize':
			return new MinSizeChecker();
		case 'ascii':
			return new AsciiChecker();
		case 'anagram':
			return new AnagramChecker();
	}
    }
}
?>
