<?php
/**
 * Created by PhpStorm.
 * User: zogxray
 * Date: 19.09.18
 * Time: 10:02
 */

$configargs1 = [];
$configargs1['p'] = hex2bin('00a3251e733f44b92beef49d9f376a4bfd1dbdf4afdac810775941c65f73d2882939cd1c5fc39f0f22d29c20c1e4c01803b8b6d8daad3b39a6da8efe1230e9035d22baef18d27b69f95bcb78c60c8c6bf24992c249e0457772b3553630f2401789185003fa2d547a7f344c7332b688145114be805795e6a3f651ff17474f15d60e6c4753722c2a4c21cb7df34997c9475e40337b99527e7af3522780de1b266b40bb14110bfbe6d82fcfa0062f96b91c0bb4cbd3a6629c4867f681f2c6ff45030a9d679dce27d96b485dcafbc25d849b8bcb40c7a40c8a6ef4abbab610c3b8254dcf6096f4dbe8001c58477afb5186d122d74e94317ad5da3d53dedabb648d626b');
$configargs1['g'] = hex2bin('02');
$private_key1 = openssl_pkey_new(array('dh' => $configargs1));

$configargs2 = [];
$configargs2['p'] = hex2bin('00a3251e733f44b92beef49d9f376a4bfd1dbdf4afdac810775941c65f73d2882939cd1c5fc39f0f22d29c20c1e4c01803b8b6d8daad3b39a6da8efe1230e9035d22baef18d27b69f95bcb78c60c8c6bf24992c249e0457772b3553630f2401789185003fa2d547a7f344c7332b688145114be805795e6a3f651ff17474f15d60e6c4753722c2a4c21cb7df34997c9475e40337b99527e7af3522780de1b266b40bb14110bfbe6d82fcfa0062f96b91c0bb4cbd3a6629c4867f681f2c6ff45030a9d679dce27d96b485dcafbc25d849b8bcb40c7a40c8a6ef4abbab610c3b8254dcf6096f4dbe8001c58477afb5186d122d74e94317ad5da3d53dedabb648d626b');
$configargs2['g'] = hex2bin('02');
$private_key2 = openssl_pkey_new(array('dh' => $configargs2));

$details1 = openssl_pkey_get_details($private_key1);
$local1 = $details1['dh']['pub_key'];
echo "A public key"."\n";
echo bin2hex($local1)."\n\n";

$details2 = openssl_pkey_get_details($private_key2);

$local2 = $details2['dh']['pub_key'];
echo "B public key"."\n";
echo bin2hex($local2)."\n\n";

$shared_secret1 = openssl_dh_compute_key($local2, $private_key1);
echo "A shared key"."\n";
echo bin2hex($shared_secret1)."\n\n";

$shared_secret2 = openssl_dh_compute_key($local1, $private_key2);
echo "B shared key"."\n";
echo bin2hex($shared_secret2)."\n\n";