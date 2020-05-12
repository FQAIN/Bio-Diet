<?php require_once ('../util/valid_admin.php');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Employee</title>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="/BioDiet/application.js"></script>
        <link rel="stylesheet" type="text/css"
              href="/BioDiet/style.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="favicon.ico" >
    </head>
    <body>
        <div id="mySidenav" class="sidenav"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><a href="../adminlogin.html"><i class='fas'>&#xf2bd;</i></a> <a href="..//index.php">Home</a><a href="../product">Products Details</a><a href="?action=show_add_edit_form">Create New Employee</a><a href="../employee">Employees Details</a><a href="purchasehistory.html">Purchases</a></div>
        <div id="main"> <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="mm">&#9776;</span></div>
        <a href="../index.php">
            <h1 id="high" class="bounce">Bio-Diet</h1>
        </a>
        <form action="index.php" method="post" id="add_employee">
            <?php
            if (isset($employee_id)) {
                $heading = 'Edit';
            } else {
                $heading = 'Add';
            }
            ?>
            <input type="hidden" name="action" value="add_employee" />
            <div class="containers">
                <h1 id="sign_up"><?php echo $heading; ?> Employee</h1>
                <hr>
                <br>

                <?php if (isset($employee_id)): ?>
                    <input type="hidden" name="action" value="update_employee" />
                    <input type="hidden" name="employee_id" value="<?php echo $employee_id; ?>" />

                <?php else: ?>
                    <input type="hidden" name="action" value="add_employee" />
                <?php endif; ?>

                <label>First Name:</label>
                <p>
                    <input type="text" name="firstname" value="<?php echo $employee->getfirstname(); ?>">
                </p>
                <br>

                <label>Last Name:</label>
                <p>
                    <input type="text" name="lastname" value="<?php echo $employee->getlastname(); ?>">
                </p>
                <br>

                <label>Email:</label>
                <p>
                    <input type="text" name="email" value="<?php echo $employee->getemail(); ?>">
                </p>
                <br>

                <label>Address:</label>
                <p>
                    <input type="text" name="address" value="<?php echo $employee->getaddress(); ?>">
                </p>
                <br>

                <label>Phone Number:</label>
                <p>
                    <input type="text" name="phone" value="<?php echo $employee->getphone(); ?>">
                </p>
                <br>

                <label>Date of Birth:</label>
                <p>
                    <input type="text" name="birth" value="<?php echo $employee->getbirth(); ?>">
                </p>
                <br>

                <label>Password:</label>
                <p>
                    <input type="text" name="password" value="<?php echo $employee->getpassword(); ?>">
                </p>
                <br>

                <label>&nbsp;</label>
                <input type="submit" class="signupbtn" value="<?php echo $heading; ?> Employee">
                <br>
                <div class="clearfix">
                    <button type="button" class="cancelbtn"><a href="../index.php">Cancel</a></button>
                </div>
            </div>
        </form>
    </body>
</html>