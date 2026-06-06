<?php

$pwdSignup = "junior_2026";

// password_hash($pwd, PASSWORD_DEFAULT);

$options = [
    'cost' => 12
];

$hashPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdSbmt = "junior_20216";

if (password_verify($pwdSbmt, $hashPwd)) {
    echo "Verified";
} else {
    echo "Error";
}