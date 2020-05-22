
                
<?php

if(isset($_SESSION['currentUser'])){
    
            $userid = $_SESSION['userId'];
            $sql = "SELECT * FROM profileimg WHERE userid='$userid';";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                if($row['status']==0)
                    $img = "uploads/profile".$userid."."."jpg";
                else
                    $img = 'images/profileImgdefault.jpg';
                }
            }

    echo "<div class='heading'>User Profile</div>";
    echo "<table id='profile-tab'>";
    echo "<tr>";
    echo "<td>";
    echo "<img src='$img' class='profile-img'>";
    echo "</td>";
    echo "<td class='tddetails'>";
    echo "<div class='user-name'>".$_SESSION['currentUser']."</div>";
    echo "<div class='details'>";
    echo $_SESSION['currentFirst']."<br>";
    echo $_SESSION['currentLast']."<br>";
    echo $_SESSION['currentEmail']."<br>";
    echo "<button onclick=\"document.location = 'logout.php'\">Logout</button>";
    echo "</div>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    
    include 'profile_upload.php'; 
}else{

    include_once 'home.php';
}



?>
