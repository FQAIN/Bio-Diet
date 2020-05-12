<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Account</title>
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
        <h1 id="profile">HI THERE FYAZ QADIR AHMED!!!!</h1>
        <div class="accountsec">
            <h2>You can change your details here</h2>
            <p>
                <img src="214-512.png" id="pp" />
            </p>	
            <label for="firstname"><b>First Name</b></label>
            <p>
                <?php echo $member->getfirstname(); ?>
            </p>
            <label for="lastname"><b>Last Name</b></label>
            <p>
                <?php echo $member->getlastname(); ?>
            </p>
            <label for="email"><b>Email</b></label>
            <p>
                <?php echo $member->getemail(); ?>
            </p>
            <label for="address"><b>Address</b></label>
            <p>
                <?php echo $member->getaddress(); ?>
            </p>
            <label for="phone"><b>Phone Number</b></label>
            <p>
                <?php echo $member->getphone(); ?>
            </p>
            <label for="birth"><b>Date of Birth</b></label>
            <p>
                <?php echo $member->getbirth(); ?>
            </p>
            <label for="zipcode"><b>Zipcode</b></label>
            <p>
                <?php echo $member->getzipcode(); ?>
            </p>
            <label for="password"><b>Password</b></label>
            <p>
                <?php echo $member->getpassword(); ?>
            </p>
            <br>
            <p>
                <button>
                    <b>Edit Account Details</b>
                </button>
            </p>
        </div>
        <footer>
            <p>Fyaz Qadir Ahmed Ikram Copyright Protected 2019</p>
        </footer>
    </body>
</html>
