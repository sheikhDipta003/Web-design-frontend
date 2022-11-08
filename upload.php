<?php
$dst_path = getcwd().DIRECTORY_SEPARATOR;
$resut = 0;
$target_path = $dst_path.basename($_FILES['myFile']['name']);
if(move_uploaded_file($_FILES['myFile']['tmp_name'], $target_path)){
    $result = 1;
}

echo $result;
?>