<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 23/05/2017
 * Time: 21.52
 */

// fungsi bCrypt untuk enkripsi password
function bCrypt($pass,$cost){
    $chars='./ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    // Build the beginning of the salt
    $salt=sprintf('$2a$%02d$',$cost);

    // Seed the random generator
    mt_srand();

    // Generate a random salt
    for($i=0;$i<22;$i++) $salt.=$chars[mt_rand(0,63)];

    // return the hash
    return crypt($pass,$salt);
}

?>