<?php
include_once('connection.php');
include_once('sidebarconnect.php');
$query = "SELECT * FROM vendor";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vendors</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4d6919e9c0.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div class="title">Grocery <span>POS</span></div>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-cash-register"></i>Register</a></li>
            <li><a href="inventoryfrontpage.php"><i class="fas fa-shopping-basket"></i>Inventory</a></li>
            <li><a href="orderfrontpage.php"><i class="fas fa-truck-loading"></i>Orders</a></li>
            <li><a href="vendorfrontpage.php"><i class="fas fa-building"></i>Vendors</a></li>
            <li><a href="#"><i class="fas fa-users"></i>Employees</a></li>
            <li><a href="#"><i class="fas fa-file-alt"></i>Reports</a></li>
            <li><a href="#"><i class="fas fa-random"></i>Switch User</a></li>
        </ul>
    </nav>

<div class="content">
    <div class="add">
        <button><a class="addP" href="addvendor.php" role="button"><span> Add New Vendor</span></a></button>
    </div>

    <div class="searchbar">
    <form class="form-inline" method="post" action="vendorfrontpage.php">
        <input class="form-control" name="vendor" placeholder="Search Vendor" aria-label="Search">
    </div>
    
    <table>
        <thread>
            <th> Vendor ID </th>
            <th> Company Name </th>
            <th> Street Address </th>
            <th> City </th>
            <th> State </th>
            <th> Zip Code </th>
            <th> Phone Number </th>
            <th> Fax Number </th>
            <th> Email </th>
        </thread>
        <tbody>
            <?php
            if (isset($_POST['submit-search'])) {
              $search = mysqli_real_escape_string($conn, $_POST['vendor']);
              $sql = "SELECT * FROM vendor WHERE VID LIKE '%$search%' OR street_address LIKE '%$search%' OR city LIKE '%$search%' OR state LIKE '%$search%' OR zip_code LIKE '%$search%' OR phone_number LIKE '%$search%' OR fax_number LIKE '%$search%' OR email LIKE '%$search%'";
              $result = mysqli_query($conn, $sql);
              $queryResults = mysqli_num_rows($result);

              if ($queryResults > 0) {
                echo "<div class='row mt-3'>There are $queryResults results matching your search</div><br>";
                while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr><td>" . $row['VID'] . "</td><td>"
                    . $row['company_name'] . "</td><td>" . $row['street_address'] . "</td><td>" . $row['city'] . "</td><td>"
                    . $row['state'] . "</td><td>" . $row['zip_code'] . "</td><td>" . $row['phone_number'] . "</td><td>" . $row['email'] . "</td></tr>";
                	}
              	} else {
                echo "<div class='row mt-3'>There are no results matching your search</div>";
              }
            } else {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['VID'] . "</td><td>"
                    . $row['company_name'] . "</td><td>" . $row['street_address'] . "</td><td>" . $row['city'] . "</td><td>"
                    . $row['state'] . "</td><td>" . $row['zip_code'] . "</td><td>" . $row['phone_number'] . "</td><td>" . $row['email'] . "</td></tr>";
                	}
            }
            ?>
          </tbody>
    </table>
</div>
</body>
</html>