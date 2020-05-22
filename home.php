<?php

     if(isset($_GET['login'])){
         if($_GET['login']=='new'){
             $login_or_reg = 'signup.php';
             $title = 'Signup for an account';
         }else{
             $login_or_reg = 'login.php'; 
             $title = 'Login';
             
         }
     }else{
             $login_or_reg = 'login.php';
             $title = 'Login'; 
     }


if(isset($_SESSION['currentUser'])){
         $title = "Hi, ".$_SESSION['currentUser']." <a href='logout.php'> Logout </a>";
        }

?>
<div class='heading'> <?php echo $title; ?> </div>

     <div class="signup signup-align">
     <?php
     if(!isset($_SESSION['currentUser'])){
         include_once $login_or_reg;
        }
    ?>
    </div>


    <article>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore sequi dicta molestiae autem veniam debitis delectus corporis harum deleniti perspiciatis earum rem impedit tempora porro, accusantium, ut maiores voluptas ipsum.
    <br>    
    <br>  
    <br>  

    <br>  
    <br>  
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, consectetur enim. Unde, ad dolorum! A nisi enim animi ipsa optio pariatur, provident accusantium fuga laboriosam incidunt ut! Ducimus, quas exercitationem.
    <br>  
    <br>  
    <br>  

    <br>  
    <br>  
    <br>  
    <br>  
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis ipsam incidunt aliquid, ea quo adipisci eveniet, exercitationem dolorum, hic temporibus sit ex consequuntur inventore. Id deleniti fugit nesciunt minus quis!
    <br>  
    <br>  
    <br>  
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore expedita molestiae amet, voluptas aspernatur quo porro eaque voluptatem corrupti modi, blanditiis accusamus possimus quia provident! Quis ut ex eveniet vel!
    <br>  
    <br>  
    <br>  
    <br>  
    <br>  
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, deserunt autem laboriosam nam earum explicabo totam accusamus nihil cupiditate facilis vitae nemo voluptas, aut expedita quaerat, cumque dolores eum. Minima?
    <br>  
    <br>  
    <br>  
    <br>  

    </p>
    </article>    