<?php
include("config.php");

if(isset($_POST['submit']))
  {
      $Username = $_POST['Username'];
      $password = $_POST['password'];
      $Email = $_POST['Email'];
      $Number = $_POST['Number'];
      $MSG = $_POST['MSG'];

      $result = mysqli_query($mysqli,"INSERT INTO register1 values('$Username', '$password', '$Email', '$Number', '$MSG')");

      if($result)
      {
          header("Location:index.php");
      }
      else{
       echo "failed";
      }

  }
?>