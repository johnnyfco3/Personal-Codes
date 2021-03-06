<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>

    <!--bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--my css-->
    <link rel="stylesheet" href="css/style.css">
    <!--my css-->
    <link rel="stylesheet" href="css/style1.css">
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
        <li class="activenav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" >Inventory</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="inventoryview.php">Search Item</a></li>
            <li><a class="dropdown-item" href="addproduct.php">Add Product</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Orders</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="neworder.php">New Order</a></li>
            <li><a class="dropdown-item" href="orderview.php">Orders List</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vendors</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="addvendor.php">Add Vendor</a></li>
            <li><a class="dropdown-item" href="vendorview.php">Search Vendor</a></li>
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
<div class="heading">
    <h1>Product Information<h1>
</div>

<form class="row g-3 needs-validation" action="insertproduct.php" novalidate>
  <div class="col-md-4">
    <label for="Product Name" class="form-label">Product Name</label>
    <input type="text" class="form-control" name="pname" required>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
        Please include a product name!
      </div>
  </div>
  <div class="col-md-4 form-group">
    <label for="department" class="form-label">Department</label>
    <select name="department" class="form-control" required>
        <option selected></option>
        <option>Dairy</option>
        <option>Grocery</option>
        <option>Produce</option>
        <option>Poultry</option>
    </select>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
        Please select a department!
      </div>
  </div>
  <div class="col-md-4">
    <label for="Category" class="form-label">Category</label>
    <input type="text" class="form-control" name="category" required>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
        Please include a category!
      </div>
  </div>
  <div class="col-md-4">
    <label for="Brand" class="form-label">Brand</label>
    <input type="text" class="form-control" name="brand" required>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
        Please include a brand!
      </div>
  </div>
  <div class="col-md-4">
    <label for="In Stock" class="form-label">In Stock</label>
    <input type="number" class="form-control" name="stock" required step="1">
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
      Please include in stock amount!
    </div>
  </div>
  <div class="col-md-4">
    <label for="Cost" class="form-label">Cost</label>
    <input type="number" class="form-control" name="cost" required step="0.01">
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
      Please include cost! ex: 0.01 
    </div>
  </div>
  <div class="col-md-4">
    <label for="Unit Price" class="form-label">Unit Price</label>
    <input type="number" class="form-control" name="unit" required step="0.01">
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
      Please include unit price! ex: 0.01 
    </div>
  </div>
  <div class="col-md-4">
    <label for="vendor" class="form-label">Vendor ID</label>
    <input class="form-control" list="datalistOptions1" name="vendor" placeholder="Look Up" required>
            <datalist id="datalistOptions1">
                <option value="...">
            </datalist>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
        Please select a vendor!
      </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Add Item</button>
  </div>
</form>
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