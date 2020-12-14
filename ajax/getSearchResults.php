<?php
require_once("../includes/config.php");
require_once("../includes/SearchResultsProvider.php");

if (isset($_POST["term"]) && isset($_POST["username"])) {
   
    $srp = new SearchResultsProvider($con, $_POST["username"]);
    echo $srp->getResults($_POST["term"]);
}
else {
    echo "No term or username passed into file";
}

?>