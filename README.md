# popen-shell
PHP popen webshell with base64 to bypass the server security and disabled functions

If all the command execution funtions disabled like **system()**, **passthru()** ..etc

Then this is the alternative, also if the website uses cloudflare or any other firewall, this will bypass it too, using the **base64**.


# Usage:
http://www.example.com/popen.php?cm={**base64 payload here**}

The base64 payload will be a regular unix command : **id, cd, cat...**

*http://www.example.com/popen.php?cm=ZGly*

*ZGly = dir*
