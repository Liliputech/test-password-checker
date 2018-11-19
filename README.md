test-password-checker
=====================

Votre objectif est de créer une API pour vérifier la validité des mots de passe.

Les mots de passe doivent répondre à plusieurs critères (taille minimale, mélange de types, etc.) et nous voulons que chaque critère soit vérifié par une classe dédiée.

1. Ecrire une interface `AppBundle\PasswordChecker\PasswordCheckerInterface` qui permette d'implémenter d'autres classes comme `AppBundle\PasswordChecker\MinSizeChecker`.
1. Ecrire une classe `AppBundle\PasswordChecker\AsciiChecker` qui implémente `AppBundle\PasswordChecker\PasswordCheckerInterface` et qui vérifie que le mot de passe ne contient que des caractères ASCII.
1. Ecrire une classe `AppBundle\PasswordChecker\AnagramChecker` qui implémente `AppBundle\PasswordChecker\PasswordCheckerInterface` et qui vérifie que le mot de passe n'est pas un anagramme de "password".
1. Modifier `AppBundle\Service\PasswordChecker` pour qu'il utilise les 2 nouvelles classes.
1. On voudrait pouvoir étendre le système à un grand nombre de checkers et pouvoir activer/désactiver des checkers par configuration. Proposer une solution.
1. Quels composants standards de Symfony pourrait-on utiliser pour améliorer ou simplifier ce projet ? Vous pouvez utiliser ce README pour noter votre réponse.

On aurait pu utiliser le composant "Validator".
