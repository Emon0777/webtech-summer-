<?php
include("../control/deposit_validation.php");
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Deposit</title>
    </head>
    <body>

    <a href="../view/dashboard.php">Dashboard</a><br>
        <a href="../view/deposit.php">Deposit</a><br>
        <a href="../view/withdraw.php">Withdraw</a><br>
        <a href="../view/customerlist.php">Customers List</a><br>        
        <a href="../view/customer.php">Account</a><br>       
        <a href="../view/addmanagercashier.php">Add Manager/Cashier</a><br>   
        <a href="../view/changepassword.php">Change Password</a><br>
        <a href="../control/logout_validation.php">logout</a><br>
        
    <fieldset>
        <legend><b>Deposit:</b></legend>
        <form  action="" method="POST">

            <label for="sender">Account No:</label>
            <input type="text" name="sender" id="sender">

            <br>

            <label for="amount">Amount:</label>
            <input type="text" name="amount" id="amount">

            <br>            

            <?php echo $error; ?>
            <br>

            <input type="submit" value="Deposit" name="button"> 
        </form>
    </fieldset>         
    </body>
</html>