# Diffie-Hellman PHP Example 

### Extra simple

Clean PHP can`t work with big numbers needed to work of DF. But for example we can calculate unsecured small keys.

##### RUN

```bash
php simpledf.php
```

### BC Math

For arbitrary precision mathematics PHP offers the Binary Calculator which supports numbers of any size and precision up to 2147483647 (or 0x7FFFFFFF) decimals, if there is sufficient memory, represented as strings.

##### Install
```bash
sudo apt-get install php-bcmath
```

##### RUN
```bash
php bsdf.php
```
##### OUT
```bash
Start
------------
Publicly Shared Variables: 
    Publicly Shared Prime: 11111111
    Publicly Shared Base:  222222
------------
Send over Public Chanel: 
    Alice Sends Over Public Chanel: 10142209
    Bob Sends Over Public Chanel: 4071793
------------
Privately Calculated Shared Secret: 
    Alice private key: 6217046
    Bob private key: 6217046

```