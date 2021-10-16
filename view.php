<?php
$title = "View Details";
require_once "includes/header.php";
require_once 'db/conn.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $crud->getAttendeeDetails($id);
}

?>
<div class="card mt-4" style="width: 18rem; ">
    <div class="card-body">
        <p class="card-text">ID : <?php echo $result['attendee_ID'];  ?></p>
        <p class="card-text">NAME : <?php echo $result['Firstname'] . $result['Lastname']; ?></p>
        <p class="card-text">DATE OF BIRTH : <?php echo $result['DateOfBirth'];  ?></p>
        <p class="card-text">EMAIL : <?php echo $result['Email']; ?></p>
        <p class="card-text">CONTACT : <?php echo $result['Contact'];  ?></p>
        <p class="card-text">SPECIALTY : <?php echo $result['Expertise'];  ?></p>


    </div>
</div>


<?php require_once "includes/footer.php"; ?>