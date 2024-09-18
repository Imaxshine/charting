<?php
function Encrypting($data)
{
    $cipher = 'AES-256-CBC';
    $key = 'Max_0089@all';
    $option = 0;
    $secret = sha1($key);
    $iv_encrypty = substr($secret,0,16);
    $encrypted = openssl_encrypt($data, $cipher, $key, $option, $iv_encrypty);
    return $encrypted;
}
