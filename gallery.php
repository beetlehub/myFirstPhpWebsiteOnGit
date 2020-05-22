<div class="heading">Gallery</div>
<?php include_once 'includes/show_gallery.inc.php'; ?>
<div class="gallery-upload">
<div class="gallery-upload-title">UPLOAD IMAGE</div>
<?php
if(isset($_SESSION['currentUser'])){

    echo '<form action="includes/upload_gallery.inc.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" class="gallery-upload-btn"><br>
        <input type="text" name="pic-name" placeholder="File name..."><br>
        <input type="text" name="pic-title" placeholder="Image title..."><br>
        <input type="text" name="pic-desc" placeholder="Image description..."><br>
        <button type="submit" name="submit">UPLOAD</button>
    </form>';
}else{
    echo 'Please login to upload an Image';
    include_once 'login.php';
}
?>
</div>