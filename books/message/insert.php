
<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2017/11/28
 * Time: 11:36
 */
include('../common/db.php');
$name=$_POST['user'];
$mess=$_POST['message'];
$time=time();
if($name=="" or $mess==""){
    echo "error!!!the name or mess is null"."</br><a href=\"book_message.php\">back my home</a>";
}else{
    $sql="INSERT INTO book_message(user,message,time) VALUE ('$name','$mess','$time')";
    $mysqli->query($sql);
    $mysqli->close();
    header('Location:book_message.php');
}

