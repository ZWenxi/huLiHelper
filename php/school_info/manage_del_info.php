<?php 
  include "../connect_db.php";
  $stu_id=$_GET['id'];
  $sql="DELETE FROM stu_status WHERE stu_id='{$stu_id}'";
  if (mysqli_query($conn,$sql)) {
  	echo '<h3>信息删除成功！</h3><a href="manage_info.php">返回</a>';
  }
  else{
  	echo '<h3>信息删除失败！</h3><a href="manage_info.php">返回</a>';
  }
  mysqli_close($conn);
?>