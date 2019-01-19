Lithuanian name addresser
=========================

Changes any Lithuanian name to address form.

Example:

`Arnas to Arnai`

How to install?
--------
```
composer require prodigeris/lithuanian-name-addresser
```

How to use?
--------
```
$addresser = new LithuanianNameAddresser('Arnas');
echo $addresser->getResult();
```
