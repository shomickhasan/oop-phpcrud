<?php include'includes/header.php'?>

<div class="container">
    <div class="row bg-info">
            <div class="col-md-6 p-3">
                <h5 class="text-light">Update User</h5>
            </div>
            <div class="col-md-6 p-3">
                <a href="index.php" class="btn btn-success float-right">View Users</a>
            </div>
        </div>

        <?php
        //code for show data ready for update
        include "classess/userUpdateclass.php";
          $id=$_GET['id'];
          $obj= new updateUser;
          $result= $obj->ShowDataForUpdate($id);
          foreach($result as $userData){?>
        
	 	<div class="row">
	 		<div class="col-md-12">
	 			<form action="" method="post">
	 				<div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name1" aria-describedby="name" placeholder="Enter name" name="Name" value="<?php echo $userData['Name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email1" aria-describedby="email" placeholder="Enter email" name="email"  value="<?php echo $userData['email']; ?>">
                    </div>
                    <div class="form-group">
                       <label for="text">phone</label>
                        <input type="phone" class="form-control" id="phone1" aria-describedby="phone" placeholder="Enter phone" name="phone" value="<?php echo $userData['phone']; ?>" >
                    </div>
                    <div class="form-group">
                       
                        <input type="submit" name="update" value="Update" class="btn btn-danger">
                    </div>
	 			</form>
	 		</div>
	 	</div>
	 </div>
	<?php   } ?>

	<?php
    //code for data update 
      if (isset($_POST['update'])){
      	$updateData=$obj->updateUserData($_POST, $id);
      	header("location:index.php");

      }

	?>

	

<?php include 'includes/footer.php';?>