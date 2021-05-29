<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <style type="text/css">
    	#header{
    		height: 10%;
    		width: 100%;
    		top: 2%;
    		
    		position: fixed;
    		color: #FFBF00;

    	}
    	#left_side_bar{
    		height: 75%;
    		width: 15%;
    		top: 10%;
    		position: fixed;

    	}
    	#right_side_bar{
    		height: 75%;
    		width: 80%;
    		position: fixed;
    		left: 17%;
    		top: 21%;
    		
    		
    	}
    	#top_span{
    		top: 15%;
    		width: 80%;
    		left: 17%;
    		position: fixed;
    	} 
    	#td{
    		border: solid 1px black;
    		padding-left: 2px;
    		text-align: left;
    		width: 200%;
    		 

    	}
    	
    </style>
    <?php
        session_start();#ata holo email name database fatch kore dekhabe tar jonno nice email er okhane php use korbo dynamic vabe dekhabe email name

        #query onnect
        $connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"smspp");

        #6 no logout er kaj korbo logout korar por admin e cole jabe#
    ?>
</head>
<body>
	
	<div id="header">
		<center><br><br><br><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>Email: <?php  echo $_SESSION['email'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: <?php  echo $_SESSION['name'];?><a href="logout.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logout</a>
		</center>
	</div>
	
	<div id="left_side_bar"><br><br><br><br>
		
		<form action="" method="post">
			<table>
				
				<tr>
					<td>
						<input type="submit" name="search_teacher" value=" Search Teacher">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="add_teacher" value="Add Teacher">
					</td>
				</tr>
				
			</table>
		</form>
	</div>
	<div id="right_side_bar"><br><br>
		<div id="demo">
			<?php		
			    if(isset($_POST['show_detail']))
			    {
			     	$query = "select * from teacher where email = '$_SESSION[email]'";
		            $query_run = mysqli_query($connection,$query);
		            while ($row = mysqli_fetch_assoc($query_run)){
		            	?>
		            	<table>
		            		<tr>
		            			<td>
		            				<b>Id No:</b>
		            			</td>
		            			<td>
		            				<input type="tect" value="<?php echo $row['id_no'];?>"disabled>
		                    	</td>
		                    </tr>
		                    <tr>
		            			<td>
		            				<b>Name:</b>
		            			</td>
		            			<td>
		            				<input type="tect" value="<?php echo $row['name'];?>"disabled>
		                    	</td>
		                    </tr>
		                    <tr>
		            			<td>
		            				<b>Father Nmae:</b>
		            			</td>
		            			<td>
		            				<input type="tect" value="<?php echo $row['father_name'];?>"disabled>
		                    	</td>
		                    </tr>
		                    <tr>
		            			<td>
		            				<b>Class:</b>
		            			</td>
		            			<td>
		            				<input type="tect" value="<?php echo $row['class'];?>"disabled>
		                    	</td>
		                    </tr>
		                    <tr>
		            			<td>
		            				<b>Mobile:</b>
		            			</td>
		            			<td>
		            				<input type="tect" value="<?php echo $row['mobile'];?>"disabled>
		                    	</td>
		                    </tr>
		                    <tr>
		            			<td>
		            				<b>Email:</b>
		            			</td>
		            			<td>
		            				<input type="tect" value="<?php echo $row['email'];?>"disabled>
		                    	</td>
		                    </tr>
		                    <tr>
		            			<td>
		            				<b>Password:</b>
		            			</td>
		            			<td>
		            				<input type="tect" value="<?php echo $row['password'];?>"disabled>
		                    	</td>
		                    </tr>
		                    
		                </table>

					<?php
				  }
				}
			?>

			

		</div>
		
	</div>

</body>
</html>
