<!DOCTYPE html>
<html>
<head>
    <title>View Users</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #C2CAD0;
			padding: 20px;
		}
		h1 {
			color: #333333;
			margin-bottom: 20px;
		}
		form {
			background-color: #7E685A;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
		}
		label {
			display: block;
			margin-bottom: 10px;
			color: #7E685A;
			font-weight: bold;
		}
		input[type="text"],
		input[type="number"] {
			padding: 10px;
			border: 1px solid #C2B9B0;
			border-radius: 3px;
			width: 100%;
			box-sizing: border-box;
			margin-bottom: 20px;
		}
		input[type="submit"] {
			background-color: #C2B9B0;
			color: #ffffff;
			padding: 10px 20px;
			border-radius: 3px;
			border: none;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #C2B9B0;
		}
		p.success {
			color: #C2B9B0;
			font-weight: bold;
		}
		p.error {
			color: #C2B9B0;
			font-weight: bold;
		}
	
        .btn {
			background-color:#C2B9B0 ;
			color: #7E685A;
			padding: 10px 20px;
			border-radius: 3px;
			border: none;
			cursor: pointer;
			margin-top: 20px;
			display: inline-block;
			text-decoration: none;
            
		}
		.btn:hover {
			background-color: #C2B9B0;
		}
    
    
    </style>
</head>
<body>
    <h1>Users</h1>
    <div class="search-container">
        <form method="post">
            <input type="text" placeholder="Search by name or email" name="search_query">
            <button type="submit">Search</button>
        </form>
    </div>
    <?php
    
    $conn = mysqli_connect("localhost", "root", "", "user_db");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    if (isset($_POST["search_query"])) {
        $search_query = $_POST["search_query"];
        $sql = "SELECT * FROM user_form WHERE name LIKE '%$search_query%' OR email LIKE '%$search_query%'";
    } else {
        $sql = "SELECT * FROM user_form";
    }
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>User Type</th><th>VST_CUR</th><th>VST_HIST</th><th>VST_FEE</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td>" . $row["user_type"] . "</td>";
            echo "<td>" . $row["VST_CUR"] . "</td>";
            echo "<td>" . $row["VST_HIST"] . "</td>";
            echo "<td>" . $row["VST_FEE"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No users found.";
    }

    mysqli_close($conn);
    ?>
</body>
</html>
