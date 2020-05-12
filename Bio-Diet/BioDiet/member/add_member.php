<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up</title>
        <script src="/BioDiet/application.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css"
              href="/BioDiet/style.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
        <link rel="shortcut icon" href="favicon.ico" >
    </head>
    <div id="mySidenav" class="sidenav"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><a href="../account.html"><i class='fas'>&#xf2bd;</i></a> <a href="../index.php">Home</a> <a href="../login.html">Login</a> <a href="../newProducts.html">Products</a> <a href="../member">Sign Up</a> <a href="#">Feedbacks & Queries</a></div>
    <div id="main"> <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="mm">&#9776;</span></div>
    <div id="home2"><a href="../index.php">
            <h1 id="high" class="bounce">Bio-Diet</h1>
        </a>
        <form action="index.php" method="post" id="create_account">
            <input type="hidden" name="action" value="add_member" />
            <div class="containers">
                <h1 id="sign_up">SIGN UP</h1>
                <hr>
                <label for="firstname"><b>First Name</b></label>
                <p>
                    <input type="text" placeholder="Enter First Name" name="firstname" required>
                </p>
                <label for="lastname"><b>Last Name</b></label>
                <p>
                    <input type="text" placeholder="Enter Last Name" name="lastname" required>
                </p>
                <label for="email"><b>Email</b></label>
                <p>
                    <input type="text" placeholder="Enter Email" name="email" required>
                </p>
                <label for="address"><b>Address</b></label>
                <p>
                    <input type="text" placeholder="Enter Address" name="address" required>
                </p>
                <label for="phone"><b>Mobile Number</b></label>
                <p>
                    <input type="text" placeholder="Enter Phone Number" name="phone" required>
                </p>
                <label for="birth"><b>Date of Birth</b></label>
                <p>
                    <input type="text" placeholder="Enter Date of Birth" name="birth" required>
                </p>
                <label for="zipcode"><b>Zipcode</b></label>
                <p>
                    <input type="text" placeholder="Enter Zipcode" name="zipcode" required>
                </p>
                <label for="password"><b>Password</b></label>
                <p>
                    <input type="text" placeholder="Enter Password" name="password" required>
                </p>

                <label>&nbsp;</label>
                <input type="submit" class="signupbtn" value="Add Member">
                <br>
                <div class="clearfix">
                    <button type="button" class="cancelbtn"><a href="../index.php">Cancel</a></button>
                </div>
            </div>
        </form>
    </body>
</html>