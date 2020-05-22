
    <form action="includes/login.inc.php" method="post">
        <input type="text" name='username' placeholder='Username'><br>
        <input type="password" name='pswrd' placeholder='Password'><br>
        <button type='submit' name='submitLogin'>Login</button><br>
        <a href='index.php?pages=home&login=new'> Click here for Signup </a>
    </form>
<?php
// The messages Required for every Login attempt
    if(!isset($_GET['Login_error'])){
        // Blank intentionally
    }else{
        if($_GET['Login_error']=='login_success')
            echo "<p class='success_msg'> You are Logged in successfully </p>";

        elseif($_GET['Login_error']=='password_not_match')
            echo "<p class='error_msg'> Wrong Password </p>";

        elseif($_GET['Login_error']=='username_not_match')
            echo "<p class='error_msg'> Invalid Username </p>";

        elseif($_GET['Login_error']=='invalid_inputs')
            echo "<p class='error_msg'>Fill mandatory fields </p>";
    }

// The message comes after succesfully signed up (under Login Box)
    if(!isset($_GET['signup'])){
        // Blank intentionally

    }else{

            if($_GET['signup']=='success')
                echo "<p class='success_msg'> You have succesfully signed up! </p>";       
    }