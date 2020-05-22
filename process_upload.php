<?php
if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    echo $_FILES['file']['name'];
    $file_name = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_error = $_FILES['file']['error'];
    $file_type = $_FILES['file']['type'];

    $file_explode = explode('.',$file_name);
    $file_extension = strtolower(end($file_explode));
    $allowed_ext = array('jpg','png','jpeg');

    if(isset($_POST['file'])){
        if(in_array($file_extension,$allowed_ext)){
            if($file_error===0){
                if($file_size<1000000){
                    $file_name_new = uniqid('',true).'.'.$file_extension;
                    $location = 'uploads/'.$file_name_new;
                    move_uploaded_file($file_loc,$location);
                    echo 'File Uploaded Successfully';
                }
            }else
                echo 'Error Occured'; 


        } else
            echo 'This extension is not Allowed';
    }else
        echo 'please select a file'; 
}else
    echo 'please select a valid file';

