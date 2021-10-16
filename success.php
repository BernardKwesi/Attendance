<?php
$title = "Success";
require_once "includes/header.php";
require_once 'db/conn.php';


?>

<?php
if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];
    $speciality = $_POST['speciality'];

    $issuccess = $crud->createAttendee($firstname, $lastname,  $dob, $email, $contact, $speciality);

    if ($issuccess) {
        echo "<h1 class='display-3 text-center text-success'> Registration Successful!!!</h1>";
    } else {
        echo "<h1 class='display-2 text-center text-danger'>Registration UnSuccessful !!</h1>";
    }
}







?>

<div class="card mt-4" style="width: 18rem; ">
    <div class="card-body">
        <p class="card-text">Name : <?php echo $firstname . " " . $lastname ?></p>
        <p class="card-text">Email : <?php echo $email ?></p>
        <p class="card-text">Date of Birth :<?php echo $dob ?></p>
        <p class="card-text">Contact: <?php echo $contact ?></p>
        <p class="card-text">Specialty: <?php echo $speciality ?></p>
    </div>
</div>


<?php require_once "includes/footer.php"; ?>