<?php
include_once('connection.php');
include_once('sidebarconnect.php');
$query = "SELECT * FROM inventory";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inventory</title>
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
        <button><a class="addP" href="addproduct.php" role="button"><span> Add New Product</span></a></button>
    </div>

    <div class="searchbar">
    <form class="form-inline" method="post" action="inventoryfrontpage.php">
        <input class="form-control" name="product" placeholder="Search Product" aria-label="Search">
    </div>
    
    <table>
        <thread>
            <th> ID </th>
            <th> Brand </th>
            <th> Description </th>
            <th> Product Name </th>
            <th> Product Type </th>
            <th> Product SubType </th>
            <th> Cost </th>
            <th> Unit Price </th>
            <th> In Stock </th>
            <th> Vendor Id </th>
        </thread>
        <tbody>
            <?php
            if (isset($_POST['submit-search'])) {
              $search = mysqli_real_escape_string($conn, $_POST['product']);
              $sql = "SELECT * FROM inventory WHERE IVID LIKE '%$search%' OR product_name LIKE '%$search%' OR product_type LIKE '%$search%' OR product_subType LIKE '%$search%' OR brand LIKE '%$search%'";
              $result = mysqli_query($conn, $sql);
              $queryResults = mysqli_num_rows($result);

              if ($queryResults > 0) {
                echo "<div class='row mt-3'>There are $queryResults results matching your search</div><br>";
                while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr><td>" . $row['IVID'] . "</td><td>"
                    . $row['brand'] . "</td><td>" . $row['description'] . "</td><td>" . $row['product_name'] . "</td><td>"
                    . $row['product_type'] . "</td><td>" . $row['product_subType'] . "</td><td>" . $row['cost'] . "</td><td>" . $row['unit_price'] . "</td><td>"
                    . $row['in_stock'] . "</td></tr>";
                	}
              	} else {
                echo "<div class='row mt-3'>There are no results matching your search</div>";
              }
            } else {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['IVID'] . "</td><td>"
                    . $row['brand'] . "</td><td>" . $row['description'] . "</td><td>" . $row['product_name'] . "</td><td>"
                    . $row['product_type'] . "</td><td>" . $row['product_subType'] . "</td><td>" . $row['cost'] . "</td><td>" . $row['unit_price'] . "</td><td>"
                    . $row['in_stock'] . "</td></tr>";
                	}
            }
            ?>
          </tbody>
    </table>
</div>
</body>
</html>

