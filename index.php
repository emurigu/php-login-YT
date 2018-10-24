<?php
require "header.php";
?>

<main>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col col-lg-2">
    		</div>
			<div class="col col-lg-2">
			<?php
				if (isset($_SESSION['userId'])){
					echo '<p>You are Logged in</p>';
				} else {
					echo '<p>You are Logged out</p>';
				}
			?>
			</div>
			<div class="col col-lg-2">
    		</div>
		</div>
	</div>
</main>

<?php
require "footer.php";
?>