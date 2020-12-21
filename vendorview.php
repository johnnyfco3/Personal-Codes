<?php
include_once('connection.php');
$query = "SELECT * FROM vendor";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vendors List</title>

    <!--bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--my css-->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.js"></script>
  
    <script src="https://kit.fontawesome.com/4d6919e9c0.js" crossorigin="anonymous"></script>
</head>

<body>
  <!--navigation design-->
  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Grocery <span>POS</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Inventory</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="inventoryview.php">Items List</a></li>
            <li><a class="dropdown-item" href="addproduct.php">Add Item</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Orders</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="neworder.php">New Order</a></li>
            <li><a class="dropdown-item" href="orderview.php">Orders List</a></li>
          </ul>
        </li>
        <li class="activenav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vendors</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="addvendor.php">Add Vendor</a></li>
            <li><a class="dropdown-item" href="vendorview.php">Vendors List</a></li>
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
          <a class="nav-link" href="login.php">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--page content-->
<div class="searchbar1">
  <form class="d-inline-flex" method="post" action="vendorview.php">
      <input class="form-control rounded-pill" type="search" name="vendor" placeholder="Search Vendor" aria-label="Search">
      <button class="btn btn-outline-success rounded-pill" name="submit-search" type="submit"><i class="fas fa-search"></i></button>
  </form>
</div>

<div class="table">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Vendor ID</th>
        <th scope="col">Company Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Fax Number</th>
        <th scope="col">Street Address</th>
        <th scope="col">City</th>
        <th scope="col">State</th>
        <th scope="col">Zip Code</th>
      </tr>
    </thead>
    <tbody>
          <?php
            if (isset($_POST['submit-search'])) {
              $search = mysqli_real_escape_string($conn, $_POST['vendor']);
              $sql = "SELECT * FROM vendor WHERE VID LIKE '%$search%' OR company_name LIKE '%$search%' OR street_address LIKE '%$search%' OR city LIKE '%$search%'
                      OR state LIKE '%$search%' OR zip_code LIKE '%$search%' OR phone_number LIKE '%$search%' OR fax_number LIKE '%$search%' OR email LIKE '%$search%'";
              $result = mysqli_query($conn, $sql);
              $queryResults = mysqli_num_rows($result);

              if ($queryResults > 0) {
                echo "<div class='row mt-3'>There are $queryResults results matching your search</div><br>";
                while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr><td>" . $row['VID'] . "</td><td>"
                    . $row['company_name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['phone_number'] . "</td><td>"
                    . $row['fax_number'] . "</td><td>" . $row['street_address'] . "</td><td>" . $row['city'] . "</td><td>" . $row['state'] . 
                    "</td><td>" . $row['zip_code'] . "</td></tr>";
                	}
              	} else {
                echo "<div class='row mt-3'>There are no results matching your search</div>";
              }
            } else {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['VID'] . "</td><td>"
                    . $row['company_name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['phone_number'] . "</td><td>"
                    . $row['fax_number'] . "</td><td>" . $row['street_address'] . "</td><td>" . $row['city'] . "</td><td>" . $row['state'] . 
                    "</td><td>" . $row['zip_code'] . "</td></tr>";
                	}
            }
            ?>
      </tbody>
  </table>
</div>
</body>
</html>