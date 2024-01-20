<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" media="all" href= "<?php echo "../CSS/sign.css"; ?>">
</head>

<?php
require_once('db_credentials.php');
require_once('database.php');
$db = db_connect();


if(!isset($_GET['id'])) {
  header("Location: membership.php");
}
$id = $_GET['id'];

$page_title = 'Edit Member'; 
  // Handle form values sent by new.php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  //access the employee information
  $idcard = $_POST['id'];
  $firstname = $_POST['first_name']; 
  $lastname= $_POST['last_name'] ;
  $email= $_POST['email_address'] ;
  $username= $_POST['user_name'] ;
  $phone= $_POST['phone_number'] ;
  $password = $_POST['password'] ;
  //update the table with new information
  $sql="UPDATE membership set first_name = '$firstname' , last_name= '$lastname' , email_address= '$email', user_name= '$username', phone_number= '$phone', password='$password' where id = '$id' ";
  $result = mysqli_query($db, $sql);
  //redirect to show page
    header("Location: show.php?id=  $id");
  }
  // display the employee information
  else {
$sql = "SELECT * FROM membership WHERE id= '$id' ";
    
$result_set = mysqli_query($db, $sql);
    
$result = mysqli_fetch_assoc($result_set);
  }

?>

<?php include 'header.php' ?>;

<main id="main-mem">  

<div id="content">

  <a class="back-link" href="../Server/membership.php">&laquo; Back to Member Information</a>

  <div class="page edit">
    <h3>Edit Member</h3>

    <form form action="<?php echo 'edit.php?id=' . $result['id']; ?>"  method="post">
      <dl>
        <dt>First Name:<br>
        <input type="text" name="first_name" value="<?php echo $result['first_name']; ?>" /></dt>        
      </dl>
      <dl>
        <dt>Last Name:<br>
        <input type="text" name="last_name" value="<?php echo $result['last_name']; ?>" /></dt>
      </dl>
      <dl>
        <dt>Email Address:<br>
        <input type="text" name="email_address" value="<?php echo $result['email_address']; ?>" /></dt>        
      </dl>
      <dl>
        <dt>User Name:<br>
        <input type="text" name="user_name" value="<?php echo $result['user_name']; ?>" /></dt>                
      </dl>
      <dl>
        <dt>Phone Number:<br>
        <input type="text" name="phone_number" value="<?php echo $result['phone_number']; ?>" /></dt>
      </dl>
      <dl>
        <dt>Password:<br>
        <input type="text" name="password" value="<?php echo $result['password']; ?>" /></dt>        
      </dl>
      <br>      
      <div id="operations">
        <input type="submit" value="Edit Member" />
      </div>
    </form>

  </div>

</div>

</main>

<?php 
  include ("footer.php");
?>     


