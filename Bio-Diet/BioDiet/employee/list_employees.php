<?php require_once ('../util/valid_admin.php');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Employees List</title>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="/BioDiet/application.js"></script>
        <link rel="stylesheet" type="text/css"
              href="/BioDiet/style.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="favicon.ico" >
        <script>
        var search = document.getElementById("search");
        search.addEventlistener("keyup",function (event)
        {
            if(event.keyCode === 13){
                event.preventDefault();
                document.getElementById("searchForm").submit();
            }
        }    
            );
        </script>
    </head>
    <body>
        <div id="mySidenav" class="sidenav"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><a href="../adminlogin.php"><i class='fas'>&#xf2bd;</i></a> <a href="BioDiet/index.php">Home</a><a href="../product">Products Details</a><a href="../customer">Members Details</a><a href="?action=show_add_edit_form">Create New Employee</a><a href="../employee">Employees Details</a><a href="../purchasehistory.html">Purchases</a></div>
        <div id="main"> <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="mm">&#9776;</span></div>
        <a href="../index.php">
            <h1 id="high" class="bounce">Bio-Diet</h1>
        </a>
        <main>
            <h1 id="empcrud">List of Employees</h1>

            <section>
                <!-- display a table of products -->

                <form action="index.php" id="searchForm" method="post"> 
                    <input type="hidden" name="action" value="search_employee">
                    <input type="text" name="search" id="search" placeholder="Search..">
                </form>
                <table id="employees">
                    <tr>
                        <th>Employee ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Date of Birth</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    <?php if(!empty($employees)) :?>
                    <?php foreach ($employees as $employee) : ?>
                        <tr> 
                            <td><?php echo $employee->getemployeeid(); ?></td>
                            <td><?php echo $employee->getfirstname(); ?></td>
                            <td><?php echo $employee->getlastname(); ?></td>
                            <td><?php echo $employee->getemail(); ?></td>
                            <td><?php echo $employee->getaddress(); ?></td>
                            <td><?php echo $employee->getphone(); ?></td>
                            <td><?php echo $employee->getbirth(); ?></td>
                            <td><form action="." method="post"
                                      id="delete_employee_form">
                                    <input type="hidden" name="action"
                                           value="delete_employee">
                                    <input type="hidden" name="employee_id"
                                           value="<?php echo $employee->getemployeeid(); ?>">
                                    <input type="submit" value="Delete">
                                </form></td>
                                <td>
                                    <form action="." method="post"
                                          id="update_employee_form">
                                        <input type="hidden" name="action"
                                               value="show_add_edit_form">
                                        <input type="hidden" name="employee_id"
                                               value="<?php echo $employee->getemployeeid(); ?>">
                                        <input type="submit" value="Update">
                                    </form>
                                </td>
                        </tr>
                    <?php endforeach; ?>
                        <?php else : ?>
                        <p id="noResults">No Results</p>
                        <?php endif; ?>
                </table>
                <p class="border-button"><a href="?action=show_add_edit_form" class="addbtn">Add Employee</a></p>
            </section>
        </main>
    </body>
</html>