<?php
	session_start();
	$_SESSION['image'] = $_FILES;
	$target ="../Views/img/".basename($_FILES['image']['name']);
	
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
		{
			echo "imaged added";
		}
		else
		{
			echo "problem";
		}
		
		
	//var_dump($_SESSION);
?>

<body>
	
	<table align="center" border="1" width="1000" height="550"  cellpadding="10" cellspacing="0" >
		
		<tr>
			<td height="30" align="center">
			<img src = "img/charity.jpg" align = "center" alt = "campaign.jpg" width = "200px" height = "100" align = "right" >
			</td>
		</tr>
		<tr>
			<td height="20">
				
				<a href="index.html">Home</a>&nbsp &nbsp &nbsp
				<a href="login.html">Login</a> &nbsp &nbsp &nbsp
				<a href="registration.html">Register</a>
				
			</td>			
		</tr >	
		
		<tr>
				
			<td>
				
				<!-- <h1> -->
					<!-- This page is to create new fund rising event -->
				<!-- </h1> -->
				<!-- <B> -->
					<!-- choose your causes -->
				<!-- </B> -->
				

				<form action="../Controllers/campaignCharity_post_controller.php" method="post">
					<fieldset width="400">
					<table align="center">
					
						<tr>
							<td>
								<h2>
									charity
								</h2>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="charityName" />
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="submit" value="Submit"/>
							</td>
						</tr>
						
					</table>
					</fieldset>
					
				</form>
		
			</td>
												
		</tr>
		
		<tr height="5">
			<td  valign="top" colspan="2"><center>Copyright 2017</center></td>
		</tr>	
	</table>
</body>
