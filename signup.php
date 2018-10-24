<?php
require "header.php";
?>

<main>
<div >
	<section>
		<div class="container form-group col-md-3">
			<h1	for="formGroupExampleInput">Signup</h1>
			<?php
				if (isset($_GET['error'])) {
					if ($_GET['error'] == "emptyfields") {
						echo '<p class="alert alert-danger"> Fill in all fields!</p>';
					} 
					else if ($_GET['error'] == "invaliduidmail") {
						echo '<p class="alert alert-danger"> Invalid Username and Email!</p>';
					} 
					else if ($_GET['error'] == "invaliduid") {
						echo '<p class="alert alert-danger"> Invalid Username!</p>';
					} 
					else if ($_GET['error'] == "invalidmail") {
						echo '<p class="alert alert-danger"> Invalid e-mail!</p>';
					} 
					else if ($_GET['error'] == "passwordcheck") {
						echo '<p class="alert alert-danger"> The passwords do not match!</p>';
					} 
					else if ($_GET['error'] == "usertaken") {
						echo '<p class="alert alert-danger"> Username is already taken!</p>';
					}
				} 
				else if (isset($_GET['signup']) == "success") {
					echo '<p class="alert alert-success"> Signup successful!</p>';
				}
			?>
				<form action="includes/signup.inc.php" method="post">
					<input type="text" class="form-control mb-2" name="uid" placeholder="Username">
					<input type="text" class="form-control mb-2" name="mail" placeholder="E-mail">
					<input type="password" class="form-control mb-2" name="pwd" placeholder="Password">
					<input type="password" class="form-control mb-2" name="pwd-repeat" placeholder="Repeat Password">
					<button type="submit" class="col-lg btn btn-primary mt-2" name="signup-submit">Signup</button>
				</form>
		</div>
	</section>
</div>
</main>

<?php
require "footer.php";
?>