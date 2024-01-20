<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/sign.css";>
    <script src="../JavaScript/signform.js" defer></script>
    <title>Library - Sign-Up</title>
</head>
    <?php 
        include ("header.php");      
    ?>
    
    <main id="main-up">
        <h2 class="h1form">Sign-up</h2>
        <div id="error-container" style="display: none;"></div>

    <div>
        <form action='newuser.php' method="POST" onsubmit="return validate();">
            <div class="textlable">
                <label for="firstname"><b>First Name</b></label><br>
                <input type="text" class="labels" id="firstname" name="first_name" size="20">
            </div>
            <div class="textlable">
                <label for="lastname"><b>Last Name</b></label><br>
                <input type="text" class="labels" id="lastname" name="last_name" size="20">
            </div>
            <div class="textlable">
                <label for="email"><b>Email Address</b></label><br>
                <input type="text" class="labels" id="email" name="email_address" size="30" placeholder="format for email is xxx@yyy.zzz">
            </div>
            <div class="textlable">
                <label for="login"><b>User Name</b></label><br>
                <input type="text" class="labels" name="user_name" id="login" placeholder="User name">
            </div>            
            <div class="textlable">
                <label for="phone"><b>Phone Number</b></label><br>
                <input type="tel" class="labels" id="phone" name="phone_number" size="10" placeholder="xxx-xxx-xxxx">
            </div>
            <div class="textlable">
                <label for="password"><b>Password</b></label><br>
                <input type="text" class="labels" id="password" name="password" size="20">
            </div>
            <div class="textlable">
                <label for="password"><b>Retype Password</b></label><br>
                <input type="text" class="labels" id="password2" name="password2" size="20">
            </div>
            <div class="checkbox">
                <input type="checkbox" name="terms" id="terms">
                <label for="terms">I agree to the terms and conditions</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" name="newsletter" id="newsletter">
                <label for="newsletter">I agree to receive nofications</label>
            </div>

            <button id="myBtn" type="submit" onclick="validate()" >Sign-Up</button>
            <button id="myRst" type="reset" onclick="resetErrors()">Reset</button>            
        </form>
        <br>
    </div>
    
    </main>
    
    <?php 
        include ("footer.php");
    ?>     
