<?php
$con = mysqli_connect('localhost', 'root', '','test');

if ($con-> connect_error) {
  die("Connection failed: " . $con-> connect_error);
}

$query="select * from person";
$result= mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
  <title>Table with databases</title>
<body>
  <table align="center" border="1px" style="width:600px; line-height:40px;">
    <tr>
      <th colspan="4"><h2>Person Info</h2></th>
    </tr>
    <t>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
    </t>
  <?php
    while($rows=mysqli_fetch_array($result))
    {
  ?>
         <tr>
           <td><?php echo $rows['ID']; ?></td>
           <td><?php echo $rows['name']; ?></td>
           <td><?php echo $rows['email']; ?></td>
           </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>
