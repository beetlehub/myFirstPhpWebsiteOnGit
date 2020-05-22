<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="banner">
        


    
    </div>
    <div class="container">
            
        <?php
        if(!isset($_GET['pages'])){
            include_once 'home.php';
        }else{
            if($_GET['pages']=='blog')
                include_once 'blog.php';
            elseif($_GET['pages']=='home')
                include_once 'home.php';
            elseif($_GET['pages']=='profile'){
                
                if(isset($_SESSION['currentUser']))
                    include_once 'profile.php'; 
                else
                    include_once 'home.php';
            }
            elseif($_GET['pages']=='people')
                include_once 'people.php';

            elseif($_GET['pages']=='contact')
                include_once 'contact.php';

            elseif($_GET['pages']=='gallery')
            include_once 'gallery.php';

            else
                include_once 'home.php';
        }
         ?>
    


    <footer>
        <div class="footer-content">
        <?php include_once 'footer.php'; ?>
        </div>
    </footer>
    </div>
</body>
</html>