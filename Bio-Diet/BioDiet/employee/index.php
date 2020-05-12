<?php
session_start();
require('../model/database.php');
require('../model/employee.php');
require('../model/employee_db.php');
require ('../model/admin_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_product';
    }
}

if ($action == 'list_product') {
    $employees = EmployeeDB::getAllEmployees();
    include('list_employees.php');
} else if ($action == 'delete_employee') {
    // Get the IDs
    $employee_id = filter_input(INPUT_POST, 'employee_id', FILTER_VALIDATE_INT);

    // Delete the product
    EmployeeDB::deleteEmployee($employee_id);

    // Display the Product List page for the current category
    header("Location: /BioDiet/employee/index.php");
} else if ($action == 'show_add_edit_form') {
    $employee_id = filter_input(INPUT_GET, 'employee_id');

    if ($employee_id == NULL) {
        $employee_id = filter_input(INPUT_POST, 'employee_id');
    }
    $employee = EmployeeDB::getEmployees($employee_id);

    include('add_employee.php');
} else if ($action == 'add_employee') {
    $firstname = filter_input(INPUT_POST, 'firstname');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $email = filter_input(INPUT_POST, 'email');
    $address = filter_input(INPUT_POST, 'address');
    $phone = filter_input(INPUT_POST, 'phone');
    $birth = filter_input(INPUT_POST, 'birth');
    $password = filter_input(INPUT_POST, 'password');

    if ($firstname == NULL || $lastname == NULL || $email == NULL || $address == NULL || $phone == NULL || $birth == NULL || $password == NULL) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else {

        add_admin($firstname, $lastname,$email,$address,$phone,$birth,$password);

        // Display the confirmation page
        header("Location: /BioDiet/employee/index.php");
    }
} else if ($action == 'update_employee') {
    $employeeID = filter_input(INPUT_POST, 'employee_id');
    $firstName = filter_input(INPUT_POST, 'firstname');
    $lastName = filter_input(INPUT_POST, 'lastname');
    $email = filter_input(INPUT_POST, 'email');
    $address = filter_input(INPUT_POST, 'address');
    $phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
    $birth = filter_input(INPUT_POST, 'birth');
    $password = filter_input(INPUT_POST, 'password');


    EmployeeDB::updateEmployee($employeeID, $firstName, $lastName, $email, $address, $phone, $birth, $password);
    header("Location: /BioDiet/employee/index.php");
} else if ($action == 'search_employee') {
    $search = filter_input(INPUT_POST, 'search');
    $check = trim($search);
    if (empty($check)) {
        header("Location: /BioDiet/employee/index.php");
    } else {
        $employees = EmployeeDB::searchEmployee($search);
        include('list_employees.php');
    }
} else if ($action == 'show_add_admin') {
    include ('add_admin.php');
} else if ($action == 'add_admin') {
    $firstname = filter_input(INPUT_POST, 'firstname');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $email = filter_input(INPUT_POST, 'email');
    $address = filter_input(INPUT_POST, 'address');
    $phone = filter_input(INPUT_POST, 'phone');
    $birth = filter_input(INPUT_POST, 'birth');
    $password = filter_input(INPUT_POST, 'password');

    add_admin($firstname, $lastname,$email,$address,$phone,$birth,$password);
     header("Location: /BioDiet/adminlogin.php");
}else if($action == 'admin_details'){
    $employee = EmployeeDB::getEmployee($_SESSION['email']);
    include('admin_details.php');
}
?>