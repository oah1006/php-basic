<?php

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
  
    if ($file['error'] == 4) {
        echo "Please select at least 1 file";
        return;
    }

    $fileType = explode('/', $file['type'])[0];
    if ($fileType != 'image') {
        echo "Please select file image type";
        return;
    }

    if($file['size'] > 5 * 1000 * 1000) {
        echo "Please select file have 5MB";
        return;
    }

    $extension = explode('.', $file['name'])[1];
    $target_file = 'uploads/mycouple.' . $extension;

    $was_uploaded = move_uploaded_file($file['tmp_name'], $target_file);

    if ($was_uploaded) {
        echo "Upload successfully";
    } else {
        echo "upload failed";
    }
}


?>
