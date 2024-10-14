<?php

if (isset($_POST["decrypt"])) {
     $decryptKey = $_POST["decrypt_key"];

    $get_rec = mysqli_query($conn, "select * from login where  and email='$email' ");

    if (mysqli_num_rows($get_rec) > 0) {
        $row = mysqli_fetch_array($get_rec);
        $_SESSION["key"] = $row["decrypt"];
       
        if ($row["decrypt"] == $decryptKey) {
            header("location:studentdetails");
        } else {
            header("location:managequestion");
        }
    } else {
        $error = "Incorrect Decryption Key,<br> please check and try again";
    }
}
<a href="studentdetails.php?id=<?php echo $lec_id; ?>">DECRYPT</a>
        <a href="studentdetails.php?id=<?php echo $lec_id; ?>">DECRYPT</a>
?>