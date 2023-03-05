<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<style>
		.btn {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}
		.view-users {
			background-color: #008CBA;
		}
		.add-remove-users {
			background-color: #f44336;
		}
		.fines {
			background-color: #555555;

            
		}
	</style>
</head>
<body>
	<h1>Users Control</h1>
	<a href="View_users.php" class="btn view-users">View Users</a>
	<a href="/csi-4999-main/libraryio/register_form.php" class="btn add-remove-users">Add Users</a>
    <a href="remove_user.php" class="btn fines">Remove User</a>
    <a href="fines.php" class="btn fines">Fines</a>

    <br>
    <br>
    <a href="/csi-4999-main/libraryio/admin_page.php" class="btn">Back To Admin Page</a>
</body>
</html>