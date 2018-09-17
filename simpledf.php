<?php
/**
 * Created by PhpStorm.
 * User: zogxray
 * Date: 17.09.18
 * Time: 10:31
 */

echo "Start"."\n";

$sharedPrime = 222; //p
$sharedBase = 12; //g

$aliceSecret = rand(1, 8); //a
$bobSecret = rand(1, 8); //b

echo "------------\n";
echo "Publicly Shared Variables: \n";
echo "    Publicly Shared Prime: {$sharedPrime}\n";
echo "    Publicly Shared Base:  {$sharedBase}\n";

print  abs($sharedBase ** $aliceSecret)."\n";
print  abs($sharedBase ** $bobSecret)."\n";

$alicePublicKey = ($sharedBase ** $aliceSecret) % $sharedPrime;
$bobPublicKey = ($sharedBase ** $bobSecret) % $sharedPrime;

echo "------------\n";
echo "Send over Public Chanel: \n";
echo "    Alice Sends Over Public Chanel: {$alicePublicKey}\n";
echo "    Bob Sends Over Public Chanel: {$bobPublicKey}\n";


$alicePrivateKey = ($bobPublicKey ** $aliceSecret) % $sharedPrime;
$bobPrivateKey = ($alicePublicKey ** $bobSecret) % $sharedPrime;

echo "------------\n";
echo "Privately Calculated Shared Secret: \n";
echo "    Alice private key: {$alicePrivateKey}\n";
echo "    Bob private key: {$bobPrivateKey}\n";

