
<!-- today i gonna show you how to delete data using ajax and mysqli -->
<!-- include database connection -->

<!-- thanks for watching please subscribe our channel  -->

<?php

  include 'db.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete with ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

  <div class="container">
  	<div class="row">
  		<div class="col-md-8 col-md-offset-2">
  			<h3>Delete with ajax<h3>
               <div class="table-responsive">
               <table class="table table-hover">  
                <tr>
                	<th>category</th>
                	<th>delete</th>
                </tr>
<!-- tr under loop -->
<!-- fetch all data -->
  <?php 

  $query = "SELECT * FROM categories";

   $select = mysqli_query($con,$query);

      while ($result = mysqli_fetch_array($select)) {
       
   ?>
  			<tr id="delete<?php echo $result['id'] ?>">
  				
  				<td><?php echo $result['category_name']; ?></td>
  				<!-- delete button -->
  				<td><button onclick="deleteAjax(<?php echo $result['id'];  ?>)"  class="btn btn-danger">delete</button></td>
  			</tr>
  			<?php } ?>
<!-- loop end  			 -->



  			</table>
  			</div>


  		</div>
  	</div>
<script type="text/javascript">
	 
	 function deleteAjax(id){
   
       if(confirm('are You sure?')){
         
         $.ajax({

              type:'post',
              url:'delete.php',
              data:{delete_id:id},
              success:function(data){
              
                   $('#delete'+id).hide('slow');

              }

         });

       }


	 }

</script>
  </div>
<!-- now need jquery cdn -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</body>
</html>