<?php
/**
 * Created by PhpStorm.
 * User: zogxray
 * Date: 17.09.18
 * Time: 12:37
 */

echo "Start"."\n";

$sharedPrime = 11111111; //p, prime number
$sharedBase = 222222; //g, prime number

$aliceSecret = rand(1000, 10000); //a
$bobSecret = rand(1000, 10000); //b

echo "------------\n";
echo "Publicly Shared Variables: \n";
echo "    Alice Secret Prime: {$sharedPrime}\n";
echo "    Alice Secret Base:  {$sharedBase}\n";

$alicePublicKey = bcmod(bcpow($sharedBase, $aliceSecret), $sharedPrime);
$bobPublicKey = bcmod(bcpow($sharedBase, $bobSecret), $sharedPrime);

echo "------------\n";
echo "Send over Public Chanel: \n";
echo "    Alice Sends Over Public Chanel: {$alicePublicKey}\n";
echo "    Bob Sends Over Public Chanel: {$bobPublicKey}\n";

$alicePrivateKey = bcmod(bcpow($bobPublicKey, $aliceSecret), $sharedPrime);
$bobPrivateKey = bcmod(bcpow($alicePublicKey, $bobSecret),$sharedPrime);

echo "------------\n";
echo "Privately Calculated Secret: \n";
echo "    Alice private key: {$alicePrivateKey}\n";
echo "    Bob private key: {$bobPrivateKey}\n";