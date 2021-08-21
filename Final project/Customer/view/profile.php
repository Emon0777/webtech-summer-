<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "xyz_final";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    session_start();
    $username = $_SESSION['login_user'];

    $sql = "SELECT * FROM customertable WHERE email = '".$username."'";
    $result = $conn->query($sql);
	if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $name= $row['firstname']." ".$row['lastname'];
            $email = $row['email'];
            $dob = $row['dob'];
            $phone = $row['phone'];
            $gender = $row['gender'];
            $accno = $row['accountno'];
            $nid = $row['nid'];
            $nnid = $row['nnid'];
        }
    }
    $conn -> close();
?>

<html>

<head>

    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
    <title>XYZ Bank Ltd</title>

</head>

<body>
    <div>
        <div class="top-logo">
            <img src="../img/logo.jpg" alt="XYZ" width="100" height="100">
            <h1>Welcome to XYZ Bank Ltd.</h1>
        </div>
        <div class="sticky">
            <div class="topnav">
                <a href="dashboard.php">Home</a>            
                <a href="profile.php">Profile</a>
                <a href="checkbalance.php">Check Balance</a>
                <a href="moneytransfer.php">Money Transfer</a>
                <a href="transitionhistory.php">Transition History</a>    
                <a href="changepass.php">Change Password</a>
                <a href="../control/logout.php">Logout</a>
            </div>
        </div>
    </div>

        <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);  max-width: 300px;  margin: auto;  text-align: center;  font-family: arial;">
            <img src="../img/<?php echo $email?>.jpg" alt="<?php echo $name?>" style="width:30%">
            <h2 style="color: red"><?php echo $name?></h2>
                    <div style="text-align: left; margin-left: 5px; color: blue">
                        <p>Account No: <?php echo $accno?></p>
                        <p>Email: <?php echo $email?></p>
                        <p>Gender: <?php echo $gender?></p>
                        <p>Phone Number: <?php echo $phone?></p>
                        <p>Date of Birth: <?php echo $dob?></p>
                        <p>NID: <?php echo $nid?></p>
                        <p>Nomenee NID: <?php echo $nnid?></p>
                    </div>
      
            
            
            <p style="border: 2px solid black; background-color: black; padding: 5px; width: 150px; margin: auto;"><a style="color: white;"  href="editprofile.php">Edit Profile</a></p>
        </div>

        <footer>
        <p>XYZ Bank Ltd.<br>
            <a href="mailto:info@xyzbankltd.com">info@xyzbankltd.com</a>
        </p>
    </footer>
        
    </body>
</html>