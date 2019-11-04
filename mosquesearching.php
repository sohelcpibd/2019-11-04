<?php
    $conn= mysqli_connect("localhost","root","","mosqueinfo");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"  href="main.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class='container'>
  <form method="post" action="resultmosqueserch.php">
  <p> <h4>Select Street</h4></p>
    <select>
<?php
$res= mysqli_query($conn,"select * from mosque_info");
while($row=mysqli_fetch_array($res))
{
?>

<option id="street"><?php echo $row["street"];?></option>
<?php
}
?>
  </select>
  <p> <h4>Select Community</h4></p>
  <select>
<?php
$res= mysqli_query($conn,"select * from mosque_info");
while($row=mysqli_fetch_array($res))
{
?>

<option id="community"><?php echo $row["community"];?></option>
<?php
}
?>
  </select>
  <p> <h4>Select District</h4></p>
  <select>
<?php
$res= mysqli_query($conn,"select * from mosque_info");
while($row=mysqli_fetch_array($res))
{
?>

<option id="district"><?php echo $row["district"];?></option>
<?php
}
?>
  </select>
  </br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button> 
   </form>
</body>
</html>