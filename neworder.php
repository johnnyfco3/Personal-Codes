<?php
include_once('connection.php');
$query = "SELECT * FROM inventory";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Order</title>

    <!--bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--my css-->
    <link rel="stylesheet" href="css/style5.css">
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
        <li class="activenav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Orders</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="neworder.php">New Orders</a></li>
            <li><a class="dropdown-item" href="orderview.php">Orders List</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
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

<form class="row g-3 needs-validation" post="post" action="" novalidate>
  <div class="col-md-6">
    <label for="Date" class="form-label">Date</label>
    <input type="date" class="form-control" name="date" readonly>
  </div>
  <div class="col-md-6">
    <label for="Type" class="form-label">Type</label>
    <input class="form-control" list="type" name="type" placeholder="Search" required>
            <datalist id="type">
                <option value="Order">
                <option value="...">
            </datalist>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
        Please select a type!
      </div>
  </div>
  <div class="col-md-6 form-group">
    <label for="vendor" class="form-label">Vendor</label>
    <select name="vendor" class="form-control" required>
        <option selected></option>
        <option>...</option>
    </select>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
        Please select a vendor!
      </div>
  </div>
  <div class="header">
      Products
  </div>
  <div class="col-md-4 form-group">
    <label for="Product" class="form-label">Product</label>
    <select name="product" class="form-control" required>
        <option selected></option>
        <option>Dairy Pure</option>
        <option>...</option>
    </select>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
        Please select a product!
      </div>
  </div>
  <div class="col-md-4">
    <label for="Quantity" class="form-label">Quantity</label>
    <input type="number" class="form-control" name="quantity" required>
  </div>
  <div class="col-md-4">
    <button class="btn btn-outline-success rounded-pill" type="submit" name="submit"><span><i class="fas fa-plus"></i></span>Add Item</button>
  </div>
</form>

<div class="table">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Product ID</th>
        <th scope="col">Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Cost</th>
        <th scope="col">Total</th>
        <th scope="col">Remove</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>

<script>
    var forms = document.querySelectorAll(".needs-validation");
    
    Array.prototype.slice.call(forms).forEach(function(form)
    {
        form.addEventListener("submit", function(event)
        {

            if(!form.checkValidity())
            {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add("was-validated");
        }, false );
    });
</script>

</body>
</html>