<?php
if (isset($_POST['Login'])){
    $user = $_POST['username'];
$pass = $_POST["password"];
if($user == "siti khaerunnisa" and $pass =="1234"){
header('location:pendaftaran.php');
    //echo "Login Berhasil";
}else {
    echo "Login Gagal";
}
}
?>