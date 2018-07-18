<?Php
	require_once("inc/config/db.php");
	session_start();
	
	if(isset($_SESSION['email']))
	{
		$email = $_SESSION['email'];
	}
	
	if(isset($_POST['next']))
	{
		header("Location: q7.php");
	}
?>
<?Php require_once("inc/templates/header.php"); ?>
	<div class="row">
		<div style="margin-top: 100px; margin-bottom: 100px" class="text-center">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="row">
					<form action="q6.php" method="post">
						<div class="col-lg-12 ">
							<div class="">
								<label>6. Will the provision of the goods / services by the third party meet the definition of a Critical and/or Material Outsourcing relationship?</label>
							</div>
							<div class="">
								<select class="form-control">
									<option value="0">Select</option>
									<option value="">Critical and/or material</option>
									<option value="">None</option>
								</select>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="grp-input">
								<a href="q5.php" class="btn btn-primary">Previous</a>
								<input type="submit" name="next" value="Next" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/header.php"); ?>