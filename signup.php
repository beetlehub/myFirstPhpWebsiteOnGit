
<form action="includes/process.php" method="POST">
            <?php
                if(isset($_GET['firstname']))
                    echo "<input type='text' name='first_name' placeholder='Firstname' value=".$_GET['firstname']."><br>";
                else
                    echo "<input type='text' name='first_name' placeholder='Firstname'><br>";
            ?>

            <?php
                if(isset($_GET['lastname']))
                    echo "<input type='text' name='last_name' placeholder='Lastname' value=".$_GET['lastname']."><br>";
                else
                    echo "<input type='text' name='last_name' placeholder='Lastname'><br>";
            ?>

            <?php
                if(isset($_GET['email']))
                    echo "<input type='text' name='e_mail' placeholder='E-mail' value=".$_GET['email']."><br>";
                else
                    echo "<input type='text' name='e_mail' placeholder='E-mail'><br>";
            ?>

            <?php
                if(isset($_GET['username']))
                    echo "<input type='text' name='user_name' placeholder='Username' value=".$_GET['username']."><br>";
                else
                    echo "<input type='text' name='user_name' placeholder='Username'><br>";
            ?>

            <input type="password" name="pass_word" placeholder="Password"><br>
            <input type="password" name="confirm_password" placeholder="Confirm Password"><br>
            <button value="submit" name="submit">Signup</button>
            
        </form>
        
        <?php
            if(!isset($_GET['signup'])){
                // Kept blank intentionally
            }else{
                $err_code = $_GET['signup'];
                if($err_code == "field_empty"){
                    echo "<p class='error_msg'> Please fill all the mandatory fields </p>";
                    
                }
                elseif($err_code == "less_characters"){
                    echo "<p class='error_msg'> Please fillup all fields with atleast 3 characters </p>";
                    
                }
                elseif($err_code == "invalid_characters"){
                    echo "<p class='error_msg'> Special characters are not allowed! </p>";
                    
                }
                elseif($err_code == "invalid_email"){
                    echo "<p class='error_msg'> Incorrect E-mail format </p>";
                    
                }
                elseif($err_code == "password_not_match"){
                    echo "<p class='error_msg'> Passwords do not match! </p>";
                    
                }
                elseif($err_code == "success"){
                    echo "<p class='success_msg'> You have succesfully signed up! </p>";
                    
                }   
            }
        ?>

<a href='index.php?pages=home'> Already have an Account ? Login here </a>