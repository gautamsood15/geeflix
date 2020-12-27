<?php
require_once("includes/header.php");
require_once("includes/paypalConfig.php");
require_once("includes/classes/Account.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");

$detailsMessage = "";
$passwordMessage = "";

if (isset($_POST["saveDetailsButton"])) {
    $account = new Account($con);

    $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
    $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
    $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);

    if ($account->updateDetails($firstName, $lastName, $email, $userLoggedIn)) {
        $detailsMessage = "<div class='alertSuccess'>
                                Details updated successfully!
                            </div>";
    }
    else {
        $errorMessage = $account->getFirstError();

        $detailsMessage = "<div class='alertError'> 
                                $errorMessage
                            </div>";
    }
}

if (isset($_POST["savePasswordButton"])) {
    $account = new Account($con);

    $oldPassword = FormSanitizer::sanitizeFormPassword($_POST["oldPassword"]);
    $newPassword = FormSanitizer::sanitizeFormPassword($_POST["newPassword"]);
    $newPassword2 = FormSanitizer::sanitizeFormPassword($_POST["newPassword2"]);

    if ($account->updatePassword($oldPassword, $newPassword, $newPassword2, $userLoggedIn)) {
        $passwordMessage = "<div class='alertSuccess'>
                                Password updated successfully!
                            </div>";
    }
    else {
        $errorMessage = $account->getFirstError();

        $passwordMessage = "<div class='alertError'> 
                                $errorMessage
                            </div>";
    }
}

if (isset($_GET['success']) && $_GET['success'] == 'true') {
        $token = $_GET['token'];
        $agreement = new \PayPal\Api\Agreement();
  
    try {
        // Execute agreement
        $agreement->execute($token, $apiContext);

        // Update user's account status

    } catch (PayPal\Exception\PayPalConnectionException $ex) {
        echo $ex->getCode();
        echo $ex->getData();
        die($ex);
    } catch (Exception $ex) {
        die($ex);
    }
  } 
  else if (isset($_GET['success']) && $_GET['success'] == 'false') {
        echo "user canceled agreement";
  }

?>

<div class="settingsContainer column">
    
    <div class="formSection">

        <form method="POST">

            <h2>User  details</h2>

            <?php 
                $user = new User($con, $userLoggedIn);

                $firstName = isset($_POST["firstName"]) ? $_POST["firstName"] : $user->getFirstName();
                $lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : $user->getLastName();
                $email = isset($_POST["email"]) ? $_POST["email"] : $user->getEmail();
            
            ?>

            <input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName ?>">
            <input type="text" name="lastName" placeholder="Last Name" value="<?php echo $lastName ?>">
            <input type="email" name="email" placeholder="Email" value="<?php echo $email ?>">


            <div class="message">
                <?php echo $detailsMessage; ?>
            </div>

            <input type="submit" name="saveDetailsButton" value="Save">

        </form>

    </div>

    <div class="formSection">

        <form method="POST">

            <h2>Update password</h2>

            <input type="password" name="oldPassword" placeholder="Old Password">
            <input type="password" name="newPassword" placeholder="New Password">
            <input type="password" name="newPassword2" placeholder="Confirm New Password">

            <div class="message"> 
                <?php echo $passwordMessage; ?>
            </div>

            <input type="submit" name="savePasswordButton" value="Save">

        </form>

    </div>

    <div class="formSection">
        <h2>Subscription</h2>

        <?php
        
            if ($user->getIsSubscribed()) {
                echo "<h3> Your are Subscribed! Go to PayPal to Cancel.</h3>";
            } else {
                echo "<a href='billing.php'>Subscribe to Geeflix</a>";
            }
        
        ?>


    </div>


</div>