
<?php include'includes/header.php'?>
<div class="container">
    <div class="row bg-info">
            <div class="col-md-6 p-3">
                <h5 class="text-light">Add User</h5>
            </div>
            <div class="col-md-6 p-3">
                <a href="index.php" class="btn btn-success float-right">View Users</a>
            </div>
        </div>
        <?php
        include 'classess/userInsert.php';
           if (isset($_POST['save'])) {
               $obj = new userInsert;
               $data = $obj->newUserInsert($_POST);
               echo $data;
           }
        ?>
	 	<div class="row">
	 		<div class="col-md-12">
	 			<form action="" method="post">
	 				<div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name1" aria-describedby="name" placeholder="Enter name" name="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email1" aria-describedby="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                       <label for="text">phone</label>
                        <input type="phone" class="form-control" id="phone1" aria-describedby="phone" placeholder="Enter phone" name="phone">
                    </div>
                    <div class="form-group">
                       
                        <input type="submit" name="save" value="Save" class="btn btn-danger">
                    </div>
	 			</form>
	 		</div>
	 	</div>
	 </div>


     <?php include 'includes/footer.php';?>