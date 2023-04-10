<?php
include('include/connect.php');
include('editpost.php');
if(isset($_POST['savechange'])){
    $my_id = $_SESSION['id'];
    $my_topic = $_POST['topic'];
    $my_content = $_POST['content'];
    $my_img = $_POST['img'];
    $my_cate = $_POST['type'];
    $editSQL = "UPDATE `allthink` SET `ttopic`= '".$my_topic."' , `tcontent` = '".$my_content."' , `timg` = '".$my_img."', `tcate` = '".$my_cate."' WHERE `id`= '".$my_id."'";
    $edit_query = mysqli_query($conn,$editSQL);

    $title = "แก้ไขข้อมูลสำเร็จ"; $text = 'กำลังเชื่อมต่อข้อมูล...'; $delay = '3000'; $link = 'mytopic.php';
    msg_success($title,$text,$delay,$link);
  }

?>