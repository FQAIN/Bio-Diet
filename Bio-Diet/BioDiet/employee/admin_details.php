<?php require_once ('../util/valid_admin.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Account Details</title>
        <script src="../application.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css"
              href="/BioDiet/style.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
        <link rel="shortcut icon" href="favicon.ico" >
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    </head>
    <body>
        <div id="mySidenav" class="sidenav"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><a href="../adminlogin.php"><i class='fas'>&#xf2bd;</i></a> <a href="../index.php">Home</a><a href="../product">Products Details</a><a href="../employee">Employees Details</a><a href="../customer">Members Details</a><a href="../purchasehistory.html">Purchases</a><a href="../adminlogin.php?action=logout">Logout</a></div>
        <div id="main"> <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="mm">&#9776;</span></div>
        <div id="home"> <a href="index.php">
                <h1 id="high" class="bounce">Bio-Diet</h1>
            </a></div>
                <div class="employee_details">
                    <br>
            <h3>My Account Details</h3>
            <p class="empValues">Employee ID: <?php echo $employee->getemployeeid(); ?>  </p>
                      
            <p class="empValues">First Name: <?php echo $employee->getfirstname(); ?></p>
            
            <p class="empValues">Last Name: <?php echo $employee->getlastname(); ?></p>
            
            <p class="empValues">Email: <?php echo $employee->getemail(); ?></p>
            
            <p class="empValues">Address: <?php echo $employee->getaddress(); ?></p>
            
            <p class="empValues">Phone: <?php echo $employee->getphone(); ?></p>
            
            <p class="empValues">Date of Birth: <?php echo $employee->getbirth(); ?></p>
            
            <p class="empValues">Password: ****************</p>
            <br><br>
        </div>
    </body>
</html>