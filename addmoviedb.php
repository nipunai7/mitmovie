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
        $name1 = $conn->real_escape_string($_FILES['img1']["name"]);
        $name2 = $conn->real_escape_string($_FILES['img2']["name"]);
        $name3 = $conn->real_escape_string($_FILES['img3']["name"]);
        $name4 = $conn->real_escape_string($_FILES['img4']["name"]);

        $nameclr = str_replace(' ', '_', $name);
        $newfilename = time().$nameclr;

        $nameclr1 = str_replace(' ', '_', $name1);
        $newfilename1 = time().$nameclr1;

        $nameclr2 = str_replace(' ', '_', $name2);
        $newfilename2 = time().$nameclr2;

        $nameclr3 = str_replace(' ', '_', $name3);
        $newfilename3 = time().$nameclr3;

        $nameclr4 = str_replace(' ', '_', $name4);
        $newfilename4 = time().$nameclr4;


        if(!move_uploaded_file($_FILES['img']["tmp_name"], 'assets/img/'.$newfilename)){
            $out .= "Failed to upload<br>";
        }else{
            $out .= "File Uploaded<br>";
        }

        if(!move_uploaded_file($_FILES['img1']["tmp_name"], 'assets/img/'.$newfilename1)){
            $out .= "Failed to upload<br>";
        }else{
            $out .= "File Uploaded<br>";
        }

        if(!move_uploaded_file($_FILES['img2']["tmp_name"], 'assets/img/'.$newfilename2)){
            $out .= "Failed to upload<br>";
        }else{
            $out .= "File Uploaded<br>";
        }

        if(!move_uploaded_file($_FILES['img3']["tmp_name"], 'assets/img/'.$newfilename3)){
            $out .= "Failed to upload<br>";
        }else{
            $out .= "File Uploaded<br>";
        }

        if(!move_uploaded_file($_FILES['img4']["tmp_name"], 'assets/img/'.$newfilename4)){
            $out .= "Failed to upload<br>";
        }else{
            $out .= "File Uploaded<br>";
        }

        $sql = "INSERT INTO movies (title,year,genre,description,img,img1,img2,img3,img4) VALUES ('$ttl','$year','$genre','$desc','$newfilename','$newfilename1','$newfilename2','$newfilename3','$newfilename4')";

        if ($conn->query($sql) === TRUE) {
          // echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

?>
