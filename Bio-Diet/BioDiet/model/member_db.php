<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MemberDB {
    public static function getMembers($memberid) {
        $db = Database::getDB();
        $query = 'SELECT * FROM membersTable
                  WHERE memberid = :memberid';
        $statement = $db->prepare($query);
        $statement->bindValue(":memberid", $memberid);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        
            $member = new Member(
                                 $row['firstname'],
                                 $row['lastname'],
                                 $row['email'],
                                 $row['address'],
                                 $row['phone'],
                                 $row['birth'],
                                 $row['zipcode'],
                                 $row['password']);

        $member->setmemberid($row['memberid']);
        return $member;
    }
    
    public static function getAllMembers() {
        $db = Database::getDB();
        $query = 'SELECT * FROM membersTable
                  ORDER BY memberid';
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();
        
        foreach ($rows as $row) {
            $member = new Member(
                                 $row['firstname'],
                                 $row['lastname'],
                                 $row['email'],
                                 $row['address'],
                                 $row['phone'],
                                 $row['birth'],
                                 $row['zipcode'],
                                 $row['password']);
            $member->setmemberid($row['memberid']);
            $members[] = $member;
        }
        return $members;
    }
    
    public static function addmember($member) {
        $db = Database::getDB();

        $firstname = $member->getfirstname();
        $lastname = $member->getlastname();
        $email = $member->getemail();
        $address = $member->getaddress();
        $phone = $member->getphone();
        $birth = $member->getbirth();
        $zipcode = $member->getzipcode();
        $password = $member->getpassword();

        $query = 'INSERT INTO membersTable
                     (firstname,lastname,email,address,phone,birth,zipcode,password)
                  VALUES
                     (:firstname, :lastname, :email, :address, :phone, :birth, :zipcode, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':firstname', $firstname);
        $statement->bindValue(':lastname', $lastname);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':address', $address);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':birth', $birth);
        $statement->bindValue(':zipcode', $zipcode);
        $statement->bindValue(':password', $password);
        
        $statement->execute();
        $statement->closeCursor();
    }
            public static function deleteMember($member_id) {
        $db = Database::getDB();
        $query = 'DELETE FROM membersTable
                  WHERE memberid = :member_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':member_id', $member_id);
        $statement->execute();
        $statement->closeCursor();
    }
   
}
