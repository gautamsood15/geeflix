<?php
require_once("includes/header.php");
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

            <input type="submit" name="saveDetailsButton" value="Save">

        </form>

    </div>

    <div class="formSection">

        <form method="POST">

            <h2>Update password</h2>

            <input type="password" name="oldPassword" placeholder="Old Password">
            <input type="password" name="newPassword" placeholder="New Password">
            <input type="password" name="newPassword2" placeholder="Confirm New Password">

            <input type="submit" name="savePasswordButton" value="Save">

        </form>

    </div>


</div>