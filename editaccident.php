<?php
session_start();
include_once('db.php');
mysqli_select_db($connection,'demo');
$email=$_SESSION['email'];
$query1="select * from locationsnew where email ='$email' order by id desc limit 1";
$result1=mysqli_query($connection,$query1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Driver</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="sidebar.css">
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        #map{
            height: 500px;
            width: 85%;
        }
        input
{
border:none;
padding:20px 0px;
width:200px;
font-size:0.9em;
height: 1px;
}


button
{
background:#2c98e0;
height: 30px;
text-align:center;
width:180px;
border-radius:5px;
font-size:1em;
color:#fff;
margin-top:10px;
cursor:pointer;
-webkit-transition:0.5s ease;-moz-transition:0.5s ease;transition:0.5s ease;
}


button:hover{background:#1c7dbe;-webkit-transition:0.5s ease;-moz-transition:0.5s ease;transition:0.5s ease;}
    </style>
</head>
<body>
    <div class="container">
<nav role="navigation">
  <div id="menuToggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <ul id="menu">
      <a href="Driver.php"><li>Home</li></a>
      <a href="Dmainpolice.php"><li>Police Stations</li></a>
      <a href="Dmaininsurance.php"><li>Insurance Companies</li></a>
      <a href="DmainRDA.php"><li>RDA</li></a>
      <a href="Dbargraph.php"><li>Accidents</li></a>
      <a href="upload.php"><li>Report an Accident</li></a>
      <a href="Drivermessage.php"><li>Messages</li></a>
      <a href="editaccident.php"><li>Edit Last Accident</li></a>
      <a href="main.php"><li>Sign Out</li></a>
    </ul>
  </div>
</nav>
</div>

    <!--topic-->

        <center><h1 id="headtopic"><a href="Driver.php" style="text-decoration: none;color: white;">Mr.Reporter</a></h1></center>
        <br>
    <h2><center>Edit Accident</center></h2>
    <br>

<center>
<!--Accident Details/Accident-->
<?php
while($rows=mysqli_fetch_array($result1))
{
?>
<div style="width: 50%;height:auto;text-align: left;background-color: #808080;padding-left: 50px;padding-top: 50px;padding-right: 50px;">
    <?php 
    $id=$rows['id'];
    $_SESSION['id']=$id; ?>
        Latitude: <?php echo $rows['lat']; ?><br>
        Longitude: <?php echo $rows['lng']; ?>    <button><a href="edit.php" style="text-decoration: none;color: white;">Update Location</a></button><br><hr><br>
        Description: <?php echo $rows['description']; ?><br><form action="editdescription.php" method="post" enctype="multipart/form-data">
            <input type="text" hidden="" name="id" value="<?php echo $rows['id']; ?>">
            <textarea name="editdescription" placeholder="new description"></textarea>    <button type="submit">Update</button></form><hr><br>

        Time: <?php echo $rows['time']; ?><form action="edittime.php" method="post" enctype="multipart/form-data">
            <input type="text" hidden="" name="id" value="<?php echo $rows['id']; ?>">
            <input type="Time" name="edittime">   <button type="submit">Update</button></form><hr><br>

        Date: <?php echo $rows['date']; ?><form action="editdate.php" method="post" enctype="multipart/form-data">
            <input type="text" hidden="" name="id" value="<?php echo $rows['id']; ?>">
            <input type="Date" name="editdate">   <button type="submit">Update</button></form><hr><br>

        District: <?php echo $rows['district']; ?><form action="editdistrict.php" method="post" enctype="multipart/form-data">
            <input type="text" hidden="" name="id" value="<?php echo $rows['id']; ?>">
            <select name="editdistrict" type="text">
                                   <option value='Ampara' type='text'>Ampara</option>
                                   <option value='Anuradhapura' type='text'>Anuradhapura</option>
                                   <option value='Badulla' type='text'>Badulla</option>
                                   <option value='Baticaloa' type='text'>Baticaloa</option>
                                   <option value='Colombo' type='text'>Colombo</option>
                                   <option value='Galle' type='text'>Galle</option>
                                   <option value='Gampaha' type='text'>Gampaha</option>
                                   <option value='Hambantota' type='text'>Hambantota</option>
                                   <option value='Jaffna' type='text'>Jaffna</option>
                                   <option value='Kalutara' type='text'>Kalutara</option>
                                   <option value='Kandy' type='text'>Kandy</option>
                                   <option value='Kegalle' type='text'>Kegalle</option>
                                   <option value='Kilinochchi' type='text'>Kilinochchi</option>
                                   <option value='Kurunegala' type='text'>Kurunegala</option>
                                   <option value='Matale' type='text'>Matale</option>
                                   <option value='Mannar' type='text'>Mannar</option>
                                   <option value='Monaragala' type='text'>Monaragala</option>
                                   <option value='Mullaitivu' type='text'>Mullaitivu</option>
                                   <option value='Nuwara Eliya' type='text'>Nuwara Eliya</option>
                                   <option value='Polonnaruwa' type='text'>Polonnaruwa</option>
                                   <option value='Puttalam' type='text'>Puttalam</option>
                                   <option value='Ratnapura' type='text'>Ratnapura</option>
                                   <option value='Trincomalee' type='text'>Trincomalee</option>
                                   <option value='Vavuniya' type='text'>Vavuniya</option>
                                </select>   <button type="submit">Update</button></form><hr><br>

        Address: <?php echo $rows['address']; ?><form action="editaddress.php" method="post" enctype="multipart/form-data">
            <input type="text" hidden="" name="id" value="<?php echo $rows['id']; ?>">
            <input type="Text" name="editaddress" placeholder="new Address">    <button type="submit">Update</button></form><hr><br>
<?php
}
?>
<?php
$query2="select * from upload where idaccident ='$id'";
$result2=mysqli_query($connection,$query2);
while($rows=mysqli_fetch_array($result2)){
?>
<img src="<?php echo $rows['location']; ?>" style="height: 100px;width: 100px;">

<form action="editphotos.php" method="post" enctype="multipart/form-data"><input type="text" hidden="" name="id" value="<?php echo $rows['Id']; ?>">
    <input type='file' name='userfile' id='userfile' multiple>    <button type="submit">Update</button></form>


<form action="removephotos.php" method="post" enctype="multipart/form-data"><input type="text" hidden="" name="id" value="<?php echo $rows['Id']; ?>">    <button type="submit">Remove</button></form><br><hr><br>
<?php
}
?>
Add Photos :<form action="addphotos.php" method="post" enctype="multipart/form-data">
    <input type="text" hidden="" name="id" value="<?php echo $id; ?>">
    <input type='file' name='upload[]' id='userfile' multiple>
        <button type="submit">Add photos</button></form>
<br>
      <br>
</div>
<form action="removeaccident.php" method="post" enctype="multipart/form-data">
    <input type="text" hidden="" name="id" value="<?php echo $id; ?>">
        <button type="submit" style="height: 50px;width: 300px;"><b>Remove Accident</b></button></form>
<button style="height: 50px;width: 300px;"><a href="Driver.php" style="text-decoration: none;color: white;"><b>Finish</b></a></button><br><br><br>
</center>
</body>
</html>