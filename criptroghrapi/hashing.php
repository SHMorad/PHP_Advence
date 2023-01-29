<?php
// Hasing
/* echo md5("Let There be light");
echo PHP_EOL;
// print_r(hash_algos());
echo sha1("Let There be light");
echo PHP_EOL;
echo hash("sha1","Let There be light");
echo PHP_EOL;
echo bin2hex(mhash(MHASH_SHA512,"Let There be light"));
echo PHP_EOL; */



// salt

/* $solt ="Th1s1s@s@lt";
$password = "secret password";
$hash = md5($password.$solt);
// echo $hash;
$userInput = "search password";
if(md5($password.$solt)=="9df4cada022dd83b0cf462ec63b6b0cf"){
    echo "Correct password";
}else{
    echo "Incorrect password";
}
 */



//  use of hasing

/* $secrtPassword ="WoW";
$message = "This is change secret message";
$hash = md5($message.$secrtPassword);
echo $hash;
//d33f62b442e740f663c14d655417c981 */



// Timing Attack

/* $password ="secret password";
$hash =hash("sha1",$password);
echo $hash;

$userInputHash = hash("sha1",$_POST['$password']);

if($hash == $userInputHash){
    echo "Password Correct";
}

if(hash_equals($hash, $userInputHash)){
    echo "password Match";
} */

// making different different Algorithom with hasing

/* $message = "This is a secret message";
$key = "MySecretPassword";
// print_r(hash_hmac_algos());
// echo hash_hmac("sha1",$message,$key);
// echo hash_hmac("md5",$message,$key);
// echo hash_hmac("whirlpool",$message,$key);
// echo hash_hmac("sha512",$message,$key);
echo hash_hmac("gost-crypto",$message,$key); */


// making sequre hasing with cript and blowfish
/* $message="This is a Secret message";
// $blowfish_salt ="$2y$10$". random_bytes(11);
// $blowfish_salt ="$2y$10$". bin2hex(random_bytes(11));
$blowfish_salt ="$2y$10$". bin2hex(openssl_random_pseudo_bytes((11)));

// echo $blowfish_salt;
echo crypt($message,$blowfish_salt); */



// making hash bulidin function with hash_password

/* $password ="secret password";
$hash = password_hash($password, PASSWORD_BCRYPT,['cost'=>11]); //default 11,useses more than 11;


$userInput = "secret Password";


if(password_verify($userInput, $hash)){
    echo "Authenticated";
}else{
    echo "Access Denide";
} */



// encript
// simectric data encript with openssl_encrypt

// print_r(openssl_get_cipher_methods());
$methodName = "aes-128-cbc";
$iv_length = openssl_cipher_iv_length($methodName);
$iv = openssl_random_pseudo_bytes($iv_length);


$message = "This is a secret message";
$password = "scret message";

$encyptedMessage = openssl_encrypt($message, $methodName, $password, 0, $iv);
echo $encyptedMessage;
echo PHP_EOL;
echo openssl_decrypt($encyptedMessage, $methodName, $password, 0, $iv);




?>