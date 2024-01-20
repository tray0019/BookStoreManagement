<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" media="all" href= "<?php echo "../CSS/sign.css"; ?>">
</head>

<?php
  include "header.php" ;
  require_once('db_credentials.php');
  require_once('database.php');  
  $db = db_connect();

  if(!isset($_GET['id'])) {
    header("Location:  ../../index.php");
  }
  $id = $_GET['id'];

  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sql = "DELETE FROM membership WHERE id ='$id'";
    $result = mysqli_query($db, $sql);
    header("Location: membership.php");

  } 
  else 
  {
    $sql = "SELECT * FROM membership WHERE id= '$id' ";   
    $result_set = mysqli_query($db, $sql);
    $result = mysqli_fetch_assoc($result_set);   
  }
?>

<?php $page_title = 'Delete Member'; ?>

<main id="main-mem">   
  <div id="content">
    <a class="back-link" href="membership.php">&laquo; Back to Member Information</a>
    <div class="page delete">    
      <h3>Delete member</h3>     
      <p>Are you sure you want to delete this member?</p>      
      <p class="item"><strong><?php echo $result['first_name']; echo " " ; echo $result['last_name']; ?></strong></p>    
      <form form action="<?php echo 'delete.php?id=' . $result['id']; ?>"  method="post">
        <div id="operations">
          <input type="submit" name="commit" value="Delete member" />
        </div>
      </form>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</main>

<?php 
  include ("footer.php");
?>     

