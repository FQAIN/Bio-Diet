<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Members List</title>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="/BioDiet/application.js"></script>
        <link rel="stylesheet" type="text/css"
              href="/BioDiet/style.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="favicon.ico" >
    </head>
    <body>
        <div id="mySidenav" class="sidenav"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><a href="../adminlogin.php"><i class='fas'>&#xf2bd;</i></a> <a href="../index.php">Home</a><a href="../product">Products Details</a><a href="../customer">Members Details</a><a href="../employee">Employees Details</a><a href="../purchasehistory.html">Purchases</a></div>
        <div id="main"> <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="mm">&#9776;</span></div>
        <a href="/BioDiet/index.php">
            <h1 id="high" class="bounce">Bio-Diet</h1>
        </a>
        <main>
            <h1 id="empcrud">List of Members</h1>

            <section>
                <!-- display a table of products -->
                <table id="employees">
                    <tr>
                        <th>Member ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Date of Birth</th>
                        <th>ZipCode</th>
                        <th>Password</th>
                    </tr>
                    <?php if ($members != NULL) : ?>
                        <?php foreach ($members as $member) : ?>
                            <tr> 
                                <td><?php echo $member->getmemberid(); ?></td>
                                <td><?php echo $member->getfirstname(); ?></td>
                                <td><?php echo $member->getlastname(); ?></td>
                                <td><?php echo $member->getemail(); ?></td>
                                <td><?php echo $member->getaddress(); ?></td>
                                <td><?php echo $member->getphone(); ?></td>
                                <td><?php echo $member->getbirth(); ?></td>
                                <td><?php echo $member->getzipcode(); ?></td>
                                <td><?php echo $member->getpassword(); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </table>
            </section>
        </main>
    </body>
</html>