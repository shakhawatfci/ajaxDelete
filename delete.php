<!-- include database -->

<?php

  include 'db.php';
 
  // sorry need to get id 

  $id = $_POST['delete_id'];
  $query = mysqli_query($con,"DELETE FROM categories WHERE id='$id'");

  

 ?>