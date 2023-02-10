# signed-phar-example

```
$ phar info -f Message.php.phar
$ php test.php
This function is signed!
```
Modify Message.phar.php with any editor and try.
PHP shall refuse to process any Phar archive that has a broken signature
```
$ sed -i'.bak' 's/signed/chnged/' Message.php.phar
$ php test.php
.. broken openssl signature ..
.. PHP Fatal error: ..
```
