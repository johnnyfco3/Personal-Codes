<?php
include_once('connection.php');
include_once('sidebarconnect.php');
$query = "SELECT * FROM orders_ticket";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orders</title>
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
        <button><a class="addP" href="neworder.php" role="button"><span> New Order</span></a></button>
    </div>

    <div class="searchbar">
    <form class="form-inline" method="post" action="orderfrontpage.php">
        <input class="form-control" name="order" placeholder="Search Order" aria-label="Search">
    </div>
    
    <table>
        <thread>
            <th> Order ID </th>
            <th> Date </th>
            <th> Time </th>
            <th> Subtotal </th>
            <th> Total </th>
            <th> Tax </th>
            <th> Quantity </th>
            <th> Status </th>
        </thread>
        <tbody>
            <?php
            if (isset($_POST['submit-search'])) {
              $search = mysqli_real_escape_string($conn, $_POST['order']);
              $sql = "SELECT * FROM orders_ticket WHERE OTID LIKE '%$search%' OR date LIKE '%$search%' OR time LIKE '%$search%' OR subtotal LIKE '%$search%' OR total LIKE '%$search%' OR quantity LIKE '%$search%' OR vendor_id LIKE '%$search%'";
              $result = mysqli_query($conn, $sql);
              $queryResults = mysqli_num_rows($result);

              if ($queryResults > 0) {
                echo "<div class='row mt-3'>There are $queryResults results matching your search</div><br>";
                while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr><td>" . $row['OTID'] . "</td><td>"
                    . $row['date'] . "</td><td>" . $row['time'] . "</td><td>" . $row['subtotal'] . "</td><td>"
                    . $row['total'] . "</td><td>" . $row['tax'] . "</td><td>" . $row['quantity'] . "</td><td>" . $row['status'] . "</td></tr>";
                	}
              	} else {
                echo "<div class='row mt-3'>There are no results matching your search</div>";
              }
            } else {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['OTID'] . "</td><td>"
                    . $row['date'] . "</td><td>" . $row['time'] . "</td><td>" . $row['subtotal'] . "</td><td>"
                    . $row['total'] . "</td><td>" . $row['tax'] . "</td><td>" . $row['quantity'] . "</td><td>" . $row['status'] . "</td></tr>";
                	}
            }
            ?>
          </tbody>
    </table>
</div>
</body>
</html>
