<?php
require_once("PayPal-PHP-SDK/autoload.php");


$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AcCHuN3wtkCjanH-67nTPRbXMQK4V1KoAUHgdPGenA7J86bGhuP7tMIu7OVqpH_TNjqAHk7_sEFJXX2m',     // ClientID
        'EG3Qk2_Pj02WYGeM-Diw45JIVhnUHw52t-eB4kiVPsZevr902K12ar63igpll15m5I7VQGJaXMvhyMPr'      // ClientSecret
    )
);

?>