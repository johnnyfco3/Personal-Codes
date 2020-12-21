<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Vendor</title>

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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" >Inventory</a>
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
<div class="heading">
    <h1>Vendor Information<h1>
</div>

<form class="row g-3 needs-validation" action="insertvendor.php" novalidate>
  <div class="col-md-4">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" name="company" required>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
        Please include a vendor name!
      </div>
  </div>
  <div class="col-md-4">
    <label for="Street Address" class="form-label">Street Address</label>
    <input type="text" class="form-control" name="street" required>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
        Please include a street address!
      </div>
  </div>
  <div class="col-md-4">
    <label for="City" class="form-label">City</label>
    <input type="text" class="form-control" name="city" required>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
        Please include a city!
      </div>
  </div>
  <div class="col-md-4">
    <label for="State" class="form-label">State</label>
    <input class="form-control" list="states" name="state" placeholder="Search" required>
            <datalist id="states">
                <option value="NY">
                <option value="NJ">
                <option value="AZ">
                <option value="CO">
                <option value="CA">
            </datalist>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
        Please select a state!
      </div>
  </div>
  <div class="col-md-4">
    <label for="Zip Code" class="form-label">Zip Code</label>
    <input type="text" class="form-control" name="zip" placeholder="#####" required>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
      Please include a zip code!
    </div>
  </div>
  <div class="col-md-4">
    <label for="Phone Number" class="form-label">Phone Number</label>
    <input type="tel" class="form-control" name="phone" required>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
      Please include phone number! 
    </div>
  </div>
  <div class="col-md-4">
    <label for="Fax Number" class="form-label">Fax Number</label>
    <input type="tel" class="form-control" name="fax" required>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
      Please include fax number! 
    </div>
  </div>
  <div class="col-md-4">
    <label for="Email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" placeholder="username@email.com" required>
    <div class="valid-feedback">
        Completed
    </div>
    <div class="invalid-feedback">
      Please include an email! 
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Add Vendor</button>
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