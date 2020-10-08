<html>
<head>
  <title>Table with databases</title>
</head>
<body>
<table>
  <tr>
    <th>Employee_information</th>
    <th>First Name</th>
    <th>Middle In</th>
    <th>Last Name</th>
    <th>User ID</th>
    <th>Phone Number</th>
    <th>SSN</th>
    <th>Street Address</th>
    <th>City</th>
    <th>State</th>
    <th>Zip Code</th>
    <th>Start Date</th>
    <th>End Date</th>
  </tr>

  <?php

  $con = mysqli_connect('localhost', 'root', '', 'GroceryStore');

  if($con-> connect_error)
  {
    die("Connection failed:" . $con-> connect_error);
  }

  $sql = "SELECT * FROM 'employee_info'";
  $result = $con-> query($sql);

  if($result-> num_rows > 0)
  {
    while($row = $result-> fetch_assoc())
    {
        echo "<tr>
           <td>". $row['Employee_information'] . "</td>
           <td>". $row['First Name'] . "</td>
           <td>". $row['Middle In.'] . "</td>
           <td>". $row['Last Name'] . "</td>
           <td>". $row['User ID'] . "</td>
           <td>". $row['Phone Number'] . "</td>
           <td>". $row['SSN'] . "</td>
           <td>". $row['Street Address'] . "</td>
           <td>". $row['City'] . "</td>
           <td>". $row['State'] . "</td>
           <td>". $row['Zip Code'] . "</td>
           <td>". $row['Start Date'] . "</td>
           <td>". $row['End Date'] . "</td>
           </tr>";
    }
    echo "</table>";
  }
  $con-> close();
  ?>
</table>
</body>
</html>
