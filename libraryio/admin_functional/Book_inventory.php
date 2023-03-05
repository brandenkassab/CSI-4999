<!DOCTYPE html>
<html>
<head>
	<title>Add Book</title>
    


    <style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			padding: 20px;
		}
		h1 {
			color: #333333;
			margin-bottom: 20px;
		}
		form {
			background-color: #ffffff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
		}
		label {
			display: block;
			margin-bottom: 10px;
			color: #333333;
			font-weight: bold;
		}
		input[type="text"],
		input[type="number"] {
			padding: 10px;
			border: 1px solid #cccccc;
			border-radius: 3px;
			width: 100%;
			box-sizing: border-box;
			margin-bottom: 20px;
		}
		input[type="submit"] {
			background-color: #333333;
			color: #ffffff;
			padding: 10px 20px;
			border-radius: 3px;
			border: none;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #555555;
		}
		p.success {
			color: #008000;
			font-weight: bold;
		}
		p.error {
			color: #ff0000;
			font-weight: bold;
		}
	
        .btn {
			background-color:#FF0000 ;
			color: #ffffff;
			padding: 10px 20px;
			border-radius: 3px;
			border: none;
			cursor: pointer;
			margin-top: 20px;
			display: inline-block;
			text-decoration: none;
            
		}
		.btn:hover {
			background-color: #555555;
		}
    
    
    </style>























</head>
<body>




	<h1>Add Book</h1>
	<a href="Remove_book.php" class="btn">Click Here to Go to Remove Book Page</a>
    <br>
    <br>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="isbn">ISBN:</label>
		<input type="text" name="isbn" required><br>

		<label for="title">Title:</label>
		<input type="text" name="title" required><br>

		<label for="year">Year:</label>
		<input type="number" name="year" required><br>

		<label for="fr_sale">Fr Sale:</label>
		<input type="number" name="fr_sale" required><br>

		<label for="cost">Cost:</label>
		<input type="number" name="cost" required><br>

		<label for="au_id">Author ID:</label>
		<input type="number" name="au_id" required><br>

		<label for="sst_id">SST ID:</label>
		<input type="number" name="sst_id" required><br>

		<input type="submit" name="submit" value="Submit">

		

        
	</form>

	<a href="/csi-4999-main/libraryio/admin_page.php" class="btn">Back To Admin Page</a>

	<?php
	
	if (isset($_POST['submit'])) {
		
		$db = new mysqli('localhost', 'root', '', 'user_db');

		
		if ($db->connect_errno) {
			echo '<p>Failed to connect to database: ' . $db->connect_error . '</p>';
			exit();
		}

		
		$stmt = $db->prepare("INSERT INTO book (BOOK_ISBN, BOOK_TITLE, BOOK_YEAR, BOOK_FR_SALE, BOOK_COST, AU_ID, SST_ID) VALUES (?, ?, ?, ?, ?, ?, ?)");

		
		$stmt->bind_param("isiiiii", $_POST['isbn'], $_POST['title'], $_POST['year'], $_POST['fr_sale'], $_POST['cost'], $_POST['au_id'], $_POST['sst_id']);

		
		if ($stmt->execute()) {
			echo '<p>Book added successfully.</p>';
		} else {
			echo '<p>Error adding book: ' . $stmt->error . '</p>';
		}


		$stmt->close();
		$db->close();
	}
	?>
</body>
</html>