<?php
$mysqli=mysqli_connect('localhost','root','root','beta') or die("Database Error");
 $q=$_GET['q'];
 $my_data=mysqli_real_escape_string($mysqli, $q);

 $sql="SELECT tag FROM autocomplete_tags WHERE tag LIKE '%$my_data%' ORDER BY tag";
 $result = mysqli_query($mysqli,$sql) or die(mysqli_error());

 if($result)
 {
  while($row=mysqli_fetch_array($result))
  {
   echo $row['tag']."\n";
  }
 }
?>
