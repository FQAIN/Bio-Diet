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
        <div id="mySidenav" class="sidenav"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><a href="../adminlogin.html"><i class='fas'>&#xf2bd;</i></a> <a href="../index.html">Home</a><a href="../product">Products Details</a><a href="../customer">Members Details</a><a href="../employee">Employees Details</a><a href="../purchasehistory.html">Purchases</a></div>
        <div id="main"> <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="mm">&#9776;</span></div>
        <a href="/BioDiet/index.html">
            <h1 id="high" class="bounce">Bio-Diet</h1>
        </a>
<main>
    <h1>Database Error</h1>
    <p class="first_paragraph">There was an error connecting to the database.</p>
    <p>The database must be installed as described in the appendix.</p>
    <p>MySQL must be running as described in chapter 1.</p>
    <p class="last_paragraph">Error message: <?php echo $error_message; ?></p>
</main>
    </body>
</html>