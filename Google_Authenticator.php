<?php

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST', 'OPTIONS');
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Max-Age: 86400");
    header("Access-Control-Allow-Headers: X-Requested-With");
    require_once 'GoogleAuthenticator.php';


    $ga = new PHPGangsta_GoogleAuthenticator();
    $secret = $ga->createSecret();
    echo "Secret is: ".$secret."\n\n";

    $qrCodeUrl = $ga->getQRCodeGoogleUrl('Blog', $secret);
    echo "Google Charts URL for the QR-Code: ".$qrCodeUrl."\n\n";

    $oneCode = $ga->getCode($secret);
    echo "Checking Code '$oneCode' and Secret '$secret':\n";

    $checkResult = $ga->verifyCode($secret, $oneCode, 2);    // 2 = 2*30sec clock tolerance
    if ($checkResult) {
        echo 'OK';
    } else {
        echo 'FAILED';
    }


?>
