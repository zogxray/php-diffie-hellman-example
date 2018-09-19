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

### OpenSSL

##### RUN
```bash
php openssldh.php

##### OUT
```bash
A public key
7b7bbb0863b7165cbd0fb9ccf72effecc3ef579fde3bc689d030b43df66c4266d228806f6419a76e151594c99523665d61f5ebc52969fefcdc130ce2c8c732e93c67c82d5d6382c2009c50b2599c49da19e8c18c6dde625b1fe80bac5cc364ea8479593d9597ed36a7602a9b27118bc85e4cda84422b5cbc99ef0e3202572fe47b00f3eef11b3b1a8f34cb65cf4c77ab7305123ab6a59bb0daf86dd513705a9e47afc091117eef480fb366950a706918b8ea35132a47910ca8d2fc110c447a15a1e8b117c4917ec26e9fa7bb412608aef3b07a804014f375cfd7738952f3f58a6f112ba5b17e74f87f0a7d972e84d9d0261c103670c41a6071f068a788cc49a2

B public key
3f20d405cfe47599678d036f347580784711922816826f05348f6d7f574ca0806c087408eb4cbe50b78cdae51d230644fb5d3feed3741b9727740403369536514e034c7309cd80fbbffd8df8ee78c50253b002a7e060623c8c550be852d54a07a2c2fa99169653b067bbd983daaa4a8f66dd2376bdaeec998e647bf5b895f04418b769677002f9fbf9585824171a55ec25099894a62ae668d9f5c57866fc0e0c365d679b5d2d75d5bc9fefe7339c2e30f21ec30509d3697f21bc02e17555111304aa49b0c15429af720d3be3afa3bfe009d44c132c97f1d7ae2ba870b6c59888ffbac9d2496a78007960f10f323bec57d84d7ed6466bbe1acd0436b22800acc5

A shared key
0fed6191ea90d8c9d9aaabc2ba7aa5d6590d74f54650b665d37b9fe580785f69e3ce1b96c1e6a49cc8830b53204447360d7cd34fae2bc667c46beff324f6a25ef30efdfe0bebcd34d55d845ab613995d84ea8acdd7fc15a0d4a880b821adfd81804c68bc25244939fca5819545cea14997a131aaf85dcb405e60dd5f2ea16c119261e61014048aacebe88011ee6ee65b9cf8144aab543ab1a58f92e5244a58a52416a26704b452f2bb6d8ee12da8ad17a5ca7c74c3461bb094c51054eb4620ed907690ef698f0fd044030f5d92360b37a6b1f584efa5a44a2e9b6579c7c506d8f46aa5a90aecdfeaad5255de6859e5607a31c9a7ff060a95859ac18ef5d2e999

B shared key
0fed6191ea90d8c9d9aaabc2ba7aa5d6590d74f54650b665d37b9fe580785f69e3ce1b96c1e6a49cc8830b53204447360d7cd34fae2bc667c46beff324f6a25ef30efdfe0bebcd34d55d845ab613995d84ea8acdd7fc15a0d4a880b821adfd81804c68bc25244939fca5819545cea14997a131aaf85dcb405e60dd5f2ea16c119261e61014048aacebe88011ee6ee65b9cf8144aab543ab1a58f92e5244a58a52416a26704b452f2bb6d8ee12da8ad17a5ca7c74c3461bb094c51054eb4620ed907690ef698f0fd044030f5d92360b37a6b1f584efa5a44a2e9b6579c7c506d8f46aa5a90aecdfeaad5255de6859e5607a31c9a7ff060a95859ac18ef5d2e999


```

