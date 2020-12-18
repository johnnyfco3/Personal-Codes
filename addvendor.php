<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Vendor</title>
    <link rel="stylesheet" href="style3.css">
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

    <div class="form-content">
        <h1>Add Vendor</h1>
    <form>
        <input type="text" placeholder="Company Name" name="company">
        <input type="text" placeholder="Street Address" name="street">
        <input type="text" placeholder="City" name="city">
        <input type="text" placeholder="State" name="state">
        <input type="text" placeholder="Zip Code" name="zip">
        <input type="number" placeholder="Phone Number" name="phone">
        <input type="number" placeholder="Fax Number" name="fax">
        <input type="text" placeholder="Email" name="email">
        <input type="submit" name="submit" value="Add">
    </form>
</div>
</body>
</html>