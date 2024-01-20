<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all"  href= "<?php echo "../CSS/sign.css"; ?>">
    <title>The Library - Membership</title>
</head>
<style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }             
</style>

<?php 
    include ("header.php");    
    require_once('db_credentials.php');    
    require_once('database.php');
    $db = db_connect();
?>

<?php
    $sql = "SELECT * FROM membership ";
    $sql .= "ORDER BY id ASC";
    //echo $sql;
    $result_set = mysqli_query($db,$sql);
?>

<main id="main-mem">        

    <div id="content">
        <div class="subjects listing">
            <h2 class="h1form">Member Information</h2>    
            
            <table class="styled-table">
                <tr>
                <th>Member ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>User Name</th>
                <th>Phone Number</th>
                <th>Password</th>
                <th>&nbsp</th>
                <th>&nbsp</th>
                <th>&nbsp</th>
                </tr>

                <?php while($results = mysqli_fetch_assoc($result_set)) { ?>
                <tr>
                    <td><?php echo $results['id']; ?></td>
                    <td><?php echo $results['first_name']; ?></td>
                    <td><?php echo $results['last_name'] ; ?></td>
                    <td><?php echo $results['email_address']; ?></td>
                    <td><?php echo $results['user_name']; ?></td>
                    <td><?php echo $results['phone_number']; ?></td>
                    <td><?php echo $results['password']; ?></td>
                    <td><a class="action" href="<?php echo"show.php?id=" . $results['id']; ?>">View</a></td>
                    <td><a class="action" href="<?php echo "edit.php?id=" . $results['id']; ?>">Edit</a></td>
                    <td><a class="action" href="<?php echo "delete.php?id=" . $results['id']; ?>">Delete</a></td> 
                </tr>
                <?php } ?>
            </table>
            <br>
            <br>
        </div>
    </div>
</main>

<?php 
    include ("footer.php");
?>     
