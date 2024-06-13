<?php 
    $text ="Welcome to lagos";
    $cipher = "AES-256-CBC";
    $pass = "PKCS7Padding";
    $key = "WFHmRXxexifLUjIp";
    $options = 0;
    $iv = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($iv);
    $encrypted =openssl_encrypt($text, $cipher,$pass, $options, $iv);
    echo bin2hex($encrypted);

