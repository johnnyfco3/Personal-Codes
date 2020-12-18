<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
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
        <h1>Add Product</h1>
    <form>
        <input type="text" placeholder="Brand" name="brand">
        <input type="text" placeholder="Description" name="description">
        <input type="text" placeholder="Product Name" name="pname">
        <input type="text" placeholder="Department" name="department">
        <input type="text" placeholder="Category" name="categroy">
        <input type="number" placeholder="Unit Price" step="0.01" name="unit">
        <input type="number" placeholder="Cost" step="0.01" name="cost">
        <input type="number" placeholder="In Stock" name="stock">
        <input type="text" placeholder="Vendor ID" name="vid">
        <input type="submit" name="submit" value="Add">
    </form>
</div>
</body>
</html>