Lithuanian name addresser
=========================

Changes any Lithuanian name to address form.

Example:

`Arnas to Arnai`

How to?
--------
```
$addresser = new LithuanianNameAddresser('Arnas');
echo $addresser->getResult();
```