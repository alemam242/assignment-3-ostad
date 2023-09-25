<?php

function generatePassword(int $length): string
{
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
    $password = "";

    for ($i = 0; $i <= $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}


$password = generatePassword(12);

echo $password;
