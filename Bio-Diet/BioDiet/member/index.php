<?php
require('../model/database.php');
require('../model/member.php');
require('../model/member_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'create_account';
    }
}  

if ($action == 'create_account') {
include('add_member.php');
}
else if ($action == 'delete_member') {
    // Get the IDs
    $member_id = filter_input(INPUT_POST, 'member_id', FILTER_VALIDATE_INT);

    // Delete the product
    MemberDB::deleteMember($member_id);

    // Display the Product List page for the current category
    header("Location: /BioDiet/member/index.php");
}


 else if ($action == 'add_member') {
    $firstname = filter_input(INPUT_POST, 'firstname');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $email = filter_input(INPUT_POST, 'email');
    $address = filter_input(INPUT_POST, 'address');
    $phone = filter_input(INPUT_POST, 'phone');
    $birth = filter_input(INPUT_POST, 'birth');
    $zipcode = filter_input(INPUT_POST, 'zipcode');
    $password = filter_input(INPUT_POST, 'password');
    
     
    if ($firstname == NULL || $lastname == NULL || $email == NULL || $address == NULL || $phone == NULL || $birth == NULL || $zipcode == NULL || $password == NULL) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        
        $member = new Member($firstname, $lastname, $email, $address,$phone,$birth,$zipcode,$password);
        MemberDB::addmember($member);

        // Display the confirmation page
//       header("Location: /BioDiet/member/index.php");
       include('account.php');
    }
} 
?>