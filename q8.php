<DOCTYPE html>
<head>
<body>
<?Php
	require_once("inc/config/db.php");
	session_start();
	
	if(isset($_SESSION['email']))
	{
		$email = $_SESSION['email'];
	}
	
	if(isset($_POST['next']))
	{
		header("Location: q9.php");
	}
?>
<?Php require_once("inc/templates/header.php"); ?>
	<div class="row">
		<div style="margin-top: 100px; margin-bottom: 100px" class="text-center">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="row">
					<form action="q8.php" method="post">
						<div class="col-lg-12 ">
							<div class="">
								<label>8. Will the third party store or process the organisation information?</label>
							</div>
							</br>
							<div class="">
								<div><Label><input type="radio" name="third_party"> Yes <input type="radio" name="third_party"> No</Label></div>
							</div>
						</div>
						<div class="col-lg-6 col-lg-offset-3 text-center">
						<div style="margin-top:60px;">
							<div class="grp-input">
							<input type="submit" name="next" value="Next" class="btn btn-primary">
								</br> </br> </br> </br>
								<a href="q7.php" >Previous</a>
								</br></br></br></br>
								<h6>Question 8 of 13</h6>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/header.php"); ?>