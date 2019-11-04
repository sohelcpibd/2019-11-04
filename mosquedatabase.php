 <?php
    $conn= mysqli_connect("localhost","root","","mosqueinfo");
    $sql="SELECT * FROM mosque_info";
    $result=mysqli_query($conn,$sql);


?> 
<!DOCTYPE html>
<html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

                    <title>Mosque Database</title>
                    
                </head>

<body class="container">
    
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Mosque Name</th>
      <th scope="col">Mosque Capacity</th>
      <th scope="col">Imam name</th>
      <th scope="col">Imam Contact</th>
      <th scope="col">Moazzin Name</th>
      <th scope="col">Moazzin Contact</th>
      <th scope="col">Commitee president</th>
      <th scope="col">Comitee Contact</th>
      <th scope="col">LocationMap</th>
      <th scope="col">ShowPrayerTime</th>
    </tr>
  </thead>  
                      <?php
                       if (mysqli_num_rows($result) >0){
                       While($row=mysqli_fetch_assoc($result)){              
                      ?>
                         <tbody>
                         <tr>
                           
                           <td><?php echo $row['mosque_name']  ?></td>
                           <td><?php echo $row['establish_date']  ?></td>
                           <td><?php echo $row['mosque_capacity']  ?></td>
                          <td><?php echo $row['street']  ?></td>
                           <td><?php echo $row['community']  ?></td>
                           <td><?php echo $row['district']  ?></td>
                           <td><?php echo $row['imam_name']  ?></td>
                           <td><?php echo $row['imam_contact']  ?></td>
                           <td><?php echo $row['moazzin_name']  ?></td>
                           <td><?php echo $row['moazzin_contact']  ?></td>
                          <td><?php echo $row['commitee_member']  ?></td>
                           <td><?php echo $row['landmark']  ?></td>
                           <td><?php echo $row['map_image']  ?></td>
                           
                           <td>
                            <a  href="edit.php?id=<?php echo $row['mosque_name'];?>" type="button" class="btn btn-primary">Edit</a>
                           <a  href="delete.php?id=<?php echo $row['mosque_name'];?>"  type="button" class="btn btn-primary">Delete</button> 
                          
                           </td>
                         </tr>                    
                  </tbody>

                  <?php
                }
              }

            ?>              
             

</table>
      
  </tbody>
</table>
</body>
</html>