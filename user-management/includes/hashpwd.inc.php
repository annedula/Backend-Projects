<?php
$sensitiveData = "Anne";
$salt = bin2hex(random_bytes(16)); //Generate random salt
$pepper = "ASecretPepperString";

echo "<br>" . $salt;

$dataTh = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataTh);

echo "<br>" . $hash;

/*------*/

$sensitiveData = "Anne";

$storedSalt = $salt;
$storedHash = $hash;
$pepper = "ASecretPepperString";

$dataTh = $sensitiveData . $storedSalt . $pepper;

$verificationHash = hash("sha256", $dataTh);

echo "<br>";

if ($storedHash == $verificationHash) {
    echo "Data verified.";
    echo "<br>";
    echo $storedHash;
    echo "<br>";
    echo $verificationHash;
} else {
    echo "<br>";
    echo "Data error.";
}