<?php
include_once 'includes/config.inc.php'; 

$sql = "SELECT * FROM users;";
$result = mysqli_query($conn,$sql);
$result_check = mysqli_num_rows($result);
echo "<div class='heading'>All Registered People</div>";

    if($result_check>0){
        echo "<table id='profile-tab'>";
        while($row = mysqli_fetch_assoc($result)){
                $userid = $row['id'];
                $sqlimg = "SELECT * FROM profileimg WHERE userid='$userid';";
                $resultimg = mysqli_query($conn,$sqlimg);
                if(mysqli_num_rows($resultimg)>0){
                    while($row2 = mysqli_fetch_assoc($resultimg)){
                    if($row2['status']==0)
                        $img = "uploads/profile".$userid."."."jpg";
                    else
                        $img = 'images/profileImgdefault.jpg';
                    }
                }
            echo "<tr>";
            echo "<td>";
            echo "<img src='$img' class='profile-img'>";
            echo "</td>";
            echo "<td class='tddetails'>";
            echo "<div class='user-name'>".$row['username']."</div>";
            echo "<div class='details'>";
            echo $row['first_name']."<br>";
            echo $row['last_name']."<br>";
            echo $row['email']."<br>";
            echo "</div>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo 'There are no registered users..!';
    }
    




?>