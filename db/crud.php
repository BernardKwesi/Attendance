<?php
class CRUD
{
    private $db;

    function __construct($conn)
    {
        $this->db = $conn;
    }

    function createAttendee($fname, $lname, $dob, $email, $contact, $speciality)
    {

        try {
            //defining sql statement to be executed
            $sql = "INSERT INTO attendee(Firstname,Lastname,DateOfBirth,Email,Contact,Speciality_ID) VALUES (:fname,:lname,:dob,:email,:contact,:speciality)";
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

    function getAttendees()
    {
        $sql = "SELECT * FROM attendee a inner join Speciality s on a.Speciality_ID = s.Speciality_ID";
        $result = $this->db->query($sql);

        return $result;
    }

    function getAttendeeDetails($id)
    {
        $sql = "SELECT * FROM attendee a inner join Speciality s on a.Speciality_ID = s.Speciality_ID WHERE attendee_ID = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    function getSpeciality()
    {
        $sql = "SELECT * FROM Speciality";
        $result = $this->db->query($sql);

        return $result;
    }
}
