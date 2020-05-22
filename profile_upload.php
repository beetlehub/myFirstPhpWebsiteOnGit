
 <div class='profile-upload'> 
     <div class="upload-title">Upload Profile Picture</div> 
     <form action="includes/profile_upload.inc.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="profile_pic" class="profile-upload-btn">
    <button name='submit' value='submit'>Upload</button>
    </form>
    <?php
    if(!isset($_GET['prof_pic'])){
        //intentionally blank
    }else{
        if($_GET['prof_pic']=='success')
            echo "<p class='success_msg'> Profile picture updated successfully </p>";

        elseif($_GET['prof_pic']=='size_exceed')
            echo "<p class='error_msg'> The Chosen Images exceed allowed size limit </p>";

        elseif($_GET['prof_pic']=='error_occured')
            echo "<p class='error_msg'> Error occured in uploaded file </p>";

        elseif($_GET['prof_pic']=='invalid_extension')
            echo "<p class='error_msg'> This file extension is not allowed </p>";

        elseif($_GET['prof_pic']=='choose_file')
            echo "<p class='error_msg'> Please Choose a Image file </p>";

        elseif($_GET['prof_pic']=='choose_valid_file')
            echo "<p class='error_msg'> Please Choose a valid file </p>";
    }
    ?>

<!-------------  Delete Profile Picture  -------------------------->
    <form action="includes/prof_pic_deleted.php" method="post">
    <?php 
    if(isset($_SESSION['prof_stat'])){
        if($_SESSION['prof_stat']==0){
            echo "<button type='submit' name='submit'>Delete current profile picture</button>";
        }
    }
    ?>
        
    </form>
</div>