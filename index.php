
<?php include'includes/header.php'?>
	 


    <div class="container">
    	<div class="row bg-info">
    		<div class="col-md-6 p-3">
    			<h5 class="text-light">Users</h5>
    		</div>
    		<div class="col-md-6 p-3">
    			<a href="adduser.php" class="btn btn-success float-right">+Users</a>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-12">
    			<table id="myTable" class="display">
    			<thead>
    				<tr>
    					<th>Name</th>
    					<th>Email</th>
    					<th>phone</th>
    					<th>Action</th>
    					
    				</tr>
    			</thead>
    			  <tbody>
    			  	<tr>

				 <?php
			      
			        include 'classess/showUser.php';
			         $result= new userShow;
			         $data= $result->showUser();
			         foreach($data as $users){?>
			         	
			         	<td><?php echo $users['Name'];?></td>
			         	<td><?php echo $users['email'];?></td>
			         	<td><?php echo $users['phone'];?></td>
			         	
			         	<td>
			         		<a href="userUpdate.php?id=<?php echo$users['id']?>" class="btn btn-sm btn-warning">Update</a>
			         		<button class="btn btn-sm btn-danger">Delet</button>
			         	</td>
			         
                    </tr>

			         <?php }?>
    			
    				
    			</tbody>
    		</table>
    		</div>
    	</div>
    </div>












  <?php include 'includes/footer.php';?>

