<!-- <?php
    include 'database.php';
    $sql="SELECT * FROM user";
    $result=mysqli_query($conn,$sql);


?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>

    <style>

}</style>
</head>

<body class="container">
    
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Mosque Name</th>
      <th scope="col">fazar</th>
      <th scope="col">zohor</th>
      <th scope="col">Asr</th>
      <th scope="col">Magrib</th>
      <th scope="col">Asha</th>
      <th scope="col">Tarabih</th>
      <th scope="col">Kyamul Lail</th>
      <th scope="col">Jumuah</th>
      <th scope="col">Eid Al Fitr</th>
      <th scope="col">Eid Al Adha</th>

    </tr>
  </thead>  
          <!-- <?php
              if (mysqli_num_rows($result) >0){

                While($row=mysqli_fetch_assoc($result)){

                  ?>
                  
                         <tbody>
                         <tr>
                           
                           <td><?php echo $row['id']  ?></td>
                           <td><?php echo $row['fname']  ?></td>
                           <td><?php echo $row['email']  ?></td>
                           <td>
                           <a  href="edit.php?id=<?php echo $row['id'];?>" type="button" class="btn btn-primary">Edit</a>
                           <a  href="delete.php?id=<?php echo $row['id'];?>"  type="button" class="btn btn-primary">Delete</button>
                           </td>
                         </tr>                    
                  </tbody>

                  <?php
                }
              }

            ?>              -->
             

</table>
      
  </tbody>
</table>
</body>
</html>