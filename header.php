
  
    <header>
        <div class="logo">
          <img src='images/icon.jpg' alt='logo'/>
        </div>
        <nav>
          <ul>
            <li id="hom_clr"><a href="index.php?pages=home">Home</a></li>
            <li id="blog_clr"><a href="index.php?pages=blog">Blog</a></li>
            <li id="about_clr"><a href="index.php?pages=profile">Profile</a></li>
            <li id="users_clr"><a href="index.php?pages=people">People</a></li>
            <li id="gallery_clr"><a href="index.php?pages=gallery">Gallery</a></li>
            <li id="contact_clr"><a href="index.php?pages=contact">Contact</a></li>
          </ul>
          <div class='search_bar'>
            <?php 
            
            session_start();
            if(isset($_SESSION['currentUser'])){
        
              include_once 'includes/config.inc.php'; 
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

                      echo "<table class='profile-img-tab'>";
                      echo "<tr>";
                      echo "<td>Hi, ".$_SESSION['currentUser'];
                    
                      echo "</td>";
                      echo "<td><img src='$img' class='img-profile-header' >";
                      echo "<span class='logout-top-button'><button onclick=\"document.location = 'logout.php'\">Logout</button></span>";
                      echo "</td>";
                      echo "</tr>";
                      echo "</table>";
                      
            }
            else
                  echo "<input type='text' placeholder='search content here'><button>search</button>";

            ?>
          </div>
        </nav>
      </header>
