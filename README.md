# signed-phar-example
Signed phar example
```
$ phar info -f Message.php.phar
$ php test.php
This function is signed!
```
Modify Message.phar.php with any editor and try:
```
$ sed -i'.bak' 's/signed/chnged/' Message.php.phar
$ php test.php
.. broken openssl signature ..
.. PHP Fatal error: ..
```
