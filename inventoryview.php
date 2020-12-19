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
    <title>Search Item</title>

    <!--bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--my css-->
    <link rel="stylesheet" href="teststyle.css">
    <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.bundle.js"></script>
  
    <script src="https://kit.fontawesome.com/4d6919e9c0.js" crossorigin="anonymous"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Grocery <span>POS</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ">
        <li class="active">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Inventory</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="inventoryview.php">Search Item</a></li>
            <li><a class="dropdown-item" href="addproduct.php">Add Product</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Orders</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">New Order</a></li>
            <li><a class="dropdown-item" href="#">Continue Order</a></li>
            <li><a class="dropdown-item" href="#">Search Orders</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vendors</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Add Vendor</a></li>
            <li><a class="dropdown-item" href="#">Search Vendor</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Employees</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Add Employee</a></li>
            <li><a class="dropdown-item" href="#">Search Employee</a></li>
            <li><a class="dropdown-item" href="#">Payroll</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Reports</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">End Of Day</a></li>
            <li><a class="dropdown-item" href="#">Totals</a></li>
            <li><a class="dropdown-item" href="#">Sales Over Time</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="table">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Brand</th>
      <th scope="col">Description</th>
      <th scope="col">Product Name</th>
      <th scope="col">Department</th>
      <th scope="col">Category </th>
      <th scope="col">Cost</th>
      <th scope="col">Unit Price</th>
      <th scope="col">In Stock</th>
    </tr>
  </thead>
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
                    . $row['product_type'] . "</td><td>" . $row['product_subType'] . "</td><td>$" . $row['cost'] . "</td><td>$" . $row['unit_price'] . "</td><td>"
                    . $row['in_stock'] . "</td></tr>";
                	}
              	} else {
                echo "<div class='row mt-3'>There are no results matching your search</div>";
              }
            } else {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['IVID'] . "</td><td>"
                    . $row['brand'] . "</td><td>" . $row['description'] . "</td><td>" . $row['product_name'] . "</td><td>"
                    . $row['product_type'] . "</td><td>" . $row['product_subType'] . "</td><td>$" . $row['cost'] . "</td><td>$" . $row['unit_price'] . "</td><td>"
                    . $row['in_stock'] . "</td></tr>";
                	}
            }
            ?>
          </tbody>
</table>
</div>
</body>
</html>