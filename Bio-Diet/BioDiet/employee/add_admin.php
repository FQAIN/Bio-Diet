<?php require_once ('../util/valid_admin.php');?>
<!DOCTYPE html>
<html>
    <head>
        <title>Red Valley Members</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        <header>
            <h1>Red Valley Members Club</h1>
        </header>
        <main>
            <h1>Login</h1>

            <form action="index.php" method="post" id="login_form" class="aligned">
                <input type="hidden" name="action" value="add_admin">

                <label>Email:</label>
                <input type="text" class="text" name="email">
                <br>

                <label>Password:</label>
                <input type="password" class="text" name="password">
                <br>
                <label>First Name:</label>
                <input type="test" class="text" name="firstname">
                <br>
                 <label>Last Name:</label>
                <input type="test" class="text" name="lastname">
                <br>
                <label>&nbsp;</label>
                <input type="submit" value="Add">
            </form>

            
            
            <br><br>
           
        </main>
    </body>
</html>
