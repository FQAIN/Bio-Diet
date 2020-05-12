<?php

function add_admin($firstname, $lastname, $email, $address, $phone, $birth, $password) {
    $db = Database::getDB();
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO employeesTable (firstname,lastname,email,address,phone,birth,password)
              VALUES (:firstname,:lastname,:email,:address,:phone,:birth,:password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $hash);
    $statement->bindValue(':firstname', $firstname);
    $statement->bindValue(':lastname', $lastname);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':birth', $birth);
    $statement->execute();
    $statement->closeCursor();
}

function is_valid_admin_login($email, $password) {
    $db = Database::getDB();
    $query = 'SELECT password FROM employeesTable
              WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();
    $hash = $row['password'];
    return password_verify($password, $hash);
}

?>