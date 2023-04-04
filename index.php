<!DOCTYPE html>
<html>

<body>

<div align="center">
    <form action="" method="post" enctype="multipart/form-data">
        <br>
        <b>Select file : </b>
        <input type="file" name="file" id="file" style="border: solid;">
        <input type="submit" value="Submit" name="submit">
        <br>
        <a href="uploads" >List</a>
    </form>
</div>
<?php

if(isset($_POST["submit"])) {
    ini_set('upload_max_filesize', '4G');
    ini_set('post_max_size', '4G');
    $rand_number = time()."-";
    $target_dir = "uploads/".$rand_number;
    $target_file = $target_dir . (basename($_FILES["file"]["name"]));
    $file_name = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
    $type = $_FILES["file"]["type"];
    $check = getimagesize($_FILES["file"]["tmp_name"]);

    if($uploadOk ){
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        echo "File uploaded /uploads/".$target_file;
    }
}
?>

</body>
</html>