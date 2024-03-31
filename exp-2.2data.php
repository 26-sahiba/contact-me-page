<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #222;
            color: #eee;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #333;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #444;
        }

        th {
            background-color: #444;
            font-weight: bold;
        }

        th:first-child,
        td:first-child {
            border-left: none;
        }

        th:last-child,
        td:last-child {
            border-right: none;
        }

        tr:hover {
            background-color: #555;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #eee;
        }

        .pagination {
            margin-top: 20px;
            text-align: center;
        }

        .pagination a {
            color: #eee;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
            border: 1px solid #444;
            margin: 0 4px;
            border-radius: 4px;
        }

        .pagination a.active {
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
        }

        .pagination a:hover:not(.active) {
            background-color: #444;
        }

        .search-form {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-form input[type="text"] {
            padding: 8px;
            width: 300px;
            border: 1px solid #444;
            border-radius: 4px;
            background-color: #333;
            color: #eee;
        }

        .search-form input[type="submit"] {
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .search-form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .delete-button {
            padding: 6px 12px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Contact Messages</h1>
        <div class="search-form">
            <form method="get" action="">
                <input type="text" name="search" placeholder="Search...">
                <input type="submit" value="Search">
            </form>
        </div>
        <form id="deleteForm" method="post" action="">
            <table>
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Message</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Database connection parameters
                    $servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
                    $username = "root"; // Replace with your MySQL username
                    $password = ""; // Replace with your MySQL password
                    $dbname = "test"; // Replace with your database name
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Handle deletion
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_ids'])) {
                        $delete_ids = $_POST['delete_ids'];
                        foreach ($delete_ids as $id) {
                            $sql = "DELETE FROM messages WHERE id = $id";
                            $conn->query($sql);
                        }
                    }

                    // Pagination
                    $limit = 10; // Number of records per page
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $start = ($page - 1) * $limit;

                    // Search filter
                    $search = isset($_GET['search']) ? $_GET['search'] : '';

                    // SQL query to retrieve data with pagination and search filter
                    $sql = "SELECT * FROM messages";
                    if (!empty($search)) {
                        $sql .= " WHERE name LIKE '%$search%' OR email LIKE '%$search%' OR contact LIKE '%$search%' OR message LIKE '%$search%' OR time LIKE '%$search%'";
                    }
                    $sql .= " LIMIT $start, $limit";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td><input type='checkbox' name='delete_ids[]' value='" . $row['id'] . "'></td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["contact"] . "</td>";
                            echo "<td>" . $row["message"] . "</td>";
                            echo "<td>" . $row["time"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No messages found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
            <div class="pagination">
                <?php
                // Pagination links
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT COUNT(*) AS total FROM messages";
                if (!empty($search)) {
                    $sql .= " WHERE name LIKE '%$search%' OR email LIKE '%$search%' OR contact LIKE '%$search%' OR message LIKE '%$search%' OR time LIKE '%$search%'";
                }
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $total_pages = ceil($row["total"] / $limit);

                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "<a href='?page=" . $i;
                    if (!empty($search)) {
                        echo "&search=" . urlencode($search);
                    }
                    echo "'";
                    if ($i == $page) {
                        echo " class='active'";
                    }
                    echo ">" . $i . "</a>";
                }
                $conn->close();
                ?>
            </div>
            <button type="submit" class="delete-button">Delete Selected</button>
        </form>
    </div>
    <script>
        document.getElementById('deleteForm').addEventListener('submit', function (e) {
            var confirmation = confirm("Are you sure you want to delete the selected records?");
            if (!confirmation) {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>