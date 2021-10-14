<?php
class CRUD
{
    private $db;

    function __construct($conn)
    {
        $this->db = $conn;
    }

    function createAccount($fname, $lname, $dob, $email, $contact, $speciality)
    {

        try {
            //defining sql statement to be executed
            $sql = "INSERT INTO attendee VALUES (:fname,:lname,:dob,:email,:contact,:speciality)";
            //Preparing the sql Stmt fot execution
            $stmt = $this->db->prepare($sql);

            //bind all placeholders to the actual values
            $stmt->bindparam(':fname', $fname);
            $stmt->bindparam(':lname', $lname);
            $stmt->bindparam(':dob', $dob);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':contact', $contact);
            $stmt->bindparam(':speciality', $speciality);

            //execute statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
