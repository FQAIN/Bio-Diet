<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EmployeeDB {

    public static function getEmployees($employeeid) {
        $db = Database::getDB();
        $query = 'SELECT * FROM employeesTable
                  WHERE employeeid = :employeeid';
        $statement = $db->prepare($query);
        $statement->bindValue(":employeeid", $employeeid);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();

        $employee = new Employee(
                $row['firstname'], $row['lastname'], $row['email'], $row['address'], $row['phone'], $row['birth'], $row['password']);
        $employee->setemployeeid($row['employeeid']);
        return $employee;
    }
    
    public static function getEmployee($email) {
        $db = Database::getDB();
        $query = 'SELECT * FROM employeesTable
                  WHERE email = :email';
        $statement = $db->prepare($query);
        $statement->bindValue(":email", $email);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();

        $employee = new Employee(
                $row['firstname'], $row['lastname'], $row['email'], $row['address'], $row['phone'], $row['birth'], $row['password']);
        $employee->setemployeeid($row['employeeid']);
        return $employee;
    }

    public static function getAllEmployees() {
        $db = Database::getDB();
        $query = 'SELECT * FROM employeesTable
                  ORDER BY employeeid';
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        foreach ($rows as $row) {
            $employee = new Employee(
                    $row['firstname'], $row['lastname'], $row['email'], $row['address'], $row['phone'], $row['birth'], $row['password']);
            $employee->setemployeeid($row['employeeid']);
            $employees[] = $employee;
        }
        return $employees;
    }

    public static function addemployee($employee) {
        $db = Database::getDB();

        $firstname = $employee->getfirstname();
        $lastname = $employee->getlastname();
        $email = $employee->getemail();
        $address = $employee->getaddress();
        $phone = $employee->getphone();
        $birth = $employee->getbirth();
        $password = $employee->getpassword();

        $query = 'INSERT INTO employeesTable
                     (firstname,lastname,email,address,phone,birth,password)
                  VALUES
                     (:firstname, :lastname, :email, :address, :phone, :birth, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':firstname', $firstname);
        $statement->bindValue(':lastname', $lastname);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':address', $address);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':birth', $birth);
        $statement->bindValue(':password', $password);

        $statement->execute();
        $statement->closeCursor();
    }

    public static function deleteEmployee($employee_id) {
        $db = Database::getDB();
        $query = 'DELETE FROM employeesTable
                  WHERE employeeid = :employee_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':employee_id', $employee_id);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function updateEmployee($employeeid, $firstname, $lastname, $email, $address, $phone, $birth, $password) {
        $db = Database::getDB();
         $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = 'UPDATE employeesTable

                 SET employeeid = :employeeid,
                 firstname = :firstname,
                 lastname = :lastname,
                 email = :email,
                 address = :address,
                 phone = :phone,
                 birth = :birth,
                 password = :password
                  WHERE employeeid = :employeeid';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':employeeid', $employeeid);
            $statement->bindValue(':firstname', $firstname);
            $statement->bindValue(':lastname', $lastname);
            $statement->bindValue(':email', $email);
            $statement->bindValue(':address', $address);
            $statement->bindValue(':phone', $phone);
            $statement->bindValue(':birth', $birth);
            $statement->bindValue(':password', $hash);
            $row_count = $statement->execute();
            $statement->closeCursor();
            return $row_count;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }

    public static function searchEmployee($value) {
        $db = Database::getDB();
        $query = "SELECT * FROM employeesTable
                WHERE firstname LIKE '%" . $value . "%'
                    ORDER BY firstname, lastname";

        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        if (empty($rows)) {
            return '';
        }

        foreach ($rows as $row) {
            $employee = new Employee(
                    $row['firstname'], $row['lastname'], $row['email'], $row['address'], $row['phone'], $row['birth'], $row['password']);
            $employee->setemployeeid($row['employeeid']);
            $employees[] = $employee;
        }
        return $employees;
    }

}
