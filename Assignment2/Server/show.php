<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href= "<?php echo "../CSS/sign.css"; ?>">
</head>
  <?php
    include "../Server/header.php" ;
    require_once('db_credentials.php');
    require_once('database.php');    
    $db = db_connect();
    //access URL parameter
    $id = $_GET['id'] ;
    $sql = "SELECT * FROM membership WHERE id = '$id' ";         
    $result_set = mysqli_query($db, $sql);          
    $result = mysqli_fetch_assoc($result_set);
  ?>

  <main id="main-mem">     
    <div id="content">
      <a class="back-link"  href="membership.php">&laquo; Back to Member Information</a>
      <div class="page show">        
      <h3>View Member</h3>        
        <div class="attributes">
          <dl>
              <dt><strong>Member ID: </strong><?php echo $result['id']; ?></dt>    
          </dl>  
          <dl>
            <dt><strong>Member Name: </strong><?php echo $result['first_name']; ?>  <?php echo $result['last_name']; ?> </dt>  
          </dl>      
          <dl>
            <dt><strong>Email Address: </strong><?php echo $result['email_address']; ?></dt>    
          </dl>      
          <dl>
            <dt><strong>User Name: </strong><?php echo $result['user_name']; ?></dt>    
          </dl>      
          <dl>
            <dt><strong>Phone Number: </strong></strong><?php echo $result['phone_number']; ?></dt>    
          </dl>      
          <dl>
            <dt><strong>Password: </strong><?php echo $result['password']; ?></dt>    
          </dl>          
        </div>
      </div>
    </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  </main>
  <?php 
    include ("footer.php");
  ?>     