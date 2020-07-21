<?php

$out = "";
$flag = TRUE;

if (isset($_FILES['img'])){
    $out .= "Success <br>";

    var_dump($_FILES['img']);

    if($_FILES['img']['error'] == UPLOAD_ERR_OK) {
        $out .= "No Error <br>";
    } else {
        $out .= "Error: ".$_FILES['img']['error'];
        $flag = FALSE;
    }

    if ((exif_imagetype($_FILES['img']['tmp_name']))){
        $out .= "This is a Valid image<br>";
    }else{
        $flag = FALSE;
        $out .= "Not a Valid image<br>";
    }

    if($flag){
        $ttl = $conn->real_escape_string($_POST['title']);
        $genre = $conn->real_escape_string($_POST['genre']);
        $year = $conn->real_escape_string($_POST['year']);
        $desc = $conn->real_escape_string($_POST['desc']);
        $name = $conn->real_escape_string($_FILES['img']["name"]);

        $nameclr = str_replace(' ', '_', $name);
        $newfilename = time().$nameclr;

        if(!move_uploaded_file($_FILES['img']["tmp_name"], 'uploads/'.$newfilename)){
            $out .= "Failed to upload<br>";
        }else{
            $out .= "File Uploaded<br>";
        }

        $sql = "INSERT INTO movies (title,year,genre,description) VALUES ('$ttl','$year','$genre','$desc')";

        if ($conn->query($sql) === TRUE) {
          // echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

?>
