<?php
  $connect = mysqli_connect("localhost","root","rkdehdguq1");
  mysqli_select_db($connect,"studyweb");
  $sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."','".$_POST['description']."','".$_POST['author']."',now())";
  echo $sql;
  $result = mysqli_query($connect,$sql);
  header('Location: http://localhost/WebProgrammingStudy/index.php');
?>
