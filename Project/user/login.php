<?php
$modalHTML = '
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <div class="icon-box">
                    <i class="material-icons">&#xE5CD;</i>
                </div>                        
                <h4 class="modal-title w-100">Are you sure?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Do you really want to delete these records? This process cannot be undone.</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/login.css">
	<script>
		function showError(message) {
			alert(message);
		}
	</script>
</head>
<body>
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<?php
		session_start();
		include "../admin/config.php";
		include 'rig.php';
		if (isset($_POST['login'])) {
			$name = $_POST['name'];
			$pass = $_POST['pswd'];
			$query = "SELECT * FROM `users` WHERE name = '$name' && password = '$pass'";
			$result = mysqli_query($con, $query);
			if ($result) {
				$row = mysqli_fetch_assoc($result);
				if ($row) {
					if ($row["role"] == 'admin') {
						$_SESSION["name"] = $row["name"];
						$_SESSION["id"] = $row["id"];
						header("Location: ../admin/index.php");
					} elseif ($row["role"] == 'tester') {
						$_SESSION["name"] = $row["name"];
						$_SESSION["id"] = $row["id"];
						header("Location: ../tester/index.php");
					} elseif ($row["role"] == 'user') {
						$_SESSION["name"] = $row["name"];
						$_SESSION["id"] = $row["id"];	
						header("Location: index.php");
					}
				} else {
					echo '<script>showError("Invalid User");</script>';
				}
			} else {
				echo '<script>showError("Database Error");</script>';
			}
		}
		?>
		<div class="login">
			<form method="post">
				<label for="chk" aria-hidden="true">Login</label>
				<input type="name" name="name" placeholder="Name" required="">
				<input type="password" name="pswd" placeholder="Password" required="">
				<button name="login">Login</button>
			</form>
		</div>
	</div>
</body>
</html>
