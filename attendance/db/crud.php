<?php
class crud{
    // private database object\
    private $db;

    // constructorto initialize private variable to the database connection
    function __construct($conn){
        $this->db = $conn;
    } 

    // fuction to insert a new record into the attendee databace
    public function insert($fname, $lname, $dob, $email, $phone, $specialty){
        try {
            // Define sql statement to be executed
            $sql = "INSERT INTO attendee(firstname,lastname,dob,email,phone,specialty_id) VALUES (:fname, :lname, :dob, :email, :phone, :specialty)"; 
            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':phone',$phone);
            $stmt->bindparam(':specialty',$specialty);

            $stmt->execute();
            return true;
            
            
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
?>

