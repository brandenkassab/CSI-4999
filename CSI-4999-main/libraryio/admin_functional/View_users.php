<!DOCTYPE html>
<html>
<head>
    <title>View Users</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th { 
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .search-container {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        input[type=text] {
            padding: 10px;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
            background-color: #f2f2f2;
        }
        button[type=submit] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
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