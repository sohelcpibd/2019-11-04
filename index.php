<?php

include'connection.php';
if(isset($_POST['submit'])){
    $mosqname=$_POST["msqname1"];
    $estd=$_POST['estdate1'];
    $msqcap=$_POST['msqcapacity1'];
    $strt=$_POST['strt1'];
    $comnty=$_POST['cmnt1'];
    $dist=$_POST['dstr1'];
    $imname=$_POST['imname1'];
    $imcont=$_POST['imcontact1'];
    $mname=$_POST['moazname1'];
    $mcont=$_POST['moazcontact1'];
    $cname=$_POST['president1'];
    $ccont=$_POST['precontact1'];
    $landm=$_POST['landmark1'];
    $map=$_POST['maping1'];
  

    $sql="insert into mosque_info(mosque_name,establish_date,mosque_capacity,street,community,district,
    imam_name,imam_contact,moazzin_name,moazzin_contact,commitee_member,commitee_contact,landmark,map_image)VALUES(
        '$mosqname','$estd','$msqcap','$strt','$comnty','$dist','$imname','$imcont','$mname','$mcont','$cname',
        '$ccont','$landm','$map')";

                        $query=mysqli_query($conn,$sql);
                        if($query){
                            echo("Weldone");
                            header("location:mosquedatabase.php");
                        }
                        else{
                            echo "you are not connected with database";
                        }
}

// if (isset($_POST!$conn)
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
 <style>
.container{
    width:400px !important ;
}
.heading{
    font-size:20px;
    alignment:center;   
}
</style>
<script type="text/javascript">
function validation(){
  var mname = document.getElementById("msqname");
  var esdate = document.getElementById("estdate");
  var mcapacity = document.getElementById("msqcapacity");
  var stret = document.getElementById("strt");
  var comunty = document.getElementById("cmnt");
  var distr = document.getElementById("dstr");
  var imaname = document.getElementById("imname");
  var imamcon = document.getElementById("imcontact");
  var moazname = document.getElementById("moazname");
  var moazcont = document.getElementById("moazcontact");
  var presid = document.getElementById("president");
  var presidcont = document.getElementById("precontact");
  var lmark = document.getElementById("landmark");
  var map = document.getElementById("mapimg");
  
  if (mname.value=="" || esdate.value=="" || mcapacity.value=="" 
  || distr.value =="" || imaname.value=="" || imamcon.value=="" ||moazcont.value==""
                      ||presid.value=="" ||presidcont.value==""|| lmark.value==""|| map.value=="" )
    {
      alert("no empty allowed");
     return false;
    }
    Else
    {
    return true;
    }
    }
</script>
</head>
<body>
    
<form class="container" method="post" onsubmit="return validation()" action="">
   
              <h4 class="heading"> Insert Mosque Information</h4>
    <label >Mosque_Name</label>
    <input type="text" class="form-control" id="msqname" name="msqname1" aria-describedby="emailHelp" >
    <label>establish_date</label>
    <input type="date" class="form-control" id="estdate" name="estdate1"  >
    <label>mosque_capacity</label>
    <input type="text" class="form-control" id="msqcapacity" name="msqcapacity1"  >
    <label>street</label>
    <input type="text" class="form-control" id="strt" name= "strt1" >
    <label>community</label>
    <input type="text" class="form-control" id="cmnt" name="cmnt1"  >
    <label>district</label>
    <input type="text" class="form-control" id="dstr" name="dstr1"  >
    <label>imam_name	</label>
    <input type="text" class="form-control" id="imname" name="imname1"  >
    <label>imam_contact</label>
    <input type="text" class="form-control" id="imcontact" name="imcontact1"  >
    <label>moazzin_name</label>
    <input type="text" class="form-control" id="moazname" name="moazname1"  >
    <label>moazzin_contact</label>
    <input type="text" class="form-control" id="moazcontact" name="moazcontact1"  >
    <label>commitee_member	</label>
    <input type="text" class="form-control" id="president"  name="president1" >
    <label>commitee_contact	</label>
    <input type="text" class="form-control" id="precontact" name= "precontact1" >
    <label>landmark	</label>
    <input type="text" class="form-control" id="landmark" name="landmark1"  >
    <label>map_image</label>
    <input type="text"  class="form-control" id="mapimg" name="maping1"  >

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
   
</form>
</body>
</html>

